<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Blog;
use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\Template;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class AudiosController extends Controller
{
    public function index()
    {
        return view('frontend.blog');
    }

    public function create(Request $request)
    {
        $books = Book::all();
        $authors = BookAuthor::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $sub_subcategories = SubSubcategory::all();

        return view('administration.stream.audio.new-audio', [
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories, 
            'books' => $books,
            'authors' => $authors,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'slug' => ['required', 'regex:/^[a-z]+$/'],
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ], [
        //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
        // ]);

        $audio = Audio::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'duration' => $request->duration,
            'release_date' => $request->release_date,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'genre' => $request->genre,
            'album' => $request->album,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_featured' => $request->is_featured,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $audio->save();

        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path('stream/audio/image/cover-image'), $coverImage);
            $audio->cover_image = $coverImage;
        }

        if ($request->hasFile('audio_file')) {
            $audioFile = $request->file('audio_file')->getClientOriginalName();
            $request->file('audio_file')->move(public_path('stream/audio'), $audioFile);
            $audio->audio_file = $audioFile;
        }

        if ($request->hasFile('og')) {
            $og = $request->file('og')->getClientOriginalName();
            $request->file('og')->move(public_path('stream/audio/image/og'), $og);
            $audio->og = $og;
        }

        if ($request->hasFile('featured_image') || $request->hasFile('file') || $request->hasFile('og')) {
            $audio->save();
        }

        Session::flash('message', __('New Audio Successfully Added!'));
        
        return redirect(RouteServiceProvider::Audio);
    }

    public function show(Request $request)
    {            
        $blogs = Audio::all();
        
        return view('administration.stream.audio.manage-audios', ['blogs' => $blogs]);
    }

    public function edit($id)
    {
        $blog = Audio::findOrFail($id);
        $books = Book::all();
        $authors = BookAuthor::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $sub_subcategories = SubSubcategory::all();
        
        return view('administration.stream.audio.edit-blog', [
            'blog' => $blog,
            'books' => $books,
            'authors' => $authors,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $blog = Audio::find($id);

        if ($blog) {
            $featuredImage = $request->file('featured_image');

            if ($featuredImage) {
                $validatedData = $request->validate([
                    // 'featured_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $featuredImageName = $request->featured_image->getClientOriginalName();
                $request->featured_image->move(public_path('blog/image/featured'), $featuredImageName);

                $blog->featured_image = $featuredImageName;
            }

            $file = $request->file('file');

            if ($file) {
                $validatedData = $request->validate([
                    // 'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $Name = $request->file->getClientOriginalName();
                $request->file->move(public_path('blog/file'), $Name);

                $blog->file = $Name;
            }

            $og = $request->file('og');

            if ($og) {
                $validatedData = $request->validate([
                    // 'og' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $ogImageName = $request->og->getClientOriginalName();
                $request->og->move(public_path('blog/image/og'), $ogImageName);

                $blog->og = $ogImageName;
            }

            // Update other fields of the request
            $blog->title = $request->input('title');
            $blog->slug = $request->input('slug');            
            $blog->tags = $request->input('tags');
            $blog->header_title = $request->input('header_title');
            $blog->category_name = $request->input('category_name');
            $blog->subcategory_name = $request->input('subcategory_name');
            $blog->sub_subcategory_name = $request->input('sub_subcategory_name');
            $blog->book = $request->input('book');
            $blog->author = $request->input('author');
            $blog->short_description = $request->input('short_description');
            $blog->long_description = $request->input('long_description');
            $blog->youtube_iframe = $request->input('youtube_iframe');
            $blog->header_content = $request->input('header_content');
            $blog->meta_title = $request->input('meta_title');
            $blog->meta_description = $request->input('meta_description');
            $blog->is_featured = $request->input('is_featured');
            $blog->status = $request->input('status');
            $blog->comment = $request->input('comment');

            // Save the changes
            $blog->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Blog Successfully Updated!'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        Audio::where('id',$id)->delete();

        Session::flash('delete', __('Blog Successfully Deleted!'));
        
        return back();
    }
}

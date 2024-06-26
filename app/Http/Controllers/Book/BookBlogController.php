<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;

use App\Models\Book\Book;
use App\Models\Book\BookBlog;
use App\Models\Book\BookBook;
use App\Models\Book\BookBookAuthor;
use App\Models\Book\BookCategory;
use App\Models\Book\BookSubcategory;
use App\Models\Book\BookSubSubcategory;

use App\Models\Template\Template;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BookBlogController extends Controller
{
    public function index()
    {
        $featuredBlogs = BookBlog::where('is_featured', 1)->get();
        $takeBlogs = BookBlog::take(2)->get();

        return view('frontend.book.blog', ['featuredBlogs' => $featuredBlogs, 'takeBlogs' => $takeBlogs]);
    }

    public function blogs()
    {
        $featuredBlogs = BookBlog::where('is_featured', 1)->get();
        $takeBlogs = BookBlog::take(2)->get();

        return view('frontend.book.blog', ['featuredBlogs' => $featuredBlogs, 'takeBlogs' => $takeBlogs]);
    }

    public function create(Request $request)
    {
        $books = Book::all();
        $authors = BookAuthor::all();
        $categories = BookCategory::all();
        $subcategories = BookSubcategory::all();
        $sub_subcategories = BookSubSubcategory::all();

        return view('administration.blogs.new-blog', [
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

        $blog = BookBlog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'tags' => $request->tags,
            'header_title' => $request->header_title,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'book' => $request->book,
            'author' => $request->author,
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

        $blog->save();

        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->move(public_path('blog/image/featured'), $featuredImage);
            $blog->featured_image = $featuredImage;
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('blog/file'), $file);
            $blog->file = $file;
        }

        if ($request->hasFile('og')) {
            $og = $request->file('og')->getClientOriginalName();
            $request->file('og')->move(public_path('blog/image/og'), $og);
            $blog->og = $og;
        }

        if ($request->hasFile('featured_image') || $request->hasFile('file') || $request->hasFile('og')) {
            $blog->save();
        }

        Session::flash('message', __('New Blog Successfully Added!'));
        
        return redirect(RouteServiceProvider::Blog);
    }

    public function show(Request $request)
    {            
        $blogs = BookBlog::all();
        
        return view('administration.blogs.manage-blogs', ['blogs' => $blogs]);
    }

    public function detail($slug)
    {
        $blog = BookBlog::where('slug', $slug)->firstOrFail();
        $relatedBlog = Blog::take(4)->get();

        return view('frontend.book.blog-detail', [
            'blog' => $blog,
            'relatedBlog' => $relatedBlog
        ]);
    }

    public function edit($id)
    {
        $blog = BookBlog::findOrFail($id);
        $books = Book::all();
        $authors = BookAuthor::all();
        $categories = BookCategory::all();
        $subcategories = BookSubcategory::all();
        $sub_subcategories = BookSubSubcategory::all();
        
        return view('administration.blogs.edit-blog', [
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
        $blog = BookBlog::find($id);

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

            if (!is_null($request->input('status'))) {
                $audio->status = $request->input('status');
            }
            
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
        BookBlog::where('id',$id)->delete();

        Session::flash('delete', __('Blog Successfully Deleted!'));
        
        return back();
    }
}

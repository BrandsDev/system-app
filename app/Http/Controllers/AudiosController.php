<?php

namespace App\Http\Controllers;

use App\Models\Audio;
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
        if ($request->routeIs('new-audio')) {
            
            $audios = Audio::all();
            $categories = Category::all();
            $subcategories = Subcategory::all();
            $sub_subcategories = SubSubcategory::all();

            return view('administration.stream.audio.new-audio', [
                'audios' => $audios,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'sub_subcategories' => $sub_subcategories,
            ]);

        } elseif ($request->routeIs('new-audio-playlist')) {
            
            $audios = Audio::all();
            $categories = Category::all();
            $subcategories = Subcategory::all();
            $sub_subcategories = SubSubcategory::all();

            // dd($audios);

            return view('administration.stream.audio.playlist.new-audio-playlist', [
                'audios' => $audios,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'sub_subcategories' => $sub_subcategories,
            ]);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->routeIs('new-audio.store')) {
            
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

        } elseif ($request->routeIs('new-audio-playlist.store')) {
            
            $audios = Audio::all();
            $categories = Category::all();
            $subcategories = Subcategory::all();
            $sub_subcategories = SubSubcategory::all();

            // dd($audios);

            return view('administration.stream.audio.playlist.new-audio-playlist', [
                'audios' => $audios,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'sub_subcategories' => $sub_subcategories,
            ]);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    public function show(Request $request)
    {
        if ($request->routeIs('manage-audios')) {

            $audios = Audio::all();
            
            return view('administration.stream.audio.manage-audios', ['audios' => $audios]);

        } elseif ($request->routeIs('manage-audio-playlists')) {
            
            $audios = Audio::all();
            
            return view('administration.stream.audio.playlist.manage-audio-playlists', ['audios' => $audios]);
        }
        
        return view('/dashboard');
    }

    public function edit($id)
    {
        if ($request->routeIs('audio.edit')) {

            $audio = Audio::findOrFail($id);
            $categories = Category::all();
            $subcategories = Subcategory::all();
            $sub_subcategories = SubSubcategory::all();
            
            return view('administration.stream.audio.edit-audio', [
                'audio' => $audio,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'sub_subcategories' => $sub_subcategories,
            ]);

        } elseif ($request->routeIs('audio-playlist.edit')) {

            $audio = Audio::findOrFail($id);
            $categories = Category::all();
            $subcategories = Subcategory::all();
            $sub_subcategories = SubSubcategory::all();
            
            return view('administration.stream.audio.playlist.edit-audio-playlist', [
                'audio' => $audio,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'sub_subcategories' => $sub_subcategories,
            ]);
        }
        
        return view('/dashboard');
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $audio = Audio::find($id);

        if ($audio) {
            $coverImage = $request->file('cover_image');

            if ($coverImage) {
                $validatedData = $request->validate([
                    // 'cover_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $coverImageName = $request->cover_image->getClientOriginalName();
                $request->cover_image->move(public_path('stream/audio/image/cover-image'), $coverImageName);

                $audio->cover_image = $coverImageName;
            }

            $audioFile = $request->file('audio_file');

            if ($audioFile) {
                $validatedData = $request->validate([
                    // 'audio_file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $audioFileName = $request->audio_file->getClientOriginalName();
                $request->audio_file->move(public_path('stream/audio'), $audioFileName);

                $audio->audio_file = $audioFileName;
            }

            $og = $request->file('og');

            if ($og) {
                $validatedData = $request->validate([
                    // 'og' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $ogImageName = $request->og->getClientOriginalName();
                $request->og->move(public_path('stream/audio/image/og'), $ogImageName);

                $audio->og = $ogImageName;
            }

            // Update other fields of the request
            $audio->title = $request->input('title');
            $audio->artist = $request->input('artist');            
            $audio->duration = $request->input('duration');

            if (!is_null($request->input('release_date'))) {
                $audio->release_date = $request->input('release_date');
            }
            
            $audio->category_name = $request->input('category_name');
            $audio->subcategory_name = $request->input('subcategory_name');
            $audio->sub_subcategory_name = $request->input('sub_subcategory_name');
            $audio->genre = $request->input('genre');
            $audio->album = $request->input('album');
            $audio->short_description = $request->input('short_description');
            $audio->long_description = $request->input('long_description');
            $audio->youtube_iframe = $request->input('youtube_iframe');
            $audio->header_content = $request->input('header_content');
            $audio->meta_title = $request->input('meta_title');
            $audio->meta_description = $request->input('meta_description');
            $audio->is_featured = $request->input('is_featured');

            if (!is_null($request->input('status'))) {
                $audio->status = $request->input('status');
            }

            $audio->comment = $request->input('comment');

            // Save the changes
            $audio->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('There is a problem!'));

            return back();
        }

        Session::flash('update', __('Audio Successfully Updated!'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        if ($request->routeIs('audio.destroy')) {
        
            Audio::where('id',$id)->delete();

            Session::flash('delete', __('Audio Successfully Destroyed!'));
            
            return back();

        } elseif ($request->routeIs('audio-playlist.destroy')) {
        
            Audio::where('id',$id)->delete();

            Session::flash('delete', __('Audio Playlist Successfully Destroyed!'));
            
            return back();
        }
        
        return view('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BookPublisher;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BookPublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.books.publishers.new-publisher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'slug' => ['required', 'regex:/^[a-z]+$/'],
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ], [
        //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
        // ]);

        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('book/image/publisher'), $imageName);

        $ogImage = $request->og->getClientOriginalName();
        $request->og->move(public_path('book/image/publisher'), $ogImage);

        $banner = $request->banner->getClientOriginalName();
        $request->banner->move(public_path('book/image/publisher'), $banner);

        $book = BookPublisher::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description,
            'youtube_iframe' => $request->youtube_iframe,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'image' => $imageName,
            'og' => $ogImage,
            'banner' => $banner,
            'status' => $request->status,
        ]);

        $book->save();

        Session::flash('message', __('New Publihser Successfully Added!'));
        
        return redirect(RouteServiceProvider::Publisher);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $bookDetail)
    {
        $publishers = BookPublisher::all();

        return view('administration.books.publishers.manage-publishers', ['publishers' => $publishers]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $books = BookPublisher::where('slug', $slug)->firstOrFail();

        return view('frontend.books.publishers.publisher-detail', ['books' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publisher = BookPublisher::findOrFail($id);

        return view('administration.books.publishers.edit-publisher', ['publisher' => $publisher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $publisher = BookPublisher::find($id);

        if ($publisher) {
            $imageName = $request->file('image');

            if ($imageName) {
                $validatedData = $request->validate([
                    // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newImageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('book/publisher/image'), $newImageName);

                $publisher->image = $newImageName;
            }

            $ogImage = $request->file('og_image');

            if ($ogImage) {
                $validatedData = $request->validate([
                    // 'og_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newOGImageName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('book/publisher/image'), $newOGImageName);

                $publisher->og_image = $newOGImageName;
            }

            $banner = $request->file('file');

            if ($banner) {
                $validatedData = $request->validate([
                    // 'file' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newBannerName = $request->file->getClientOriginalName();
                $request->file->move(public_path('book/publisher/image'), $newBannerName);

                $publisher->file = $newBannerName;
            }

            // Update other fields of the request
            $publisher->name = $request->input('name');
            $publisher->slug = $request->input('slug');
            $publisher->mobile = $request->input('mobile');
            $publisher->email = $request->input('email');
            $publisher->address = $request->input('address');
            $publisher->description = $request->input('description');
            $publisher->youtube_iframe = $request->input('youtube_iframe');
            $publisher->meta_title = $request->input('meta_title');
            $publisher->meta_description = $request->input('meta_description');
            $publisher->status = $request->input('status');

            // Save the changes
            $publisher->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            return back();
        }

        Session::flash('update', __('Publisher Successfully Updated!'));
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BookPublisher::where('id',$id)->delete();

        Session::flash('delete', __('Successfully Deleted!'));
        
        return back();
    }
}

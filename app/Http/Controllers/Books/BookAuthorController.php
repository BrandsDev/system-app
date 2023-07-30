<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BookAuthorController extends Controller
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
        return view('administration.book.author.new-author');
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

        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('book/image/author'), $image);

        $og = $request->og->getClientOriginalName();
        $request->og->move(public_path('book/image/author'), $og);

        $banner = $request->banner->getClientOriginalName();
        $request->banner->move(public_path('book/image/author'), $banner);

        $book = BookAuthor::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'gender' => $request->gender,
            'bio' => $request->bio,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description,
            'youtube_iframe' => $request->youtube_iframe,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'image' => $image,
            'og' => $og,
            'banner' => $banner,
            'status' => $request->status,
        ]);

        $book->save();

        Session::flash('message', __('New Author Successfully Added!'));
        
        return redirect(RouteServiceProvider::Author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $bookDetail)
    {
        $authors = BookAuthor::all();

        return view('administration.books.authors.manage-authors', ['authors' => $authors]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $authors = BookAuthor::where('slug', $slug)->firstOrFail();


        return view('frontend.Book-detail', ['books' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = BookAuthor::findOrFail($id);

        return view('administration.books.authors.edit-author', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Retrieve the existing record from the database
        $book = BookAuthor::find($id);

        // Make sure the record exists
        if ($book) {
            // Validate and process the new image
            $newImage = $request->file('image');

            if ($newImage) {
                // Validate the new image file
                $validatedData = $request->validate([
                    // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new image file (e.g., move to a specific directory, assign a new filename)
                $newImageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('book/image/author'), $newImageName);

                // Update the image data in the model
                $book->image = $newImageName;
            }

            // Validate and process the new image
            $newPageImages = $request->file('page_images');

            if ($newPageImages) {
                // Validate the new page images page images
                $validatedData = $request->validate([
                    // 'page_images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new page images page images (e.g., move to a specific directory, assign a new filename)
                $newPageImageName = $request->page_images->getClientOriginalName();
                $request->page_images->move(public_path('book/image/author/pages'), $newPageImageName);

                // Update the page images data in the model
                $book->page_images = $newPageImageName;
            }

            // Validate and process the new image
            $newOGImage = $request->file('og_image');

            if ($newOGImage) {
                // Validate the new OG Image OG Image
                $validatedData = $request->validate([
                    // 'og_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new OG Image OG Image (e.g., move to a specific directory, assign a new filename)
                $newOGImageName = $request->og_image->getClientOriginalName();
                $request->og_image->move(public_path('book/image/author'), $newOGImageName);

                // Update the OG Image data in the model
                $book->og_image = $newOGImageName;
            }

            // Validate and process the new image
            $newFile = $request->file('file');

            if ($newFile) {
                // Validate the new file file
                $validatedData = $request->validate([
                    // 'file' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new file file (e.g., move to a specific directory, assign a new filename)
                $newFileName = $request->file->getClientOriginalName();
                $request->file->move(public_path('book/file'), $newFileName);

                // Update the file data in the model
                $book->file = $newFileName;
            }

            // Update other fields of the request
            $book->name = $request->input('name');
            $book->slug = $request->input('slug');
            $book->category_name = $request->input('category_name');
            $book->subcategory_name = $request->input('subcategory_name');
            $book->sub_subcategory_name = $request->input('sub_subcategory_name');
            $book->sku = $request->input('sku');
            $book->sale_price = $request->input('sale_price');
            $book->regular_price = $request->input('regular_price');
            $book->commission = $request->input('commission');
            $book->publisher = $request->input('publisher');
            $book->ranking = $request->input('ranking');
            $book->author = $request->input('author');
            $book->short_description = $request->input('short_description');
            $book->long_description = $request->input('long_description');
            $book->specification = $request->input('specification');
            $book->youtube_iframe = $request->input('youtube_iframe');
            $book->header_content = $request->input('header_content');
            $book->meta_title = $request->input('meta_title');
            $book->meta_description = $request->input('meta_description');
            $book->order_type = $request->input('order_type');

            if (!is_null($request->input('status'))) {
                $audio->status = $request->input('status');
            }
            
            $book->comment = $request->input('comment');

            // Save the changes
            $book->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            dd();
        }

        Session::flash('update', __('Book Successfully Updated!'));
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BookAuthor::where('id',$id)->delete();

        Session::flash('delete', __('Successfully Deleted!'));
        
        return back();
    }
}

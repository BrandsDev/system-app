<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\SubSubCategories;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.book-detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $subcategories = SubCategories::all();
        $sub_subcategories = SubSubCategories::all();

        return view('administration.books.new-book', ['categories' => $categories, 'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
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
        $request->image->move(public_path('book/image'), $imageName);

        $pageImages = $request->page_images->getClientOriginalName();
        $request->page_images->move(public_path('book/image'), $pageImages);

        $ogImage = $request->og_image->getClientOriginalName();
        $request->og_image->move(public_path('book/image'), $ogImage);

        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('book/file'), $fileName);

        $book = Book::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'sku' => $request->sku,
            'sale_price' => $request->sale_price,
            'regular_price' => $request->regular_price,
            'commission' => $request->commission,
            'publisher' => $request->publisher,
            'ranking' => $request->ranking,
            'author' => $request->author,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'specification' => $request->specification,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'order_type' => $request->order_type,
            'image' => $imageName,
            'page_images' => $pageImages,
            'og_image' => $ogImage,
            'file' => $fileName,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $book->save();

        Session::flash('message', __('New Book Successfully Added!'));
        
        return redirect(RouteServiceProvider::Book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $bookDetail)
    {
        $books = Book::all();

        return view('administration.books.manage-books', ['books' => $books]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $books = Book::where('slug', $slug)->firstOrFail();


        return view('frontend.Book-detail', ['books' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);     
        $categories = Categories::all();
        $subcategories = SubCategories::all();
        $sub_subcategories = SubSubCategories::all();

        return view('administration.books.edit-Book', ['book' => $book, 'categories' => $categories,'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Retrieve the existing record from the database
        $book = Book::find($id);

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
                $request->image->move(public_path('book/image'), $newImageName);

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
                $request->page_images->move(public_path('book/image'), $newPageImageName);

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
                $request->og_image->move(public_path('book/image'), $newOGImageName);

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
            $book->status = $request->input('status');
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
        Book::where('id',$id)->delete();

        Session::flash('delete', __('Successfully Deleted!'));
        
        return back();
    }
}

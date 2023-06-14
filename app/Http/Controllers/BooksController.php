<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\BookPublisher;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;
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
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $sub_subcategories = SubSubcategory::all();

        $authors = BookAuthor::all();
        $publishers = BookPublisher::all();        

        return view('administration.books.new-book', [
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories,
            'authors' => $authors,
            'publishers' => $publishers
        ]);
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
            'order_type' => $request->input('order_type', 0),
            'is_featured' => $request->input('is_featured', 0),
            'status' => $request->input('status', 0),
            'comment' => $request->comment,
        ]);

        $book->save();

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('book/image'), $imageName);
            $book->image = $imageName;
        }

        if ($request->hasFile('page_images')) {
            $pageImages = $request->file('page_images')->getClientOriginalName();
            $request->file('page_images')->move(public_path('book/image/page'), $pageImages);
            $book->page_images = $pageImages;
        }

        if ($request->hasFile('og')) {
            $og = $request->file('og')->getClientOriginalName();
            $request->file('og')->move(public_path('book/image/og'), $og);
            $book->og = $og;
        }

        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('book/file'), $fileName);
            $book->file = $fileName;
        }

        if ($request->hasFile('image') || $request->hasFile('page_images') || $request->hasFile('og') || $request->hasFile('file')) {
            $book->save();
        }

        Session::flash('message', __('New Book Successfully Added!'));
        
        return redirect(RouteServiceProvider::Book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $books = Book::all();

        return view('administration.books.manage-books', ['books' => $books]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();


        return view('frontend.book.book-detail', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $bookAuthors = BookAuthor::all();
        $BookPublishers = BookPublisher::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $sub_subcategories = SubSubcategory::all();

        return view('administration.books.edit-Book', [
            'book' => $book, 
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
            'bookAuthors' => $bookAuthors,
            'BookPublishers' => $BookPublishers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $book = Book::find($id);

        if ($book) {
            $newImage = $request->file('image');

            if ($newImage) {
                $validatedData = $request->validate([
                    // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newImageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('book/image'), $newImageName);

                $book->image = $newImageName;
            }

            $newPageImages = $request->file('page_images');

            if ($newPageImages) {
                $validatedData = $request->validate([
                    // 'page_images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newPageImageName = $request->page_images->getClientOriginalName();
                $request->page_images->move(public_path('book/image/pages'), $newPageImageName);

                $book->page_images = $newPageImageName;
            }

            $newOGImage = $request->file('og');

            if ($newOGImage) {
                $validatedData = $request->validate([
                    // 'og' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newOGImageName = $request->og->getClientOriginalName();
                $request->og->move(public_path('book/image'), $newOGImageName);

                $book->og = $newOGImageName;
            }

            $newFile = $request->file('file');

            if ($newFile) {
                $validatedData = $request->validate([
                    // 'file' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $newFileName = $request->file->getClientOriginalName();
                $request->file->move(public_path('book/file'), $newFileName);

                $book->file = $newFileName;
            }

            // dd($book->og);

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
            $book->is_featured = $request->input('is_featured');
            $book->status = $request->input('status');
            $book->comment = $request->input('comment');

            $book->save();

        } else {
            Session::flash('update', __('The record does not exist'));
        
            return back();
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

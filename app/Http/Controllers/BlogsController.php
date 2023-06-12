<?php

namespace App\Http\Controllers;

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

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $books = Book::all();
        $authors = BookAuthor::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $sub_subcategories = SubSubcategory::all();

        return view('administration.blogs.new-blog', [
            'categories' => $categories, 
            'subcategories' => $subcategories, 
            'sub_subcategories' => $sub_subcategories, 
            'books' => $books,
            'authors' => $authors,
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
    public function show(Request $request)
    {            
        $blogs = Blog::all();
        
        return view('administration.blogs.manage-blogs', ['blogs' => $blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if ($request->routeIs('category.edit')) {

            $category = Category::findOrFail($id);
            
            return view('administration.categories.edit-category', ['category' => $category]);

        } elseif ($request->routeIs('subcategory.edit')) {

            $categories = Category::select('category_name')->get();

            $subcategory = Subcategory::findOrFail($id);
            
            return view('administration.categories.edit-subcategory', ['categories' => $categories, 'subcategory' => $subcategory]);

        } elseif ($request->routeIs('sub-subcategory.edit')) {

            $subcategories = Subcategory::select('sub_category_name')->get();

            $sub_subcategory = SubSubcategory::findOrFail($id);
            
            return view('administration.categories.edit-sub-subcategory', ['subcategories' => $subcategories, 'sub_subcategory' => $sub_subcategory]);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        if ($request->routeIs('category.update')) {

            // Retrieve the existing record from the database
            $category = Category::find($id);

            // Make sure the record exists
            if ($category) {
                // Validate and process the new icon
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    // Validate the new icon file
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    // Process the new icon file (e.g., move to a specific directory, assign a new filename)
                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(resource_path('category/icon'), $newIconName);

                    // Update the image data in the model
                    $category->icon = $newIconName;
                }

                // Validate and process the new image
                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    // Validate the new thumb thumb
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    // Process the new thumb thumb (e.g., move to a specific directory, assign a new filename)
                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(resource_path('category/thumb'), $newThumbName);

                    // Update the thumb data in the model
                    $category->thumb = $newThumbName;
                }

                // Validate and process the new image
                $newCover = $request->file('cover');

                if ($newCover) {
                    // Validate the new cover cover
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    // Process the new cover cover (e.g., move to a specific directory, assign a new filename)
                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(resource_path('category/cover'), $newCoverName);

                    // Update the cover data in the model
                    $category->cover = $newCoverName;
                }

                // Validate and process the new image
                $newOG = $request->file('og_image');

                if ($newOG) {
                    // Validate the new OG Image
                    $validatedData = $request->validate([
                        // 'og_image' => 'og_image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    // Process the new OG Image (e.g., move to a specific directory, assign a new filename)
                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(resource_path('category/og'), $newOGName);

                    // Update the thumb data in the model
                    $category->og_image = $newOGName;
                }

                // Update other fields of the request
                $category->category_name = $request->input('category_name');
                $category->slug = $request->input('slug');
                $category->description = $request->input('description');
                $category->meta_title = $request->input('meta_title');
                $category->meta_description = $request->input('meta_description');

                // Save the changes
                $category->save();

                // Perform any additional actions or redirect as needed
            } else {
                // Handle the case when the record doesn't exist
                Session::flash('message', __('Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Category Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('subcategory.update')) {

            $subcategory = Subcategory::find($id);

            if ($subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(resource_path('category/icon'), $newIconName);

                    $subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(resource_path('category/thumb'), $newThumbName);

                    $subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(resource_path('category/cover'), $newCoverName);

                    $subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og_image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(resource_path('category/og'), $newOGName);

                    $subcategory->og_image = $newOGName;
                }

                $subcategory->category_name = $request->input('category_name');
                $subcategory->sub_category_name = $request->input('sub_category_name');
                $subcategory->slug = $request->input('slug');
                $subcategory->description = $request->input('description');
                $subcategory->meta_title = $request->input('meta_title');
                $subcategory->meta_description = $request->input('meta_description');

                $subcategory->save();

            } else {
                Session::flash('message', __('Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Subcategory Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('sub-subcategory.update')) {

            $sub_subcategory = SubSubcategory::find($id);

            if ($sub_subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(resource_path('category/icon'), $newIconName);

                    $sub_subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(resource_path('category/thumb'), $newThumbName);

                    $sub_subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(resource_path('category/cover'), $newCoverName);

                    $sub_subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og_image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(resource_path('category/og'), $newOGName);

                    $sub_subcategory->og_image = $newOGName;
                }

                $sub_subcategory->sub_sub_category_name = $request->input('sub_sub_category_name');
                $sub_subcategory->sub_category_name = $request->input('sub_category_name');
                $sub_subcategory->slug = $request->input('slug');
                $sub_subcategory->description = $request->input('description');
                $sub_subcategory->meta_title = $request->input('meta_title');
                $sub_subcategory->meta_description = $request->input('meta_description');

                $sub_subcategory->save();

            } else {
                Session::flash('message', __('Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Subcategory Successfully Updated!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        if ($request->routeIs('category.destroy')) {

            Category::where('id',$id)->delete();

            Session::flash('delete', __('Category Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('subcategory.destroy')) {
            
            Subcategory::where('id',$id)->delete();

            Session::flash('delete', __('Subcategory Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('sub-subcategory.destroy')) {
            
            SubSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Sub Subcategory Successfully Deleted!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }
}

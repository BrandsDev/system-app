<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('administration.categories.manage-category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->routeIs('new-category')) {
            
            return view('administration.categories.new-category');

        } elseif ($request->routeIs('new-sub-category')) {
        
            $categories = Categories::select('category_name')->get();
            
            return view('administration.categories.new-sub-category', ['categories' => $categories]);

        } elseif ($request->routeIs('new-sub-sub-category')) {
            
            return view('administration.categories.new-sub-sub-category');

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        if ($request->routeIs('new-category.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $icon = $request->icon->getClientOriginalName();
            $request->icon->move(resource_path('category/icon'), $icon);

            $thumb = $request->thumb->getClientOriginalName();
            $request->thumb->move(resource_path('category/thumb'), $thumb);

            $cover = $request->cover->getClientOriginalName();
            $request->cover->move(resource_path('category/cover'), $cover);

            $og = $request->og_image->getClientOriginalName();
            $request->og_image->move(resource_path('category/og'), $og);

            $category = Categories::create([
                'category_name' => $request->category_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'icon' => $icon,
                'thumb' => $thumb,
                'cover' => $cover,
                'og_image' => $og,
            ]);

            $category->save();

            Session::flash('message', __('New Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::Categories);

        } elseif ($request->routeIs('new-sub-category.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $icon = $request->icon->getClientOriginalName();
            $request->icon->move(resource_path('category/icon'), $icon);

            $thumb = $request->thumb->getClientOriginalName();
            $request->thumb->move(resource_path('category/thumb'), $thumb);

            $cover = $request->cover->getClientOriginalName();
            $request->cover->move(resource_path('category/cover'), $cover);

            $og = $request->og_image->getClientOriginalName();
            $request->og_image->move(resource_path('category/og'), $og);

            $category = Categories::create([
                'category_name' => $request->category_name,
                'sub_category_name' => $request->category_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'icon' => $icon,
                'thumb' => $thumb,
                'cover' => $cover,
                'og_image' => $og,
            ]);

            $category->save();

            Session::flash('message', __('New Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::Categories);
        
            

        } elseif ($request->routeIs('new-sub-sub-category')) {
            
            return view('administration.categories.new-sub-sub-category');

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $categories = Categories::all();

        if ($request->routeIs('manage-categories')) {
            
            return view('administration.categories.manage-categories', ['categories' => $categories]);

        } elseif ($request->routeIs('manage-sub-categories')) {
            
            return view('administration.categories.manage-sub-categories', ['categories' => $categories]);

        } elseif ($request->routeIs('manage-sub-sub-categories')) {
            
            return view('administration.categories.manage-sub-sub-categories', ['categories' => $categories]);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function categoryEdit($id)
    {
        $category = Categories::findOrFail($id);

        return view('administration.categories.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function categoryUpdate(Request $request, $id): RedirectResponse
    {
        // Retrieve the existing record from the database
        $category = Categories::find($id);

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
            return back();
        }

        Session::flash('update', __('Category Successfully Updated!'));
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function categoryDestroy($id)
    {
        Categories::where('id',$id)->delete();

        Session::flash('delete', __('Successfully Deleted!'));
        
        return back();
    }
}

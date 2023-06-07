<?php

namespace App\Http\Controllers;

use App\Models\BlogCategories;
use App\Models\BlogSubCategories;
use App\Models\BlogSubSubCategories;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->routeIs('new-blog')) {
            
            return view('administration.blogs.new-blog');

        } elseif ($request->routeIs('new-subcategory')) {
        
            $categories = Categories::select('category_name')->get();
            
            return view('administration.categories.new-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('new-subcategory')) {
        
            $categories = Categories::select('category_name')->get();
            
            return view('administration.categories.new-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('new-sub-subcategory')) {
        
            $subcategories = SubCategories::select('sub_category_name')->get();
            
            return view('administration.categories.new-sub-subcategory', ['subcategories' => $subcategories]);
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

            // dd($request);

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

            // echo 'cat';exit();

            $category->save();

            Session::flash('message', __('New Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::Categories);

        } elseif ($request->routeIs('new-subcategory.store')) {
            
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

            $category = SubCategories::create([
                'category_name' => $request->category_name,
                'sub_category_name' => $request->sub_category_name,
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

            Session::flash('message', __('New Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::SubCategories);

        } elseif ($request->routeIs('new-sub-subcategory.store')) {
            
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

            $category = SubSubCategories::create([
                'sub_sub_category_name' => $request->sub_sub_category_name,
                'sub_category_name' => $request->sub_category_name,
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

            Session::flash('message', __('New Sub Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::SubSubCategories);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->routeIs('manage-blogs')) {
            
            $categories = Categories::all();
            
            return view('administration.blogs.manage-blogs', ['categories' => $categories]);

        } elseif ($request->routeIs('manage-categories')) {
            
            $categories = Categories::all();
            
            return view('administration.categories.manage-categories', ['categories' => $categories]);

        } elseif ($request->routeIs('manage-subcategories')) {
            
            $subcategories = SubCategories::all();
            
            return view('administration.categories.manage-subcategories', ['subcategories' => $subcategories]);

        } elseif ($request->routeIs('manage-sub-subcategories')) {
        
            $sub_subcategories = SubSubCategories::all();
            
            return view('administration.categories.manage-sub-subcategories', ['sub_subcategories' => $sub_subcategories]);

        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if ($request->routeIs('category.edit')) {

            $category = Categories::findOrFail($id);
            
            return view('administration.categories.edit-category', ['category' => $category]);

        } elseif ($request->routeIs('subcategory.edit')) {

            $categories = Categories::select('category_name')->get();

            $subcategory = SubCategories::findOrFail($id);
            
            return view('administration.categories.edit-subcategory', ['categories' => $categories, 'subcategory' => $subcategory]);

        } elseif ($request->routeIs('sub-subcategory.edit')) {

            $subcategories = SubCategories::select('sub_category_name')->get();

            $sub_subcategory = SubSubCategories::findOrFail($id);
            
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
                Session::flash('message', __('Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Category Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('subcategory.update')) {

            $subcategory = SubCategories::find($id);

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

            $sub_subcategory = SubSubCategories::find($id);

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

            Categories::where('id',$id)->delete();

            Session::flash('delete', __('Category Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('subcategory.destroy')) {
            
            SubCategories::where('id',$id)->delete();

            Session::flash('delete', __('Subcategory Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('sub-subcategory.destroy')) {
            
            SubSubCategories::where('id',$id)->delete();

            Session::flash('delete', __('Sub Subcategory Successfully Deleted!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('/dashboard');
    }
}

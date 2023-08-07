<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateCategory;
use App\Models\Template\TemplateSubcategory;
use App\Models\Template\TemplateSubSubcategory;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateCategoryController extends Controller
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
        if ($request->routeIs('template.new-category')) {
            
            return view('administration.template.categories.new-category');

        } elseif ($request->routeIs('template.new-subcategory')) {
        
            $categories = TemplateCategory::select('category_name')->get();
            
            return view('administration.template.categories.new-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('template.new-sub-subcategory')) {
        
            $subcategories = TemplateSubcategory::select('subcategory_name')->get();
            
            return view('administration.template.categories.new-sub-subcategory', ['subcategories' => $subcategories]);
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        if ($request->routeIs('template.new-category.store')) {

            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            // dd($request);

            $category = TemplateCategory::create([
                'category_name' => $request->category_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
            ]);

            $category->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/image/category/icon'), $icon);
                $category->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/image/category/thumb'), $thumb);
                $category->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/image/category/cover'), $cover);
                $category->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/image/category/og'), $oGImage);
                $category->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $category->save();
            }

            Session::flash('message', __('New Category Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateCategories);

        } elseif ($request->routeIs('template.new-subcategory.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $subcategory = TemplateSubCategory::create([
                'category_name' => $request->category_name,
                'subcategory_name' => $request->subcategory_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
            ]);

            $subcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/image/category/subcategory/icon'), $icon);
                $subcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/image/category/subcategory/thumb'), $thumb);
                $subcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/image/category/subcategory/cover'), $cover);
                $subcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/image/category/subcategory/og'), $oGImage);
                $subcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subcategory->save();
            }

            Session::flash('message', __('New Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateSubCategories);

        } elseif ($request->routeIs('template.new-sub-subcategory.store')) {
            
            // $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'slug' => ['required', 'regex:/^[a-z]+$/'],
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ], [
            //     'slug.regex' => 'The :attribute field must contain only lowercase letters.'
            // ]);

            $subSubcategory = TemplateSubSubCategory::create([
                'sub_subcategory_name' => $request->sub_subcategory_name,
                'subcategory_name' => $request->subcategory_name,
                'slug' => $request->slug,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
            ]);

            $subSubcategory->save();

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon')->getClientOriginalName();
                $request->file('icon')->move(public_path('template/image/category/subcategory/sub-subcategory/icon'), $icon);
                $subSubcategory->icon = $icon;
            }

            if ($request->hasFile('thumb')) {
                $thumb = $request->file('thumb')->getClientOriginalName();
                $request->file('thumb')->move(public_path('template/image/category/subcategory/sub-subcategory/thumb'), $thumb);
                $subSubcategory->thumb = $thumb;
            }

            if ($request->hasFile('cover')) {
                $cover = $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('template/image/category/subcategory/sub-subcategory/cover'), $cover);
                $subSubcategory->cover = $cover;
            }

            if ($request->hasFile('og_image')) {
                $oGImage = $request->file('og_image')->getClientOriginalName();
                $request->file('og_image')->move(public_path('template/image/category/subcategory/sub-subcategory/og'), $oGImage);
                $subSubcategory->og_image = $oGImage;
            }

            if ($request->hasFile('icon') || $request->hasFile('thumb') || $request->hasFile('cover') || $request->hasFile('og_image')) {
                $subSubcategory->save();
            }

            Session::flash('message', __('New Sub Subcategory Successfully Added!'));
            
            return redirect(RouteServiceProvider::TemplateSubSubCategories);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->routeIs('template.manage-categories')) {
            
            $categories = TemplateCategory::all();
            
            return view('administration.template.categories.manage-categories', ['categories' => $categories]);

        } elseif ($request->routeIs('template.manage-subcategories')) {
            
            $subcategories = TemplateSubcategory::all();
            
            return view('administration.template.categories.manage-subcategories', ['subcategories' => $subcategories]);

        } elseif ($request->routeIs('template.manage-sub-subcategories')) {
        
            $sub_subcategories = TemplateSubSubcategory::all();
            
            return view('administration.template.categories.manage-sub-subcategories', ['sub_subcategories' => $sub_subcategories]);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if ($request->routeIs('template.category.edit')) {

            $category = TemplateCategory::findOrFail($id);
            
            return view('administration.template.categories.edit-category', ['category' => $category]);

        } elseif ($request->routeIs('template.subcategory.edit')) {

            $categories = TemplateCategory::select('category_name')->get();

            $subcategory = TemplateSubcategory::findOrFail($id);
            
            return view('administration.template.categories.edit-subcategory', ['categories' => $categories, 'subcategory' => $subcategory]);

        } elseif ($request->routeIs('template.sub-subcategory.edit')) {

            $subcategories = TemplateSubcategory::select('subcategory_name')->get();

            $sub_subcategory = TemplateSubSubcategory::findOrFail($id);
            
            return view('administration.template.categories.edit-sub-subcategory', ['subcategories' => $subcategories, 'sub_subcategory' => $sub_subcategory]);

        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        if ($request->routeIs('template.category.update')) {

            $category = TemplateCategory::find($id);

            if ($category) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/image/category/icon'), $newIconName);

                    $category->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/image/category/thumb'), $newThumbName);

                    $category->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/image/category/cover'), $newCoverName);

                    $category->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/image/category/og'), $newOGName);

                    $category->og_image = $newOGName;
                }

                $category->category_name = $request->input('category_name');
                $category->slug = $request->input('slug');
                $category->description = $request->input('description');
                $category->meta_title = $request->input('meta_title');
                $category->meta_description = $request->input('meta_description');

                $category->save();

            } else {
                Session::flash('message', __('Category Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Category Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('template.subcategory.update')) {

            $subcategory = TemplateSubCategory::find($id);

            if ($subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/image/category/subcategory/icon'), $newIconName);

                    $subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/image/category/subcategory/thumb'), $newThumbName);

                    $subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/image/category/subcategory/cover'), $newCoverName);

                    $subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/image/category/subcategory/og'), $newOGName);

                    $subcategory->og_image = $newOGName;
                }

                $subcategory->category_name = $request->input('category_name');
                $subcategory->subcategory_name = $request->input('subcategory_name');
                $subcategory->slug = $request->input('slug');
                $subcategory->description = $request->input('description');
                $subcategory->meta_title = $request->input('meta_title');
                $subcategory->meta_description = $request->input('meta_description');

                $subcategory->save();

            } else {
                Session::flash('message', __('Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Subcategory Successfully Updated!'));
            
            return back();

        } elseif ($request->routeIs('template.sub-subcategory.update')) {

            $sub_subcategory = TemplateSubSubcategory::find($id);

            if ($sub_subcategory) {
                $newIcon = $request->file('icon');

                if ($newIcon) {
                    $validatedData = $request->validate([
                        // 'icon' => 'icon|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newIconName = $request->icon->getClientOriginalName();
                    $request->icon->move(public_path('template/image/category/subcategory/sub-subcategory/icon'), $newIconName);

                    $sub_subcategory->icon = $newIconName;
                }

                $newThumb = $request->file('thumb');

                if ($newThumb) {
                    $validatedData = $request->validate([
                        // 'thumb' => 'thumb|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newThumbName = $request->thumb->getClientOriginalName();
                    $request->thumb->move(public_path('template/image/category/subcategory/sub-subcategory/thumb'), $newThumbName);

                    $sub_subcategory->thumb = $newThumbName;
                }

                $newCover = $request->file('cover');

                if ($newCover) {
                    $validatedData = $request->validate([
                        // 'cover' => 'cover|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newCoverName = $request->cover->getClientOriginalName();
                    $request->cover->move(public_path('template/image/category/subcategory/sub-subcategory/cover'), $newCoverName);

                    $sub_subcategory->cover = $newCoverName;
                }

                $newOG = $request->file('og_image');

                if ($newOG) {
                    $validatedData = $request->validate([
                        // 'og_image' => 'og|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $newOGName = $request->og_image->getClientOriginalName();
                    $request->og_image->move(public_path('template/image/category/subcategory/sub-subcategory/og'), $newOGName);

                    $sub_subcategory->og_image = $newOGName;
                }

                $sub_subcategory->sub_subcategory_name = $request->input('sub_subcategory_name');
                $sub_subcategory->subcategory_name = $request->input('subcategory_name');
                $sub_subcategory->slug = $request->input('slug');
                $sub_subcategory->description = $request->input('description');
                $sub_subcategory->meta_title = $request->input('meta_title');
                $sub_subcategory->meta_description = $request->input('meta_description');

                $sub_subcategory->save();

            } else {
                Session::flash('message', __('Sub Subcategory Record does not exist!'));

                return back();
            }

            Session::flash('message', __('Sub Subcategory Successfully Updated!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        if ($request->routeIs('template.category.destroy')) {

            TemplateCategory::where('id',$id)->delete();

            Session::flash('delete', __('Category Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('template.subcategory.destroy')) {
            
            TemplateSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Subcategory Successfully Deleted!'));
            
            return back();

        } elseif ($request->routeIs('template.sub-subcategory.destroy')) {
            
            TemplateSubSubcategory::where('id',$id)->delete();

            Session::flash('delete', __('Sub Subcategory Successfully Deleted!'));
            
            return back();
        }
        
        // Default view if none of the routes match
        return view('administration.template.dashboard');
    }
}
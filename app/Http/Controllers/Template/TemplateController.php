<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\Template;
use App\Models\Template\TemplatePage;
use App\Models\Template\TemplateBlog;

use App\Models\Template\TemplateCategory;
use App\Models\Template\TemplateSubcategory;
use App\Models\Template\TemplateSubSubcategory;

use App\Providers\RouteServiceProvider;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Session;

class TemplateController extends Controller
{
    public function index()
    {
        $page = TemplatePage::where('slug', 'template-store')->firstOrFail();
        $templates = Template::take(16)->get();

        return view('frontend.template.welcome', ['page' => $page, 'templates' => $templates]);
    }

    public function generateBreadcrumbs($url)
    {
        $breadcrumbs = [];

        $segments = explode('/', $url);

        // Remove empty segments
        $segments = array_filter($segments);

        $currentUrl = '';

        foreach ($segments as $segment) {
            $currentUrl .= '/' . $segment;

            // Get the category, subcategory, or sub-subcategory based on the URL segment
            $category = TemplateCategory::where('slug', $segment)->first();
            $subcategory = TemplateSubcategory::where('slug', $segment)->first();
            $subSubcategory = TemplateSubSubcategory::where('slug', $segment)->first();

            if ($category) {
                $breadcrumbs[] = [
                    'name' => $category->category_name,
                    'url' => url($currentUrl),
                ];
            } elseif ($subcategory) {
                $breadcrumbs[] = [
                    'name' => $subcategory->subcategory_name,
                    'url' => url($currentUrl),
                ];
            } elseif ($subSubcategory) {
                $breadcrumbs[] = [
                    'name' => $subSubcategory->sub_subcategory_name,
                    'url' => url($currentUrl),
                ];
            }
        }

        return $breadcrumbs;
    }


    public function templateStore()
    {
        $page = TemplatePage::where('slug', 'templates')->firstOrFail();
        $breadcrumbs = $this->generateBreadcrumbs(request()->getPathInfo());
        
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        $templates = Template::take(60)->get();

        return view('frontend.template.template-store', [
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
            'templates' => $templates,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function showByCategory(TemplateCategory $category)
    {
        $page = TemplateCategory::where('slug', $category->slug)->firstOrFail();
        $breadcrumbs = $this->generateBreadcrumbs(request()->getPathInfo());

        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        // Retrieve templates with related category
        $templates = Template::with('category')
            ->whereHas('category', function ($query) {
                $query->where('slug'); // Assuming the slug is the second URL segment
            })
            ->take(60)
            ->get();

        return view('frontend.template.template-store', [
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
            'templates' => $templates,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function showBySubcategory(TemplateCategory $category, TemplateSubcategory $subcategory)
    {
        $page = TemplateCategory::where('slug', $subcategory->slug)->firstOrFail();
        $breadcrumbs = $this->generateBreadcrumbs(request()->getPathInfo());

        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        // Retrieve templates with related category and subcategory
        $templates = Template::with(['category', 'subcategory'])
            ->where('category_name', $category->category_name)
            ->where('subcategory_name', $subcategory->subcategory_name)
            ->take(60)
            ->get();

        return view('frontend.template.template-store', [
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
            'templates' => $templates,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function showBySubSubcategory(TemplateCategory $category, TemplateSubcategory $subcategory, TemplateSubSubcategory $subSubcategory)
    {
        $page = TemplateCategory::where('slug', $subSubcategory->slug)->firstOrFail();
        $breadcrumbs = $this->generateBreadcrumbs(request()->getPathInfo());

        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        // Retrieve templates with related category, subcategory, and sub-subcategory
        $templates = Template::with(['category', 'subcategory', 'subSubcategory'])
            ->where('category_name', $category->category_name)
            ->where('subcategory_name', $subcategory->subcategory_name)
            ->where('sub_subcategory_name', $subSubcategory->sub_subcategory_name)
            ->take(60)
            ->get();

        return view('frontend.template.template-store', [
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
            'templates' => $templates,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_subcategories' => $sub_subcategories,
        ]);
    }

    public function create()
    {
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        return view('administration.template.new-template', ['categories' => $categories, 'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
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

        // dd($request);

        $template = Template::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_name' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'sub_subcategory_name' => $request->sub_subcategory_name,
            'sku' => $request->sku,
            'sale_price' => $request->sale_price,
            'regular_price' => $request->regular_price,
            'commission' => $request->commission,
            'bootstrap_v' => $request->bootstrap_v,
            'released' => $request->released,
            'updated' => $request->updated,
            'version' => $request->version,
            'seller_name' => $request->seller_name,
            'seller_email' => $request->seller_email,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'change_log' => $request->change_log,
            'youtube_iframe' => $request->youtube_iframe,
            'header_content' => $request->header_content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'order_type' => $request->order_type,
            'is_featured' => $request->input('is_featured', 0),
            'live_preview_link' => $request->live_preview_link,
            'downloadable_link' => $request->downloadable_link,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $template->save();

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('template/image'), $imageName);
            $template->image = $imageName;
        }

        if ($request->hasFile('og')) {
            $og = $request->file('og')->getClientOriginalName();
            $request->file('og')->move(public_path('template/image/og'), $og);
            $template->og = $og;
        }

        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('template/file'), $fileName);
            $template->file = $fileName;
        }

        if ($request->hasFile('image') || $request->hasFile('og') || $request->hasFile('file')) {
            $template->save();
        }

        Session::flash('message', __('New Template Successfully Added!'));
        
        return redirect(RouteServiceProvider::TemplateNew);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $templateDetail)
    {
        $templates = Template::all();

        return view('administration.template.manage-templates', ['templates' => $templates]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $page = Template::where('slug', $slug)->firstOrFail();
        $relatedTemplate = Template::take(4)->get();

        $relatedBlog = TemplateBlog::take(4)->get();

        return view('frontend.template.template-detail', 
            [
                'page' => $page,
                'relatedTemplate' => $relatedTemplate,
                'relatedBlog' => $relatedBlog
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $template = Template::findOrFail($id);     
        $categories = TemplateCategory::all();
        $subcategories = TemplateSubcategory::all();
        $sub_subcategories = TemplateSubSubcategory::all();

        return view('administration.template.edit-template', ['template' => $template, 'categories' => $categories,'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // dd($request);
        // Retrieve the existing record from the database
        $template = Template::find($id);

        // Make sure the record exists
        if ($template) {
            // Validate and process the new image
            $newImage = $request->file('image');

            if ($newImage) {
                // Validate the new image file
                $validatedData = $request->validate([
                    // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new image file (e.g., move to a specific directory, assign a new filename)
                $newImageName = $request->image->getClientOriginalName();
                $request->image->move(public_path('template/image'), $newImageName);

                // Update the image data in the model
                $template->image = $newImageName;
            }

            $newImage = $request->file('og');

            if ($newImage) {
                // Validate the new OG file
                $validatedData = $request->validate([
                    // 'og' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Process the new OG file (e.g., move to a specific directory, assign a new filename)
                $newImageName = $request->og->getClientOriginalName();
                $request->og->move(public_path('template/image/og'), $newImageName);

                // Update the og data in the model
                $template->og = $newImageName;
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
                $request->file->move(public_path('template/file'), $newFileName);

                // Update the file data in the model
                $template->file = $newFileName;
            }

            // Update other fields of the request
            $template->name = $request->input('name');
            $template->slug = $request->input('slug');
            $template->category_name = $request->input('category_name');
            $template->subcategory_name = $request->input('subcategory_name');
            $template->sub_subcategory_name = $request->input('sub_subcategory_name');
            $template->sale_price = $request->input('sale_price');
            $template->regular_price = $request->input('regular_price');
            $template->commission = $request->input('commission');
            $template->bootstrap_v = $request->input('bootstrap_v');
            $template->released = $request->input('released');
            $template->updated = $request->input('updated');
            $template->version = $request->input('version');
            $template->seller_name = $request->input('seller_name');
            $template->seller_email = $request->input('seller_email');
            $template->short_description = $request->input('short_description');
            $template->long_description = $request->input('long_description');
            $template->change_log = $request->input('change_log');
            $template->youtube_iframe = $request->input('youtube_iframe');
            $template->header_content = $request->input('header_content');
            $template->meta_title = $request->input('meta_title');
            $template->meta_description = $request->input('meta_description');
            $template->order_type = $request->input('order_type');
            $template->is_featured = $request->input('is_featured');
            $template->live_preview_link = $request->input('live_preview_link');
            $template->downloadable_link = $request->input('downloadable_link');

            if (!is_null($request->input('status'))) {
                $template->status = $request->input('status');
            }
            
            $template->comment = $request->input('comment');

            // Save the changes
            $template->save();

            // Perform any additional actions or redirect as needed
        } else {
            // Handle the case when the record doesn't exist
            dd();
        }

        Session::flash('update', __('Template Successfully Updated!'));
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Template::where('id',$id)->delete();

        Session::flash('delete', __('Template Successfully Deleted!'));
        
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\SubSubCategories;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.template-detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $subcategories = SubCategories::all();
        $sub_subcategories = SubSubCategories::all();

        return view('administration.templates.new-template', ['categories' => $categories, 'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
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
        $request->image->move(public_path('template/image'), $imageName);

        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('template/file'), $fileName);

        $template = Template::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_name' => $request->category_name,
            'sub_category_name' => $request->sub_category_name,
            'sub_sub_category_name' => $request->sub_sub_category_name,
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
            'live_preview_link' => $request->live_preview_link,
            'downloadable_link' => $request->downloadable_link,
            'image' => $imageName,
            'file' => $fileName,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        $template->save();

        Session::flash('message', __('New Template Successfully Added!'));
        
        return redirect(RouteServiceProvider::Template);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $templateDetail)
    {
        $templates = Template::all();

        return view('administration.templates.templates', ['templates' => $templates]);
    }

    /**
     * Display the specified resource.
     */
    public function detail($slug)
    {
        $template = Template::where('slug', $slug)->firstOrFail();


        return view('frontend.template-detail', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $template = Template::findOrFail($id);     
        $categories = Categories::all();
        $subcategories = SubCategories::all();
        $sub_subcategories = SubSubCategories::all();

        return view('administration.templates.edit-template', ['template' => $template, 'categories' => $categories,'subcategories' => $subcategories, 'sub_subcategories' => $sub_subcategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
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
            $template->sub_category_name = $request->input('sub_category_name');
            $template->sub_sub_category_name = $request->input('sub_sub_category_name');
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
            $template->live_preview_link = $request->input('live_preview_link');
            $template->downloadable_link = $request->input('downloadable_link');
            $template->status = $request->input('status');
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

        Session::flash('delete', __('Successfully Deleted!'));
        
        return back();
    }
}

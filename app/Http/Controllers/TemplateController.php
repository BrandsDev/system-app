<?php

namespace App\Http\Controllers;

use App\Models\Template;
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
        //
        return view('administration.templates.new-template')->with('status', 'profile-updated');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        // dd($request);

        $template = new Template;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $template = Template::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'sub_sub_category' => $request->sub_sub_category,
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
            'upload_image' => $request->upload_image,
            'upload_file' => $request->upload_file,
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
    public function show(TemplateDetail $templateDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemplateDetail $templateDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TemplateDetail $templateDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemplateDetail $templateDetail)
    {
        //
    }
}

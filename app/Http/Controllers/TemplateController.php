<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //

        $template = new Template;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $template = Template::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category' => $request->category,
            'sub-category' => $request->sub-category,
            'sub-sub-category' => $request->sub-sub-category,
            'sale-price' => $request->sale-price,
            'regular-price' => $request->regular-price,
            'commission' => $request->commission,
            'bootstrap-v' => $request->bootstrap-v,
            'released' => $request->released,
            'updated' => $request->updated,
            'version' => $request->version,
            'seller-name' => $request->seller-name,
            'seller-email' => $request->seller-email,
            'short-description' => $request->short-description,
            'long-description' => $request->long-description,
            'change-log' => $request->change-log,
            'youtube-iframe' => $request->youtube-iframe,
            'header-content' => $request->header-content,
            'meta-title' => $request->meta-title,
            'meta-description' => $request->meta-description,
            'live-preview-link' => $request->live-preview-link,
            'downloadable-link' => $request->downloadable-link,
            'upload-image' => $request->upload-image,
        ]);

        $template->save();
        
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

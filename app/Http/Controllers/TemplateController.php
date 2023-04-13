<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
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
            'sub-category' => $request->subCategory,
            'sub-sub-category' => $request->subSubCategory,
            'sale-price' => $request->salePrice,
            'regular-price' => $request->regularPrice,
            'commission' => $request->commission,
            'bootstrap-v' => $request->bootstrapV,
            'released' => $request->released,
            'updated' => $request->updated,
            'version' => $request->version,
            'seller-name' => $request->sellerName,
            'seller-email' => $request->sellerEmail,
            'short-description' => $request->shortDescription,
            'long-description' => $request->longDescription,
            'change-log' => $request->changeLog,
            'youtube-iframe' => $request->youtubeIframe,
            'header-content' => $request->headerContent,
            'meta-title' => $request->metaTitle,
            'meta-description' => $request->metaDescription,
            'live-preview-link' => $request->livePreviewLink,
            'downloadable-link' => $request->downloadableLink,
            'upload-image' => $request->uploadImage,
            'upload-file' => $request->uploadFile,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        dd($template);

        $template->save();
        // event(new Registered($template));
        
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

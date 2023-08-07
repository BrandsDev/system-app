<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\Template;
use App\Models\Template\TemplateSite;

use Illuminate\Http\Request;

class TemplateSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::take(60)->get();

        return view('frontend.template.site-templates', ['templates' => $templates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteTemplates $siteTemplates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteTemplates $siteTemplates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteTemplates $siteTemplates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteTemplates $siteTemplates)
    {
        //
    }
}

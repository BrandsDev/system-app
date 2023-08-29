<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateTheme;
use App\Models\Template\TemplatePage;

use Illuminate\Http\Request;

class TemplateThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $page = TemplatePage::findOrFail($id);
        
        return view('frontend.template.why-our-themes');
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
    public function show(WhyOurThemes $whyOurThemes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhyOurThemes $whyOurThemes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WhyOurThemes $whyOurThemes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhyOurThemes $whyOurThemes)
    {
        //
    }
}

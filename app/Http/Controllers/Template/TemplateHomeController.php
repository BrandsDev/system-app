<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\Template;
use App\Models\Template\TemplatePage;
use App\Models\Template\TemplateBlog;

use Illuminate\Http\Request;

class TemplateHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = TemplatePage::where('slug', 'template-store')->firstOrFail();
        $templates = Template::take(16)->get();
        $relatedBlog = TemplateBlog::take(4)->get();

        return view('frontend.template.welcome', [
            'page' => $page,
            'templates' => $templates,
            'relatedBlog' => $relatedBlog
        ]);
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}

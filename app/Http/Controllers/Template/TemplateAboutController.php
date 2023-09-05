<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplatePage;

use Illuminate\Http\Request;

class TemplateAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function overview()
    {
        $page = TemplatePage::where('slug', 'overview')->firstOrFail();

        return view('frontend.template.about.overview', ['page' => $page]);
    }

    /**
     * Display a listing of the resource.
     */
    public function brand()
    {
        $page = TemplatePage::where('slug', 'brand')->firstOrFail();

        return view('frontend.template.about.brand', ['page' => $page]);
    }

    /**
     * Display a listing of the resource.
     */
    public function license()
    {
        $page = TemplatePage::where('slug', 'license')->firstOrFail();

        return view('frontend.template.about.license', ['page' => $page]);
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}

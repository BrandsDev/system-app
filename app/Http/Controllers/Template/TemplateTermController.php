<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplatePage;

use Illuminate\Http\Request;

class TemplateTermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = TemplatePage::where('slug', 'terms-of-service')->firstOrFail();
        
        return view('frontend.template.terms-of-service', ['page' => $page]);
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
    public function show(TermsOfService $termsOfService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TermsOfService $termsOfService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TermsOfService $termsOfService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TermsOfService $termsOfService)
    {
        //
    }
}

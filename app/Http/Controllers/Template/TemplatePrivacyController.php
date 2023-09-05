<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplatePage;

use Illuminate\Http\Request;

class TemplatePrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = TemplatePage::where('slug', 'privacy-policy')->firstOrFail();

        return view('frontend.template.privacy-policy', ['page' => $page]);
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
    public function show(PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrivacyPolicy $privacyPolicy)
    {
        //
    }
}

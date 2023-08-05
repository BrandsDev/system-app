<?php

namespace App\Http\Controllers\Templates;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateHire;

use Illuminate\Http\Request;

class TemplateHireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.template.hire-us');
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
    public function show(Hire $hire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hire $hire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hire $hire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hire $hire)
    {
        //
    }
}

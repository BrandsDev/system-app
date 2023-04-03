<?php

namespace App\Http\Controllers;

use App\Models\TemplateDetail;
use Illuminate\Http\Request;

class TemplateDetailController extends Controller
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

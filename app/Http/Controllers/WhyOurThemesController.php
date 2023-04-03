<?php

namespace App\Http\Controllers;

use App\Models\WhyOurThemes;
use Illuminate\Http\Request;

class WhyOurThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.why-our-themes');
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

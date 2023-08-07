<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class BookAboutController extends Controller
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
        //
        return view('frontend.book.about.overview');
    }

    /**
     * Display a listing of the resource.
     */
    public function brand()
    {
        //
        return view('frontend.book.about.brand');
    }

    /**
     * Display a listing of the resource.
     */
    public function license()
    {
        //
        return view('frontend.book.about.license');
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
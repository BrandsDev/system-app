<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->routeIs('book-contact-us')) {
            
            return view('frontend.book.contact-us');

        } elseif ($request->routeIs('new-subcategory')) {
        
            $categories = Category::select('category_name')->get();
            
            return view('administration.categories.new-subcategory', ['categories' => $categories]);

        } elseif ($request->routeIs('new-sub-subcategory')) {
        
            $subcategories = Subcategory::select('subcategory_name')->get();
            
            return view('administration.categories.new-sub-subcategory', ['subcategories' => $subcategories]);
        }
        
        // Default view if none of the routes match
        return view('/');

        return view('frontend.book.contact-us');
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateContact;
use App\Models\Template\TemplatePage;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateContactController extends Controller
{
    public function index()
    {
        $page = TemplatePage::where('slug', 'contact-us')->firstOrFail();

        return view('frontend.template.contact-us', ['page' => $page]);
    }

    public function newContact(Request $request)
    {
        $request->validate([
            'email' => 'email',
        ]);

        $contact = TemplateContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        $contact->save();

        Session::flash('success', __('Your thoughts have been successfully transmitted. You will hear from us within 3-5 business days.'));
        
        return redirect()->back();
    }

    public function create(Request $request)
    {
        return view('administration.template.contact.new-contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'email',
        ]);

        $contact = TemplateContact::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        $contact->save();

        Session::flash('success', __('Your thoughts have been successfully transmitted. You will hear from us within 3-5 business days.'));
        
        return redirect(RouteServiceProvider::TemplateContact);
    }

    public function show(Request $request)
    {            
        $contacts = TemplateContact::all();
        
        return view('administration.template.contact.manage-contacts', ['contacts' => $contacts]);
    }

    public function view($id)
    {
        $contact = TemplateContact::findOrFail($id);
        
        return view('administration.template.contact.view-contact', ['contact' => $contact]);
    }

    public function edit($id)
    {
        $contact = TemplateContact::findOrFail($id);
        
        return view('administration.template.contact.edit-contact', ['contact' => $contact]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $contact = TemplateContact::find($id);

        if ($contact) {

            $contact->name = $request->input('name');
            $contact->email = $request->input('email');            
            $contact->description = $request->input('description');

            $contact->save();

        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('An issue has arisen! Please return and update once more.'));

            return back();
        }

        Session::flash('update', __('Congratulations! The contact update operation has been executed successfully.'));
        
        return back();
    }

    public function destroy(Request $request, $id)
    {
        TemplateContact::where('id',$id)->delete();

        Session::flash('delete', __('Congratulations! The contact deletion operation has been successfully executed.'));
        
        return back();
    }
}

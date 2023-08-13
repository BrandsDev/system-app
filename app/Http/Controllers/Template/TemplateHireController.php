<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

use App\Models\Template\TemplateHire;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class TemplateHireController extends Controller
{
    public function index()
    {

        return view('frontend.template.hire-us');
    }

    public function newHire(Request $request)
    {
        // $request->validate([
        //     'name' => 'name',
        //     'email' => 'email',
        //     'budget' => 'budget',
        //     'details' => 'details',
        // ]);

        $hire = TemplateHire::create([
            'name' => $request->name,
            'email' => $request->email,
            'budget' => $request->budget,
            'details' => $request->details,
        ]);

        $hire->save();

        Session::flash('success', __('Your thoughts have been successfully transmitted. You will hear from us within 3-5 business days.'));
        
        return redirect()->back();
    }

    public function create(Request $request)
    {
        return view('administration.template.hire.new-hire');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'email',
        ]);

        $hire = TemplateHire::create([
            'name' => $request->name,
            'email' => $request->email,
            'budget' => $request->budget,
            'details' => $request->details,
        ]);

        $hire->save();

        Session::flash('success', __('Your thoughts have been successfully transmitted.'));
        
        return redirect(RouteServiceProvider::TemplateHire);
    }

    public function show(Request $request)
    {            
        $hires = TemplateHire::all();
        
        return view('administration.template.hire.manage-hires', ['hires' => $hires]);
    }

    public function view($id)
    {
        $hire = TemplateHire::findOrFail($id);
        
        return view('administration.template.hire.view-hire', ['hire' => $hire]);
    }

    public function edit($id)
    {
        $hire = TemplateHire::findOrFail($id);
        
        return view('administration.template.hire.edit-hire', ['hire' => $hire]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $hire = TemplateHire::find($id);

        if ($hire) {

            $hire->name = $request->input('name');
            $hire->email = $request->input('email');            
            $hire->budget = $request->input('budget');
            $hire->details = $request->input('details');

            $hire->save();

        } else {
            // Handle the case when the record doesn't exist
            Session::flash('update', __('An issue has arisen! Please return and update once more.'));

            return redirect(RouteServiceProvider::TemplateHire);
        }

        Session::flash('update', __('Congratulations! The contact update operation has been executed successfully.'));
        
        return redirect(RouteServiceProvider::TemplateHire);
    }

    public function destroy(Request $request, $id)
    {
        TemplateHire::where('id',$id)->delete();

        Session::flash('delete', __('Congratulations! The contact deletion operation has been successfully executed.'));
        
        return back();
    }
}

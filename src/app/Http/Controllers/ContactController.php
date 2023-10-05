<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index ()
    {
        $genders = Contact::$genders;

        return view('index', compact('genders'));
    }

    public function confirm (ContactRequest $request)
    {
        $contact = $request->only(['familyname','name','gender','email','postcode', 'address','building_name','option']);

        return view('confirm', compact('contact'));
    }

    public function store (Request $request)
    {
        if($request->input('back')){
            return redirect('/')
                ->withInput();
        }else{
            $contact = $request->only(['familyname', 'name', 'gender', 'email', 'postcode', 'address', 'building_name', 'option']);
            Contact::create($contact);

            return view('thanks');
        }
    }

    public function search (Request $request)
    {
        $contacts = Contact::NameSearch($request->keyword)->EmailSearch($request->email)->get();

        $contacts = Contact::Paginate(10);
        return view ('search', compact('contacts'));
    }

    public function destroy (Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/contacts/search');
    }
}
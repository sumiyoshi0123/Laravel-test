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
        $keyword = $request->input('keyword');

        $query = Contact::query();

        if(!empty($keyword)) {
            $query->where('familyname','LIKE', "%{$keyword}")
            ->orWhere('name', 'LIKE', "%{$keyword}");
        }

        $contacts = $query->get();

        return view ('search', compact('contacts', 'keyword'));
    }
}
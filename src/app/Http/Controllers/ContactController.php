<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\contact;

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
        $contact = $request->only(['familyname', 'name', 'gender','email','postcode','address','building_name','option']);
        Contact::create($contact);

        return view('thanks');
    }

}
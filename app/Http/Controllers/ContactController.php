<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.add',compact('contacts'));
    }

//    public function addContactMethod()
//    {
//        return view('contact.add');
//    }

    public function storedContactMethod(Request $request)
    {
        Contact::storeContact($request);
        return redirect()->back()->with('success', 'Submitted Successfully ');
    }

}

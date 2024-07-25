<?php

namespace Adan\Contact\Http\Controllers;

use Adan\Contact\Jobs\ContactJob;
use Adan\Contact\Models\AdanContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('adan::form');
    }

    public function store(Request $request){
        // Validate the form data
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email',
            'phone' =>'required|string|max:20',
           'message' =>'required|string|max:255',
        ]);
        
        // Store the form data in the database
        $data = $request->all();
        $contact = new AdanContact();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->phone = $data['phone'];
        $contact->message = $data['message'];
        $contact->save();

        dispatch(new ContactJob($data));

        return redirect()->route('adan.form');
        
    }
}

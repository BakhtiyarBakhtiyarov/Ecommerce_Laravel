<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('is_deleted', 0)->get();
        return view('admin.contact.index',compact('contacts'));
    }
}


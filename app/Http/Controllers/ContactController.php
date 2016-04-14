<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{

    public function index() {
        //$contacts = Contact::where('id_contact', auth()->user()->id)
        //    ->orderBy('last_name', 'asc')
        //    ->get();
        $contacts = Contact::where(['id_contact' => auth()->user()->id,])->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function addContact() {
        return view('add');
    }

    public function add(ContactRequest $request) {
        
        $contact = $request->persist();
        
        return redirect()->route('contacts');
    }

    public function modifyContact($id_contact) {
        $contact = Contact::find(['id_contact'=>$id_contact,])->first();
        return view('modify', ['contact' => $contact]);
    }

    public function modify(ContactRequest $request, $id_contact) {
        $contact = Contact::find(['id_contact'=>$id_contact,])->first();
        $request->persist($contact);
        return redirect()->route('contacts');
    }

    public function delete($id_contact) {
        Contact::find($id_contact)->delete();
        return redirect()->route('contacts');
    }
}

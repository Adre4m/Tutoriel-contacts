<?php

namespace App\Http\Controllers;

use App\DataTables\ContactDataTable;
use App\Http\Requests\ContactRequest;
use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    
    public function index(ContactDataTable $dataTable) {
//        return view('contacts.contacts');
        return $dataTable->render('contacts.contacts');
    }

    public function addContact() {
        return view('contacts.add');
    }

    public function add(ContactRequest $request) {
        
        $request->persist();
        
        return redirect()->route('contacts');
    }

    public function modifyContact($id_contact) {
        $contact = Contact::find(['id_contact'=>$id_contact,])->first();
        return view('contacts.modify', ['contact' => $contact]);
    }

    public function modify(ContactRequest $request, $id_contact) {
        $contact = Contact::find(['id_contact'=>$id_contact,])->first();
        $request->persist($contact);
        return redirect()->route('contacts');
    }

    public function delete($id_contact) {
        Contact::find(['id_contact'=>$id_contact,])->first()->delete();
        return redirect()->route('contacts');
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\ContactDataTable;
use App\Http\Requests\ContactRequest;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Html\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    
    public function index(ContactDataTable $datatable) {
        return $datatable->render('contacts.contacts');
    }

    public function edit(Request $request) {
        dd($request);
    }

    public function addContact() {
        return view('contacts.add');
    }

    public function add(ContactRequest $request) {
        
        $request->persist();
        
        return redirect()->route('contacts');
    }

    public function modifyContact(Contact $contact) {
//        dd($contact);
        return view('contacts.modify', ['contact' => $contact]);
    }

    public function modify(ContactRequest $request, Contact $contact) {
        $request->persist($contact);
        return redirect()->route('contacts');
    }

    public function delete(Contact $contact) {
        $contact->delete();
        return redirect()->route('contacts');
    }
}

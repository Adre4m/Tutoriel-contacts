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

    public function index($id) {
        $contacts = DB::table('contacts')
            ->where('is_contact', '=', $id)
            ->orderBy('last_name', 'asc')
            ->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function addContact() {
        return view('add');
    }

    public function add(ContactRequest $request, $id) {
        
        $contact = $request->persist();
        
        return redirect()->route('toto');
    }

    public function modifyContact($id_contact) {
        return view('modify', ['contact' => Contact::find($id_contact)]);
    }

    public function modify(Request $request, $id, $id_contact) {
        $this->validate($request, Requests\ContactRequest::rules());
        Contact::find($id_contact)->mutate($request);
        return redirect('/contacts'.$id);
    }

    public function delete($id, $id_contact) {
        Contact::find($id_contact)->delete();
        return redirect('/contacts'.$id);
    }
}

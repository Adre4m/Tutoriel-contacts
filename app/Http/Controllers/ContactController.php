<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        $contacts = DB::table('contacts')->where('is_contact', '=', $id)->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function addContact() {
        return view('add');
    }

    public function add(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|min:10|unique:contacts|regex:"^0(.?[0-9]){9}$"',
        ]);
        DB::table('contacts')->insert(
            array(
                'name' => $request->input('name'),
                'last_name' => $request->input('last_name'),
                'phone' => $request->input('phone'),
                'is_contact' => $id,
            )
        );
        return redirect('/contacts');
    }
}

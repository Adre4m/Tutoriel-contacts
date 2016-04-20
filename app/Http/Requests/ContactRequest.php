<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Contact;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|min:10|regex:"^0[1-9]([.-]?[0-9]{2}){4}$"',
        ];
    }

    /**
     * @param null $contact
     * @return bool
     */
    public function persist($contact = null)
    {
        if($contact == null) {
            $contact = new Contact;
        }
        $contact->name = $this->input('name');
        $contact->last_name = $this->input('last_name');
        $contact->phone = $this->input('phone');
        $contact->id_contact = auth()->user()->id;
        return $contact->save();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{

    protected $table = 'contacts';

    public $timestamps = false;

    protected $fillable = [
        'name', 'last_name', 'phone',
        'is_contact',
    ];

    protected $cast = [
        'is_contact' => 'integer',
    ];

    public function mutate(Request $request) {
        $this->name = $request->input('name');
        $this->last_name = $request->input('last_name');
        $this->phone = $request->input('phone');
        $this->save();
    }

    /*public function getNameAttribute($value) {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value) {
        return ucfirst($value);
    }

    public function getPhoneAttribute($value) {
        return ucfirst($value);
    }

    public function getIsContactAttribute($value) {
        return ucfirst($value);
    }

    public function setNameAttribute($value) {
        $this->attribute['name'] = strtolower($value);
    }

    public function setLastNameAttribute($value) {
        $this->attribute['last_name'] = strtolower($value);
    }

    public function setPhoneAttribute($value) {
        $this->attribute['phone'] = strtolower($value);
    }

    public function setIsContactAttribute($value) {
        $this->attribute['is_contact'] = strtolower($value);
    }*/
}

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
        'id_contact',
    ];

    protected $cast = [
        'id_contact' => 'integer',
    ];

    public function mutate(Request $request) {
        $this->name = $request->input('name');
        $this->last_name = $request->input('last_name');
        $this->phone = $request->input('phone');
        $this->save();
    }
}

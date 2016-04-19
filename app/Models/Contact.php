<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * App\Models\Contact
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $phone
 * @property integer $id_contact
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Contact whereIdContact($value)
 */
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


    public static function query() {
        return Contact::select([
            'id',
            'name as ' . trans('form.name'),
            'last_name as ' . trans('form.last_name'),
            'phone as ' . trans('form.phone'),])
            ->whereIdContact(auth()->user()->id)
            ->newQuery();
    }
}

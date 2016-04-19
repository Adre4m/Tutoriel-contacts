<?php
/**
 * Created by PhpStorm.
 * User: Adrtien
 * Date: 15/04/2016
 * Time: 12:21
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\Log
 *
 * @property integer $id
 * @property integer $code_station
 * @property integer $updated_by
 * @property string $message
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|\App\Models\Logs whereId($value)
 * @method static Builder|\App\Models\Logs whereCodeStation($value)
 * @method static Builder|\App\Models\Logs whereUpdatedBy($value)
 * @method static Builder|\App\Models\Logs whereMessage($value)
 * @method static Builder|\App\Models\Logs whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Logs extends Model
{

    protected $table = 'logs';
    protected $relations = [
        'stations',
        'users',
    ];
    public $timestamps = true;
    protected $fillable = [
        'message',
    ];

    protected $hidden = [
      'code_station', 'updated_by',
    ];

    public function station() {
        return $this->belongsTo('Station');
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
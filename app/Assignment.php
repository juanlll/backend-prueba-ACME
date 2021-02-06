<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public $table = 'assignments';

    public $timestamps = true;

    public $fillable = [
        'driver_id',
        'process_id',
        'vehicle_id',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'driver_id'  => 'integer',
        'process_id'   => 'integer',
        'vehicle_id'    => 'integer',
        'status'     => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'driver_id'       => 'required|min:2|max:11',
        'process_id'      => 'required|min:2|max:11',
        'vehicle_id'      => 'required|min:2|max:11',
        'status'          => 'required',
    ];

}

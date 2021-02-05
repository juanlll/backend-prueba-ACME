<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $table = 'vehicles';

    public $timestamps = true;

    public $fillable = [
        'vehicle_plate',
        'type_id',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vehicle_plate'  => 'string',
        'type_id'        => 'integer',
        'status'         => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vehicle_plate'   => 'required|min:2|max:11',
        'type_id'         => 'required|min:2|max:11',
        'status'          => 'required',
    ];
}

<?php

namespace App\Models;

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
        'driver_id'       => 'required',
        'process_id'      => 'required',
        'vehicle_id'      => 'required',
        'status'          => 'required',
    ];

}

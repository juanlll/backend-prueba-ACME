<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $table = 'vehicles';

    public $timestamps = true;

    public $fillable = [
        'vehicle_plate',
        'color',
        'brand',
        'type_id',
        'owner_id',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vehicle_plate'  => 'string',
        'color'          => 'string',
        'brand'          => 'string',
        'type_id'        => 'integer',
        'owner_id'       => 'integer',
        'status'         => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vehicle_plate'   => 'required|min:2|max:11',
        'color'           => 'required|min:2|max:11',
        'brand'           => 'required|min:2|max:11',
        'owner_id'         => 'required',
        'type_id'         => 'required',
        'status'          => 'required',
    ];

         /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function owner()
    {
        return $this->belongsTo(\App\Models\Person::class, 'owner_id', 'id');
    }

             /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function type()
    {
        return $this->belongsTo(\App\Models\TypeVehicle::class, 'type_id', 'id');
    }

}

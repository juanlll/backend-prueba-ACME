<?php

namespace App\Repositories;
use App\Models\TypeVehicle;
use App\Repositories\BaseRepository;

class TypeVehicleRepository extends BaseRepository {

    public function getModel() {
        return new TypeVehicle();
    }

}

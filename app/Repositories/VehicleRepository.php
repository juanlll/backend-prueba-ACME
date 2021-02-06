<?php

namespace App\Repositories;
use App\Models\Vehicle;
use App\Repositories\BaseRepository;

class VehicleRepository extends BaseRepository {

    public function getModel() {
        return new Vehicle();
    }

    public function getAllWithRele(){
        return $this->getModel()->with('owner','type')->where('status',1)->get();
    }

}

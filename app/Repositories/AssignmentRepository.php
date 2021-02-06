<?php

namespace App\Repositories;
use App\Models\Assignment;
use App\Repositories\BaseRepository;

class AssignmentRepository extends BaseRepository {

    public function getModel() {
        return new Assignment();
    }

    public function getAllWithRele(){
        return $this->getModel()->with('driver','process','vehicle.owner')->orderBy('id','DESC')->get();
    }

    public function assignVehicleToDriver($assignment){
        $assignment = $this->getModel()->create($assignment);
        $assignment->driver;
        $assignment->process;
        $assignment->vehicle->owner;
        return $assignment;
    }

}

<?php

namespace App\Repositories;
use App\Models\Assignment;
use App\Repositories\BaseRepository;

class AssignmentRepository extends BaseRepository {

    public function getModel() {
        return new Assignment();
    }

}

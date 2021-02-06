<?php

namespace App\Repositories;
use App\Models\Process;
use App\Repositories\BaseRepository;

class ProcessRepository extends BaseRepository {

    public function getModel() {
        return new Process();
    }

}

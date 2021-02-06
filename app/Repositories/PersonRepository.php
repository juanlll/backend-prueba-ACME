<?php

namespace App\Repositories;
use App\Models\Person;
use App\Repositories\BaseRepository;

class PersonRepository extends BaseRepository {

    public function getModel() {
        return new Person();
    }

}

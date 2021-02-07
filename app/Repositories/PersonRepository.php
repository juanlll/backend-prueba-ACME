<?php

namespace App\Repositories;
use App\Models\Person;
use App\Repositories\BaseRepository;

class PersonRepository extends BaseRepository {

    public function getModel() {
        return new Person();
    }

    public function getAllWithRele(){
        return $this->getModel()->with('city')->where('status',1)->get();
    }

}

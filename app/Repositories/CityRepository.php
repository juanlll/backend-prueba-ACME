<?php

namespace App\Repositories;
use App\Models\City;
use App\Repositories\BaseRepository;

class CityRepository extends BaseRepository {

    public function getModel() {
        return new City();
    }

}

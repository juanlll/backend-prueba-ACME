<?php

use App\Models\Assignment;
use App\Models\Process;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\TypeVehicle;
use App\Models\Person;
use App\Models\Vehicle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class, 50)->create(); // se crean las ciudades con el faker

        factory(Person::class, 50)->create(); // se crean personas


        TypeVehicle::create([ // crea el tipo de vehiculo
            'name'   => 'Particular',
            'status' => 1
        ]);

        TypeVehicle::create([ // crea el tipo de vehiculo
            'name'   => 'Publico',
            'status' => 1
        ]);

        //crea los tipos de procesos
        for ($i = 1; $i < 11; $i++) {
            $ownerType = Process::create([
                'name'   => 'Process #' . $i,
                'status' => 1
            ]);
        }

        $vehicles = [
            [
                "vehicle_plate" => "XEE-777",
                "status" => 1,
                "owner_id" => 1,
                "type_id" => 1,
                "color" => "red",
                "brand" => "BAJAJ",
            ],
            [
                "vehicle_plate" => "ASE-457",
                "status" => 1,
                "owner_id" => 2,
                "type_id" => 1,
                "color" => "red",
                "brand" => "BEIJING",
            ],
            [
                "vehicle_plate" => "PEI-413",
                "status" => 1,
                "owner_id" => 3,
                "type_id" => 2,
                "color" => "red",
                "brand" => "BENTLEY",
            ],
            [
                "vehicle_plate" => "RWL-057",
                "status" => 1,
                "owner_id" => 4,
                "type_id" => 2,
                "color" => "red",
                "brand" => "BMW",
            ]
        ];

        foreach ($vehicles as $key => $vehicle) {
            Vehicle::create($vehicle);
        }


        //  asigna el vehiculo con id 1 al conductor con id 1 a realizar el proceso 2
        Assignment::create([
            'driver_id'  =>  1,
            'process_id' =>  2,
            'vehicle_id' =>  1,
            'status'     =>  1
        ]);

        //  asigna el vehiculo con id 4 al conductor con id 3 a realizar el proceso 4
        Assignment::create([
            'driver_id'  =>  3,
            'process_id' =>  4,
            'vehicle_id' =>  4,
            'status'     =>  1
        ]);
    }
}

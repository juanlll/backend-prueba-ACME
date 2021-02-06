<?php

use App\Assignment;
use App\Process;
use Illuminate\Database\Seeder;
use App\City;
use App\TypeVehicle;
use App\Person;
use App\Vehicle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Person::class, 50)->create();
        factory(City::class, 50)->create();// se crean las ciudades con el faker

        $tagVehicles = [
            [
                'name'   =>'Particular',
                'status' =>1
            ],
            [
                'name'   =>'Publico',
                'status' =>1
            ],
        ];

        // se crean los tipos de vehiculos
        foreach ($tagVehicles as $key => $tag) {
            TypeVehicle::create($tag);
        }


        $ownerType = Process::create([//tipo de asignación (propietario)
            'name'   =>'Owner Of Car',
            'status' =>1
        ]);


        Assignment::create([// se le asigna el vehiculo con id 1 al conductor con id 1 y el propietario con id 2
            'driver_id'  =>  1,
            'process_id' =>  2,
            'vehicle_id' => 1,
            'status'     => 1,
            'vehicle_id' => 1
        ]);

        Assignment::create([ // se le asigna el vehiculo con id 2 al conductor con id 2 y el propietario con id 4
            'driver_id'  =>  3,
            'process_id' =>  4,
            'vehicle_id' =>  1,
            'status'     => 1,
            'vehicle_id' => 2
        ]);

        $vehicles = [

            [
                "status" => 1,
                "name"=> "AC"
            ],
            [
                "status" => 1,
                "name"=> "AC PROPULSION"
            ],
            [
                "status" => 1,
                "name"=> "ACURA"
            ],
            [
                "status" => 1,
                "name"=> "A.D. TRAMONTANA"
            ],
            [
                "status" => 1,
                "name"=> "ALFA ROMEO"
            ],
            [
                "status" => 1,
                "name"=> "ALMAC"
            ],
            [
                "status" => 1,
                "name"=> "ALTERNATIVE CARS"
            ],
            [
                "status" => 1,
                "name"=> "AMUZA"
            ],
            [
                "status" => 1,
                "name"=> "ANTEROS"
            ],
            [
                "status" => 1,
                "name"=> "ARASH"
            ],
            [
                "status" => 1,
                "name"=> "ARIEL"
            ],
            [
                "status" => 1,
                "name"=> "ARRINERA"
            ],
            [
                "status" => 1,
                "name"=> "ASL"
            ],
            [
                "status" => 1,
                "name"=> "ASTERIO"
            ],
            [
                "status" => 1,
                "name"=> "ASTON MARTIN"
            ],
            [
                "status" => 1,
                "name"=> "AUDI"
            ],
            [
                "status" => 1,
                "name"=> "BAC"
            ],
            [
                "status" => 1,
                "name"=> "BAJAJ"
            ],
            [
                "status" => 1,
                "name"=> "BEIJING AUTOMOBILE WORKS"
            ],
            [
                "status" => 1,
                "name"=> "BENTLEY"
            ],
            [
                "status" => 1,
                "name"=> "BMW"
            ]
            ];

            foreach ($vehicles as $key => $vehicle) {
                Vehicle::create($vehicle);
            }
    }
}

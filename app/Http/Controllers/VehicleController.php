<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
    protected $vehicleRepo;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepo = $vehicleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = $this->vehicleRepo->getAll();
        return $this->sendResponse($persons->toArray(), 'Vehiculos encontrados!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $personRequest)
    {
        $person = $this->vehicleRepo->create($personRequest->all());
        return $this->sendResponse($person->toArray(), 'Vehiculo Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = $this->vehicleRepo->find($id);
        return $this->sendResponse($person->toArray(), 'Vehiculo encontrado!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $person
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        $person = $this->vehicleRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar el vehiculo"], 404);
        }
        $person = $this->vehicleRepo->update($person, $request->all());

        return $this->sendResponse($person->toArray(), 'Vehiculo encontrado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = $this->vehicleRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar el vehiculo"], 404);
        }

        $this->vehicleRepo->delete($person);

        return $this->sendResponse($id, 'Vehiculo eliminado!');
    }
}

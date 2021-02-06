<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use App\Repositories\TypeVehicleRepository;
use Illuminate\Http\Request;
use App\Http\Requests\TypeVehicleRequest;

class TypeVehicleController extends Controller
{
    protected $typeVehicleRepo;

    public function __construct(TypeVehicleRepository $typeVehicleRepository)
    {
        $this->typeVehicleRepo = $typeVehicleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeVehicles = $this->typeVehicleRepo->getAll();
        return $this->sendResponse($typeVehicles->toArray(), 'Tipo de vehiculos encontrados!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeVehicleRequest $typeVehicleRequest)
    {
        $typeVehicle =  $this->typeVehicleRepo->create($typeVehicleRequest->all());
        return $this->sendResponse($typeVehicle->toArray(), 'Tipo de Vehiculo Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeVehicle = $this->typeVehicleRepo->find($id);
        return $this->sendResponse($typeVehicle->toArray(), 'Tipo de Vehiculo encontrado!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(TypeVehicleRequest $request, $id)
    {
        $typeVehicle = $this->typeVehicleRepo->find($id);

        if (is_null($typeVehicle)) {
            return response()->json(["message" => "No se puedo encontrar el vehiculo"], 404);
        }
        $typeVehicle = $this->typeVehicleRepo->update($typeVehicle, $request->all());

        return $this->sendResponse($typeVehicle->toArray(), 'Tipo de Vehiculo encontrado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeVehicle  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeVehicle = $this->typeVehicleRepo->find($id);

        if (is_null($typeVehicle)) {
            return response()->json(["message" => "No se puedo encontrar el vehiculo"], 404);
        }

        $this->typeVehicleRepo->delete($typeVehicle);

        return $this->sendResponse($id, 'Tipo de Vehiculo eliminado!');
    }
}

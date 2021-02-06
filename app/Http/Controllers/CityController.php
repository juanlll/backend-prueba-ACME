<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Repositories\CityRepository;
use App\Http\Requests\CityRequest;
use App\Http\Controllers\AppBaseController;

class CityController extends AppBaseController
{
    protected $cityRepo;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepo = $cityRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = $this->cityRepo->getAll();
        return $this->sendResponse($cities->toArray(), 'Ciudades Encontradas!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $cityRequest)
    {
        $city =  $this->cityRepo->create($cityRequest->all());
        return $this->sendResponse($city->toArray(), 'Ciudad Creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = $this->cityRepo->find($id);
        return $this->sendResponse($city->toArray(), 'Ciudad encontrada!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
        $city = $this->cityRepo->find($id);

        if (is_null($city)) {
            return response()->json(["message" => "No se puedo encontrar la ciudad"], 404);
        }
        $city = $this->cityRepo->update($city, $request->all());

        return $this->sendResponse($city->toArray(), 'Ciudad encontrada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = $this->cityRepo->find($id);

        if (is_null($city)) {
            return response()->json(["message" => "No se puedo encontrar la ciudad"], 404);
        }

        $this->cityRepo->delete($city);

        return $this->sendResponse($id, 'Ciudad eliminada!');
    }
}

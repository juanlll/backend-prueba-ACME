<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Repositories\ProcessRepository;
use Illuminate\Http\Request;
use App\Http\Requests\ProcessRequest;
use App\Http\Controllers\AppBaseController;

class ProcessController extends AppBaseController
{
    protected $processRepo;

    public function __construct(ProcessRepository $processRepository)
    {
        $this->processRepo = $processRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = $this->processRepo->getAll();
        return $this->sendResponse($persons->toArray(), 'Procesos encontrados!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $personRequest)
    {
        $person = $this->processRepo->create($personRequest->all());
        return $this->sendResponse($person->toArray(), 'Proceso Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = $this->processRepo->find($id);
        return $this->sendResponse($person->toArray(), 'Proceso encontrado!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $person
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessRequest $request, $id)
    {
        $person = $this->processRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar el proceso"], 404);
        }
        $person = $this->processRepo->update($person, $request->all());

        return $this->sendResponse($person->toArray(), 'Proceso encontrado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = $this->processRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar el proceso"], 404);
        }

        $this->processRepo->delete($person);

        return $this->sendResponse($id, 'Proceso eliminado!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Repositories\PersonRepository;
use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Http\Controllers\AppBaseController;

class PersonController extends AppBaseController
{
    protected $personRepo;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepo = $personRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = $this->personRepo->getOnlyEnables();
        return $this->sendResponse($persons->toArray(), 'Personas encontradas!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $personRequest)
    {
        $person =  $this->personRepo->create($personRequest->all());
        return $this->sendResponse($person->toArray(), 'Persona Creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = $this->personRepo->find($id);
        return $person;
        return $this->sendResponse($person->toArray(), 'Persona encontrada!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request, $id)
    {
        $person = $this->personRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar la persona"], 404);
        }
        $person = $this->personRepo->update($person, $request->all());

        return $this->sendResponse($person->toArray(), 'Persona encontrada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = $this->personRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar la persona"], 404);
        }

        $this->personRepo->delete($person);

        return $this->sendResponse($id, 'Persona eliminada!');
    }
}

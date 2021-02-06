<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Repositories\AssignmentRepository;
use Illuminate\Http\Request;
use App\Http\Requests\AssignmentRequest;
use App\Http\Controllers\AppBaseController;

class AssignmentController extends AppBaseController
{
    protected $assignmentRepo;

    public function __construct(AssignmentRepository $assignmentRepository)
    {
        $this->assignmentRepo = $assignmentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = $this->assignmentRepo->getAll();
        return $this->sendResponse($persons->toArray(), 'Asignaciones encontradas!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignmentRequest $assignmentRequest)
    {
        $person = $this->assignmentRepo->create($assignmentRequest->all());
        return $this->sendResponse($person->toArray(), 'Asignación Creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = $this->assignmentRepo->find($id);
        return $this->sendResponse($person->toArray(), 'Asignación encontrada!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $person
     * @return \Illuminate\Http\Response
     */
    public function update(AssignmentRequest $request, $id)
    {
        $person = $this->assignmentRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar la asignación"], 404);
        }
        $person = $this->assignmentRepo->update($person, $request->all());

        return $this->sendResponse($person->toArray(), 'Asignación encontrada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = $this->assignmentRepo->find($id);

        if (is_null($person)) {
            return response()->json(["message" => "No se puedo encontrar la asignación"], 404);
        }

        $this->assignmentRepo->delete($person);

        return $this->sendResponse($id, 'Asignación eliminada!');
    }
}

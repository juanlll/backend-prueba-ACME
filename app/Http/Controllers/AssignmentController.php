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
        $assignments = $this->assignmentRepo->getAllWithRele();
        return $this->sendResponse($assignments->toArray(), 'Asignaciones encontradas!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignmentRequest $assignmentRequest)
    {
        $assignment = $this->assignmentRepo->assignVehicleToDriver($assignmentRequest->all());
        return $this->sendResponse($assignment->toArray(), 'Asignación Creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = $this->assignmentRepo->find($id);
        return $this->sendResponse($assignment->toArray(), 'Asignación encontrada!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(AssignmentRequest $request, $id)
    {
        $assignment = $this->assignmentRepo->find($id);

        if (is_null($assignment)) {
            return response()->json(["message" => "No se puedo encontrar la asignación"], 404);
        }
        $assignment = $this->assignmentRepo->update($assignment, $request->all());

        return $this->sendResponse($assignment->toArray(), 'Asignación encontrada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = $this->assignmentRepo->find($id);

        if (is_null($assignment)) {
            return response()->json(["message" => "No se puedo encontrar la asignación"], 404);
        }

        $this->assignmentRepo->delete($assignment);

        return $this->sendResponse($id, 'Asignación eliminada!');
    }
}

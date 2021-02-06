<?php
namespace App\Repositories;

abstract class BaseRepository {
// CLASE PADRE

    /*Modelo de Abstración*/
    abstract public function getModel();

    /**
     ** Funcion para consultar un registro por $id
     **/
    public function find($id) {
        return $this->getModel()->find($id);
    }

    /**
     ** Funcion para consultar todos los registros
     **/
    public function getAll() {
        return $this->getModel()->all();
    }

    /**
     ** Funcion para crear un registro
     **/
    public function create($data) {
        return $this->getModel()->create($data);
    }

    /**
     ** Funcion para modificar un registro por $id
     **/
    public function update($object, $data) {
        $object->fill($data);
        $object->update();
        return $object;
    }

    /**
     ** Funcion para eliminar un registro por $id
     **/
    public function delete($object) {
        $object->delete();
    }

    /**
     ** Funcion para validar con las reglas del modelo
     **/
    public function validateRequest($request){
        dd("dsdsa");


    }

}

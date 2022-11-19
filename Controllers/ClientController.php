<?php

class ClientController
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function create($body) {

    }

    public function read($id) {
        return $this->model->getClientById($id);
    }

    public function readAll() {

    }

    public function update() {

    }

    public function delete() {

    }
}

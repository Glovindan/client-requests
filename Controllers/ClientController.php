<?php

class ClientController
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function create($params) {
        echo "create Client";
    }

    public function read($params) {
        echo "read Client";
        return $this->model->getClientById($params->id);
    }

    public function readAll($params) {

    }

    public function update($params) {

    }

    public function delete($params) {

    }
}

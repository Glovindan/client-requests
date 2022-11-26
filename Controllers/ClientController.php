<?php

class ClientController
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function create($params) {
        print_r($params);
    }

    public function read($params) {
        print_r($params);
        return $this->model->getClientById($params["id"]);
    }

    public function readAll($params) {
        print_r($params);
    }

    public function update($params) {
        print_r($params);
    }

    public function delete($params) {
        print_r($params);
    }
}

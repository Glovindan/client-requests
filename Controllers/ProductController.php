<?php

class ProductController
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function create($params) {

    }

    public function read($params) {
        return $this->model->getProductById($params->id);
    }

    public function readAll($params) {

    }

    public function update($params) {

    }

    public function delete($params) {

    }
}
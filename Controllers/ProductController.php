<?php

class ProductController
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function create($body) {

    }

    public function read($id) {
        return $this->model->getProductById($id);
    }

    public function readAll() {

    }

    public function update() {

    }

    public function delete() {

    }
}
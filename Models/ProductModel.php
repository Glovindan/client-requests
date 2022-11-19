<?php

class ProductModel
{
    // подключение к базе данных и таблице "products"
    private $conn;
    private $table_name = "products";

    // свойства объекта
    public $id;
    public $openingDate;
    public $term;
    public $isCredit;
    public $productData;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProducts() {

    }

    public function getProductsByClientId() {

    }

    public function getProductById() {

    }

    public function createProduct() {

    }
}
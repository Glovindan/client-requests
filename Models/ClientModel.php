<?php

class ClientModel
{
    private $conn;
    private $table_name = "clients";

    public $id;
    public $clientData;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public static function getClients() {

    }

    public function getClientById($id) {
        return $id;
    }

    public function createClient() {

    }

    public function getClientProducts() {

    }

    public function addProduct() {

    }
}
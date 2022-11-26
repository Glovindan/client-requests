<?php
    require_once './Controllers/ClientController.php';
    require_once './Controllers/ProductController.php';
    require_once './Models/ClientModel.php';
    require_once './Models/ProductModel.php';
    require_once './Config/database.php';
    require_once './helpers/Router.php';

    $db = new Database();
    $clientController = new ClientController(new ClientModel($db));
    $productController = new ProductController(new ProductModel($db));
    $router = new Router();

    $router->get('/clients', array($clientController, "readAll"));
    $router->post('/clients', array($clientController, "create"));

    $router->get('/clients/:id', array($clientController, "read"));
    $router->put('/clients/:id', array($clientController, "update"));
    $router->delete('/clients/:id', array($clientController, "delete"));

    $router->get('/products', array($productController, "readAll"));
    $router->post('/products', array($productController, "create"));

    $router->get('/products/:id', array($productController, "read"));
    $router->put('/products/:id', array($productController, "update"));
    $router->delete('/products/:id', array($productController, "delete"));

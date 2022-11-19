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

    $router->get('/clients', $clientController->readAll());
    $router->post('/clients', $clientController->create());

    $router->get('/clients/$id', $clientController->read(100));
    $router->put('/clients/$id', $clientController->update());
    $router->delete('/clients/$id', $clientController->delete());

    $router->get('/products', $productController->readAll());
    $router->post('/products', $productController->create());

    $router->get('/products/$id', $productController->read(100));
    $router->put('/products/$id', $productController->update());
    $router->delete('/products/$id', $productController->delete());
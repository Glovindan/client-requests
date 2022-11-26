<?php

class Router {
    public function get($uri, $callback) {
        if($_SERVER["REQUEST_METHOD"] == "GET" && $this->matchUri($uri)) {
            call_user_func($callback, $this->getParams($uri));
        }
    }

    public function post($uri, $callback) {
        if($_SERVER["REQUEST_METHOD"] == "POST" && $this->matchUri($uri)) {
            return $callback;
        }
    }

    public function put($uri, $callback) {
        if($_SERVER["REQUEST_METHOD"] == "PUT" && $this->matchUri($uri)) {
            return $callback;
        }
    }

    public function delete($uri, $callback) {
        if($_SERVER["REQUEST_METHOD"] == "DELETE" && $this->matchUri($uri)) {
            call_user_func($callback, $this->getParams($uri));
            return $callback;
        }
    }

    private function matchUri($uri): bool
    {
        $uriExplode = explode("/", trim($uri, "/"));
        $serverUriExplode = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
        if(count($serverUriExplode) != count($uriExplode)) {
            return false;
        }

        $uriRegex = preg_replace("#^:.+$#", "^.+$", $uriExplode);

        foreach ($serverUriExplode as $index => $item) {
            if(!preg_match("#$uriRegex[$index]#", $item)) {
                return false;
            }
        }
        return true;
    }

    private function getParams($uri): array
    {
        $uriExplode = explode("/", trim($uri, "/"));
        $serverUriExplode = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
        $params = [];
        foreach ($uriExplode as $index => $item) {
            if(preg_match("#^:.+$#",$item)) {
                $params += [trim($item,":") => $serverUriExplode[$index]];
            }
        }

        return $params;
    }

    private function getBody() {
        // Получить тело
    }

    private function route($uri, $callback) {
        // Запарсить параметры из строки
        // Запарсить параметры запроса
        // Сравнить uri запроса с uri роутера
        // Запустить колбек с параметрами и телом
    }
}
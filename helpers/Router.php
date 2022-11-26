<?php

class Router {
    public function get($uri, $callback) {
        if($_SERVER["REQUEST_METHOD"] == "GET" && $this->matchUri($uri)) {
            $callback();
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
            return $callback;
        }
    }

    private function matchUri($uri) {
        $uriRegex = preg_replace("#/:.+?/#", "/.+?/", trim($uri, "/")."/");
        return preg_match("#^$uriRegex$#", trim($_SERVER["REQUEST_URI"],"/")."/");
    }

    private function getParams($uri): array
    {
        $uriExplode = explode("/", trim($uri, "/"));
        $serverUriExplode = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
        $params = [];
        foreach ($uriExplode as $index => $item) {
            if(preg_match("#^:.+$#",$item)) {
                $params[$item] = $serverUriExplode[$index];
            }
        }

        return $params;
    }

    private function getBody() {

    }

    private function route($uri, $callback) {
        // Запарсить параметры из строки
        // Запарсить параметры запроса
        // Сравнить uri запроса с uri роутера
        // Запустить колбек с параметрами и телом
    }
}
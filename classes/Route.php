<?php

class Route {
    public static function get(string $endpoint, callable $function): void {
        if(self::getRequestMethod() === 'GET' && $endpoint === self::getEndpoint()) {
            $response = $function->__invoke();

            echo $response->getResponse();
        }
    }

    public static function post(string $endpoint, callable $function): void {
        if(self::getRequestMethod() === 'POST' && $endpoint === self::getEndpoint()) {
            $request = Request::create();
          
            $response = call_user_func($function, $request);

            echo $response->getResponse();
        }
    }

    public static function delete(string $endpoint, callable $function): void {
        if(self::getRequestMethod() === 'DELETE' && $endpoint === self::getEndpoint()) {
            $request = Request::create();
          
            $response = call_user_func($function, $request);

            echo $response->getResponse();
        }
    }

    public static function put(string $endpoint, callable $function): void {
        if(self::getRequestMethod() === 'PUT' && $endpoint === self::getEndpoint()) {
            $request = Request::create();
          
            $response = call_user_func($function, $request);

            echo $response->getResponse();
        }
    }

    private static function getRequestMethod(): string {
        return $_SERVER['REQUEST_METHOD'];
    }

    private static function getEndpoint(): string {
        return explode('index.php', $_SERVER['REQUEST_URI'])[1];
    }
}

?>
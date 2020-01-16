<?php

class Request {
    private $requestBody;

    public function __construct() {
        $this->requestBody = file_get_contents('php://input');
    }

    public static function create(): Request {
        return new self();
    }

    public function getRequestBody(): array {
        return json_decode($this->requestBody ?? '[]', true);
    }
}

?>
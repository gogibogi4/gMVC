<?php

class JSONResponse extends Response {
    public function __construct(array $response, ?int $responseCode = 200, ?array $headers = null) {
        $response = json_encode($response);

        parent::__construct($response, $responseCode, $headers);
    }

    public function getResponse(): string {
        header('Content-Type: application/json');

        return parent::getResponse();
    }
}

?>
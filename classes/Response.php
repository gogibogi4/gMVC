<?php

abstract class Response {
    private $response;
    private $responseCode;
    private $headers;

    public function __construct(string $response, ?int $responseCode = 200, ?array $headers = null) {
        $this->response     = $response;
        $this->responseCode = $responseCode;
        $this->headers      = $headers;
    }

    public function getResponse(): string {
        http_response_code($this->responseCode);

        if (isset($this->headers)) {
            foreach ($this->headers as $header) {
                header($header);
            }
        }

        return $this->response;
    }
}

?>
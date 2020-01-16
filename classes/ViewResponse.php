<?php

class ViewResponse extends Response{
    public function __construct(string $viewName) {
        $response = file_get_contents("./Views/$viewName.php");

        parent::__construct($response);
    }
}

?>
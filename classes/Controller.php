<?php

class Controller {
    public static function getResponse(string $viewName): string {
        return self::getView($viewName);
    }

    public static function getView(string $viewName): string {
        return file_get_contents("Views/$viewName.php");
    }
}

?>
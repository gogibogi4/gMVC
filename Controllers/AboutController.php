<?php

class AboutController extends Controller {
    public static function getResponse(string $viewName): string {
        return self::getView($viewName);
    }
}

?>
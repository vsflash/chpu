<?php

class Router {

    static public function load() {
        $url = $_SERVER['REQUEST_URI'];
        $url_components = explode('/', $url);
        $section_name = $url_components[1];
        $class_name = ucfirst($section_name);
        if (!class_exists($class_name)) {
            self::redirect();
        }
        $sectionObj = new $class_name();
        $item_number = $url_components[2];
        if (empty($item_number)) {
            $sectionObj->index();
        } else {
            if (!$sectionObj->showItem($item_number)) {
                self::redirect();
            }
        }
    }

    static public function redirect() {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
        include_once 'error404.php';
        exit();
    }

}

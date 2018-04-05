<?php

class Router {

    static public function load() {
        $url = $_SERVER['REQUEST_URI'];
        $url_components = explode('/', $url);
        $section_name = $url_components[1];
        $class_name = ucfirst($section_name);
        if (!class_exists($class_name)) {
            //TODO redirect to 404
            exit('404');
        }
        $sectionObj = new $class_name();
        $item_number = $url_components[2];
        if(empty($item_number)){
            $sectionObj->index();
        }else{
            if(!$sectionObj->showItem($item_number)){
                //TODO redirect to 404
                exit('404');
            }
        }
    }

}

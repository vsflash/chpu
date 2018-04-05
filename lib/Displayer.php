<?php

class Displayer {
    /**
     *directory folder name
     * @var string 
     */
    protected $folder = 'templates';
    /**
     *название файла шаблона
     * @var string 
     */
    protected $template = 'main_template.php';


    public function show($content_template, $data) {
        //TODO
        //var_dump($data);
        $content_template_file  = $this->folder.DIRECTORY_SEPARATOR.$content_template;
        include_once $this->folder.DIRECTORY_SEPARATOR.$this->template;
    }

}

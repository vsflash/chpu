<?php

abstract class AbstractSection implements Sectionable {

    protected $displayer;

    public function __construct() {
        $this->displayer = new Displayer();
    }

}

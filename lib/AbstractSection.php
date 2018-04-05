<?php

abstract class AbstractSection implements Sectionable {
/**
 *обьект который выролняет отображение
 * @var type 
 */
    protected $displayer;

    public function __construct() {
        $this->displayer = new Displayer();
    }

}

<?php

class News extends AbstractSection {

    /**
     *
     * @var NewsHandler 
     */
    protected $news_handler;

    public function __construct() {
        parent::__construct();
        $this->news_handler = new NewsHandler();
    }

    public function index() {
        $data = $this->news_handler->getAllNews();
        $this->displayer->show($data);
    }

    public function showItem($itemID) {
        $data = $this->news_handler->getNewsItem($itemID);
        if ($data) {
            $this->displayer->show($data);
            return true;
        } else {
            return false;
        }
    }

}

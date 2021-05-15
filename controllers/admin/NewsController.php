<?php

use config\AdminController;

class NewsController extends AdminController {

    public function index()
    {
        $news = new News();

        $this->data['news'] = $news->getNews();

        $this->tpl = 'news/index';
    }

    public function create() {
        
        $this->tpl = 'news/create';

    }

    public function store($data) {

        $news = new News();

        $news->insertData($data);

        header('Location: '.HOST.'admin/?page=news');

    }

    public function edit() {

        $news = new News();

        $this->data['news'] = $news->getById('news', $_GET['id']);
        
        $this->tpl = 'news/edit';
    }

    public function update($data) {
        
        $news = new News();

        $news->updateMenuItem($data);

        header('Location: '.HOST.'admin/?page=news');

    }

    public function delete($data) {

        $news = new News();

        $news->deleteById('news', $data['id']);

        echo 'ok';

    }

}
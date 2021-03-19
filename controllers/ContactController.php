<?php

use config\Controller;

class ContactController extends Controller {

    public function index()
    {
        $contact = new Contact();
        
        $this->data['menu'] = $contact->getMenu();
        
        $this->tpl = 'contact';
    }

}
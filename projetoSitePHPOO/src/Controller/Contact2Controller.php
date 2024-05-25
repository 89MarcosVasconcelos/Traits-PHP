<?php
namespace Code\Controller;

use Code\View\View;

class Contact2Controller {
    public function index() {
        $view = new View('site/contact2.phtml');
        
        return $view->render();
    }
}
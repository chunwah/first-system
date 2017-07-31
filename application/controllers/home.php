<?php

class Home extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Home | Cyber Catcher';
        $vars['content_view'] = 'home_view';
        
        $this->load->view('template', $vars);
    }
}


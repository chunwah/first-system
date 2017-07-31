<?php

class Services extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Services | Cyber Catcher';
        $vars['content_view'] = 'services_view';
        
        $this->load->view('template', $vars);
    }
}
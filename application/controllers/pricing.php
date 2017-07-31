<?php

class Pricing extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Pricing | Cyber Catcher';
        $vars['content_view'] = 'pricing_view';
        
        $this->load->view('template', $vars);
    }
}
<?php

class Portfolio extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Portfolio | Cyber Catcher';
        $vars['content_view'] = 'portfolio_view';
        
        $this->load->view('template', $vars);
    }
}
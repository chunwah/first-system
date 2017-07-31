<?php

class Page_404 extends CI_Controller {
    
    public function index() {
        $vars['title'] = '404 | Cyber Catcher';
        $vars['content_view'] = 'page_404_view';
        
        $this->load->view('template', $vars);
    }
}
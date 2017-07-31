<?php

class Blog extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Blog | Cyber Catcher';
        $vars['content_view'] = 'blog_view';
        
        $this->load->view('template', $vars);
    }
}
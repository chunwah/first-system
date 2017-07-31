<?php

class About_Us extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'About Us | Cyber Catcher';
        $vars['content_view'] = 'about_us_view';
        
        $this->load->view('template', $vars);
    }
}


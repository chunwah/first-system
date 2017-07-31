<?php

class Contact_Us extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Contact Us | Cyber Catcher';
        $vars['content_view'] = 'contact_us_view';
        
        $this->load->view('template', $vars);
    }
}
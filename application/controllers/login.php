<?php

class Login extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Login | Cyber Catcher';
        $vars['content_view'] = 'login_view';
        
        $this->load->view('template', $vars);
    }
}
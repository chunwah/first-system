<?php

class Shortcodes extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Shortcodes | Cyber Catcher';
        $vars['content_view'] = 'shortcodes_view';
        
        $this->load->view('template', $vars);
    }
}
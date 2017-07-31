<?php

class Blog_Item extends CI_Controller {
    
    public function index() {
        $vars['title'] = 'Blog Single | Cyber Catcher';
        $vars['content_view'] = 'blog_item_view';
        
        $this->load->view('template', $vars);
    }
}
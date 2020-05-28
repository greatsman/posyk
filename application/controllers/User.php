<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        check_not_login();
        $this->load->model('user_model');
        $data['rows'] = $this->user_model->get();
        $this->template->load('template', 'user/index', $data);
    }

    public function add()
    {
        $this->template->load('template', 'user/add');
    }
}
        
    /* End of file  User.php */

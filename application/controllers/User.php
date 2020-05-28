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
        //memanggil library form validation
        $this->load->library('form_validation');
        //membuat rules untuk add user
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules(
            'passwordconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array(
                'matches'      => '%s tidak sesuai dengan password',
            )
        );
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', 'Kolom %s Silahkan Diisi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silhakan ganti');

        if ($this->form_validation->run() ==  FALSE) {
            $this->template->load('template', 'user/add');
        } else {
        }
    }
}
        
    /* End of file  User.php */

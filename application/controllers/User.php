<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('user_model');
    }

    public function index()
    {
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
                'matches'      => '%s tidak sesuai',
            )
        );
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', 'Kolom %s wajib diisi');
        $this->form_validation->set_message('min_length', '{field} minimal {param} karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silhakan ganti');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() ==  FALSE) {
            $this->template->load('template', 'user/add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_model->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Disimpan');</script>";
            }
            echo "<script>
                        window.location='" . site_url('user') . "';
                </script>";
        }
    }
}
        
    /* End of file  User.php */

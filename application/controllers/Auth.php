<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $this->load->view('login');
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
      $this->load->model('user_model', 'user');
      $query = $this->user->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array(
          'userid' => $row->user_id,
          'level' => $row->level
        );
        $this->session->set_userdata($params);
        echo "<script>
                  alert('Selamat, Login Berhasil');
                  window.location='" . site_url('dashboard') . "';
               </script>";
      } else {
        echo "<script>
                  alert('Maaf, Login Gagal');
                  window.location='" . site_url('auth/login') . "';
              </script>";
      }
    }
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */

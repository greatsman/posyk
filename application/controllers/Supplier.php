<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
    //memanggil library form validation
    // $this->load->library('form_validation');
    $this->load->model('supplier_model');
  }

  public function index()
  {
    $data['rows'] = $this->supplier_model->get();
    $this->template->load('template', 'supplier/index', $data);
  }

  public function delete($id)
  {
    $this->supplier_model->del($id);
    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('Data Berhasil Dhapus');</script>";
    }
    echo "<script>
              window.location='" . site_url('supplier') . "';
      </script>";
  }
}

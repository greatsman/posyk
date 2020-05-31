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

  public function add()
  {
    $supplier = new stdClass();
    $supplier->supplier_id = null;
    $supplier->name = null;
    $supplier->phone = null;
    $supplier->address = null;
    $supplier->description = null;
    $data = array(
      'page' => 'add',
      'row' => $supplier,
    );

    $this->template->load('template', 'supplier/form', $data);
  }

  public function edit($id)
  {
    $query = $this->supplier_model->get($id);
    if ($query->num_rows() > 0) {
      $supplier = $query->row();
      $data = array(
        'page' => 'edit',
        'row' => $supplier,
      );
      $this->template->load('template', 'supplier/form', $data);
    } else {
      echo "<script>alert('Data Tidak Ditemukan');</script>";
      echo "<script> window.location='" . site_url('supplier') . "'; </script>";
    }
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['add'])) {
      $this->supplier_model->add($post);
    } else if (isset($_POST['edit'])) {
      $this->supplier_model->edit($post);
    }
    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('Data Berhasil Di perbarui');</script>";
    }
    echo "<script> window.location='" . site_url('supplier') . "'; </script>";
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

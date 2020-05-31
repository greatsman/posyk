<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => empty($post['description']) ? null : $post['description'],
        ];
        $this->db->insert('supplier', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => empty($post['description']) ? null : $post['description'],
        ];
        $this->db->where('supplier_id', $post['supplier_id']);
        $this->db->update('supplier', $params);
    }

    public function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}
                        
/* End of file Supplier.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistics_model extends CI_Model {
	
	public function getList()
    {
        return $this->db
            ->select('*')
            ->from('statistics t')
            ->order_by('t.created_at', 'DESC')
            ->get()
            ->result_array();
    }

    public function save($data) {
        $this->db->insert('statistics', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id)->delete('statistics');
    }

    public function getById($id) {
        return $this->db
            ->select('*')
            ->from('statistics')
            ->where('id', $id)
            ->get()
            ->row_array();
    }

    public function update($data) {
        $this->db->where('id', $data['id'])->update('statistics', $data);
    }
}
?>
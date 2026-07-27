<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Philosophy_model extends CI_Model {
	
	public function getPhilosophiesList()
    {
        return $this->db
            ->select('*')
            ->from('philosophies')
            ->order_by('created_at', 'DESC')
            ->get()
            ->result_array();
    }

    public function save($data) {
        $this->db->insert('philosophies', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id)->delete('philosophies');
    }

    public function getPhilosophyById($id) {
        return $this->db
            ->select('*')
            ->from('philosophies')
            ->where('id', $id)
            ->get()
            ->row_array();
    }

    public function update($data) {
        $this->db->where('id', $data['id'])->update('philosophies', $data);
    }
}
?>
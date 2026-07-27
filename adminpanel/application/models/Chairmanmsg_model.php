<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chairmanmsg_model extends CI_Model {
	
    public function getChairmanMessage($id = 1) {
        return $this->db
            ->select('*')
            ->from('chairman_msg')
            ->where('id', $id)
            ->get()
            ->row_array();
    }

    public function update($data) {
        return $this->db->where('id', $data['id'])->update('chairman_msg', $data);
    }
}
?>
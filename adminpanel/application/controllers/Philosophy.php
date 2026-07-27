

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Philosophy extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('philosophy_model');
        is_login();
    }

	public function index()
	{
        $data = array();
        $data['philosophies_list'] = $this->philosophy_model->getPhilosophiesList();
        $this->load->view('philosophy/list', $data);
	}
   
    public function add() {
        $data = array();
        $this->load->view('philosophy/add', $data);
    }

    public function save() {
        $data = $this->input->post();
        if (isset($data['id'])) {
            $this->philosophy_model->update($data);
        } else {
            $this->philosophy_model->save($data);
        }
        redirect('philosophy');
    }

    public function delete($id) {
        $this->philosophy_model->delete($id);
        redirect('philosophy');
    }

    public function edit($id) {
        $data = array();
        $data['philosophy'] = $this->philosophy_model->getPhilosophyById($id);
        $this->load->view('philosophy/add', $data);
    }

}
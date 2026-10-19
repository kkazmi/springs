

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('statistics_model');
        is_login();
    }

	public function index()
	{
        $data = array();
        $data['testimonials_list'] = $this->statistics_model->getList();
        $this->load->view('statistics/list', $data);
	}
   
    public function add() {
        $data = array(
            // 'property_types' => $this->statistics_model->getPropertyTypesList(),
            // 'transaction_types' => $this->statistics_model->getTransactionTypesList(),
            // 'project_properties' => $this->statistics_model->getProjectPropertiesList(),
        );
        $this->load->view('statistics/add', $data);
    }

    public function save() {
        $data = $this->input->post();
        if (isset($data['testimonial_id'])) {
            $this->statistics_model->update($data);
        } else {
            $this->statistics_model->save($data);
        }
        redirect('statistics');
    }

    public function delete($id) {
        $this->statistics_model->delete($id);
        redirect('statistics');
    }

    public function edit($id) {
        $data = array(
            'statistic' => $this->statistics_model->getById($id),
        );
        $this->load->view('statistics/add', $data);
    }

}
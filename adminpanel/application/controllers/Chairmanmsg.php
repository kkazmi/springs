<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chairmanmsg extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('chairmanmsg_model');
        is_login();
    }

	public function index()
	{
        $data = array();
        $data['chairmanmsg'] = $this->chairmanmsg_model->getChairmanMessage();
        // print_r($data['chairmanmsg']);die;
        $this->load->view('chairmanmsg/add', $data);
	}
    
    public function update() {
        $data = $this->input->post();
        $this->chairmanmsg_model->update($data);
        redirect('chairmanmsg');
    }
}

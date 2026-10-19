<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $data = array();
        $data = array(
            'hero'=>$this->common_model->getSliders('ABOUT_HERO','ABOUT'),
            'intro'=>$this->common_model->getSliders('ABOUT_INTRO','ABOUT'),
            'chairmen_msg'=>$this->common_model->getChairmenMsg(),
            'philosophies'=>$this->common_model->getPhilosophies('ABOUT'),
        );

        // print_r($data['philosophies']);die;
        
        $this->load->view('about/index', $data);
    }
}
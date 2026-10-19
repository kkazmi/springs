<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Channelpartner extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $data = array();
         $data = array(
            'hero'=>$this->common_model->getSliders('CHANNEL_PARTNERS_HERO','CHANNEL_PARTNERS'),
            // 'intro'=>$this->common_model->getSliders('ABOUT_INTRO','ABOUT'),
            // 'chairmen_msg'=>$this->common_model->getChairmenMsg(),
            // 'philosophies'=>$this->common_model->getPhilosophies('ABOUT'),
        );
        
        $this->load->view('channelpartner/index', $data);
    }
}
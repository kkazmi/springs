<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = array(
            'preloader_gallery'=>$this->common_model->getPreloaderGallery(),
            'hero_slider_gallery'=>$this->common_model->getHeroSliderGallery(),
            'hero_caption'=>$this->common_model->getHeroCaption(),
            'testimonials'=>$this->common_model->getTestimonials(),
            'interior_images'=>$this->common_model->getInteriorImages(),
            'blogs'=>$this->common_model->getBlogs(),
        );
        
        $this->load->view('home/index', $data);
    }
}
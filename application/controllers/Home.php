<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('gallery_model');
    }
    public function index()
    {
        //   $data['gallery'] = [
        //         'left' => [
        //             'assets/images/media/landing/0.preloader/preloader-left-1-xxxl.webp',
        //             'preloader-left-2',
        //             'preloader-left-3',
        //         ],
        //         'right' => [
        //             'preloader-right-1',
        //             'preloader-right-2',
        //             'preloader-right-3',
        //         ]
        //     ];
        $data = array(
            'preloader_gallery'=>$this->gallery_model->getPreloaderGallery(),
            'hero_slider_gallery'=>$this->gallery_model->getHeroSliderGallery(),
            'hero_caption'=>$this->gallery_model->getHeroCaption(),
        );
        // $data['preloader_gallery']=$this->gallery_model->getPreloaderGallery();
        // $data['hero_slider_gallery']=$this->gallery_model->getHeroSliderGallery();
        // echo "<pre>";
        // print_r($data['gallery']);die;
        $this->load->view('home/index', $data);
    }
}
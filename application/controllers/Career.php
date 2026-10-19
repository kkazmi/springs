<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array();
        
        $this->load->view('career/index', $data);
    }

    public function submit_application()
    {
        if ($this->input->method(TRUE) !== 'POST') { show_404(); }
        // Validate required fields.
        $this->form_validation->set_rules(
            'fullname', 'Full Name', 'required|trim|max_length[150]'
        );
        $this->form_validation->set_rules(
            'email', 'Email', 'required|trim|valid_email|max_length[150]'
        );
        $this->form_validation->set_rules(
            'mobile', 'Mobile Number', 'required|trim|max_length[20]'
        );
        $this->form_validation->set_rules(
            'experience', 'Experience', 'required|trim|max_length[50]'
        );
        $this->form_validation->set_rules(
            'company', 'Company Name', 'required|trim|max_length[150]'
        );
        $this->form_validation->set_rules(
            'position', 'Position', 'required|trim|max_length[200]'
        );
         // Debugging line to check the POST data
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('career');
            return;
        }

        // CV upload is optional.
        $cv_path = NULL;

        if (!empty($_FILES['cv_file']['name'])) {
            $upload_path = FCPATH . 'uploads/cv/';

            if (!is_dir($upload_path) &&
                !mkdir($upload_path, 0777, TRUE)) {
                show_error('Unable to create CV upload directory.');
            }

            $config = [
                'upload_path'   => $upload_path,
                'allowed_types' => 'docx|pdf',
                'max_size'      => 2048,
                'encrypt_name'  => TRUE
            ];

            $this->upload->initialize($config, TRUE);

            if (!$this->upload->do_upload('cv_file')) {
                $error = strip_tags(
                    $this->upload->display_errors('', '')
                );
                print_r($error);die;
                $this->session->set_flashdata('error', $error);
                redirect('career');
                return;
            }

            $file = $this->upload->data();
            $cv_path = 'uploads/cv/' . $file['file_name'];
        }

        // Prepare database data.
        $data = [
            'fullname' => trim($this->input->post('fullname', TRUE)),
            'email' => trim($this->input->post('email', TRUE)),
            'mobile' => trim($this->input->post('mobile', TRUE)),
            'experience' => trim($this->input->post('experience', TRUE)),
            'company' => trim($this->input->post('company', TRUE)),
            'position' => trim($this->input->post('position', TRUE)),
            'cv_file' => $cv_path,
            'sourcing_manager' => $this->input->post(
                'sourcing_manager', TRUE
            ) ?: NULL
        ];
        // print_r($data);die;
        if ($this->common_model->save_application($data)) {
            $this->session->set_flashdata(
                'success',
                'Your job application has been submitted successfully.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'Unable to submit your application. Please try again.'
            );
        }

        redirect('career');
    }
}
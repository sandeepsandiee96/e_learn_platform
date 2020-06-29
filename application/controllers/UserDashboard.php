<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model("quiz_model");
		$this->load->model("Training_model");
		$this->load->model("Studymaterial_model");
        $this->lang->load('basic', $this->config->item('language'));
        // redirect if not loggedin
        if (! $this->session->userdata('logged_in')) {
            redirect('login');
        }
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in['base_url'] != base_url()) {
            $this->session->unset_userdata('logged_in');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = $this->lang->line('dashboard');

        $logged_in = $this->session->userdata('logged_in');
		$data['limit'] = "0";
              $data['num_quiz'] = $this->quiz_model->quizstat('active');   
			$data['num_video'] =$this->Training_model->num_video();
			$data['num_materail']= $this->Studymaterial_model->num_material();
       
//print_r($data);die;
        $this->load->view('header', $data);
        $this->load->view('user_dashboard', $data);
        $this->load->view('footer', $data);
    }

}
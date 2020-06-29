<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Training extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Training_model");
        $this->lang->load('basic', $this->config->item('language'));
    }

public function index(){
	$data['title']='Training Program List';
	$data['result'] = $this->Training_model->allVideo();
	$this->load->view('header',$data);
		$this->load->view('training_list',$data);
		$this->load->view('footer',$data);
}

public function add_new(){
	if(!$this->session->userdata('logged_in')){
			redirect('login');
			
		}
		$logged_in=$this->session->userdata('logged_in');
		if($logged_in['base_url'] != base_url()){
		$this->session->unset_userdata('logged_in');		
		redirect('login');
		}
		$logged_in=$this->session->userdata('logged_in');
                        $acp=explode(',',$logged_in['training']);
			if(!in_array('Add',$acp)){
			exit($this->lang->line('permission_denied'));
			}
			
	$data['title']=$this->lang->line('training');
		
		$this->load->view('header',$data);
		$this->load->view('add_training',$data);
		$this->load->view('footer',$data);
	
	
}

public function save_video(){
	$data=array(
	'title' => $this->input->post('v_title'),
	'description' => $this->input->post('v_description'),
	'link' => $this->input->post('v_link'),
	);
$this->Training_model->saveVideo($data);
		redirect('training');
	
}
public function view_video($id){
	$data['title'] = 'View Video';
	$data['info']=$this->Training_model->getVideo($id);
	$this->load->view('header',$data);
		$this->load->view('view_training',$data);
		$this->load->view('footer',$data);
}
public function edit_video($id){
	$data['title'] = 'Edit Video';
	$data['result']=$this->Training_model->getVideo($id);
	$this->load->view('header',$data);
		$this->load->view('add_training',$data);
		$this->load->view('footer',$data);
}
public function update_video($id){
	$data=array(
	'title' => $this->input->post('v_title'),
	'description' => $this->input->post('v_description'),
	'link' => $this->input->post('v_link'),
	);
$this->Training_model->updateVideo($data,$id);
		redirect('training');
	
}
public function remove_video($id){
	$this->Training_model->deleteVideo($id);
redirect('training');
}	
	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$admin_id = $this->session->userdata('admin_id');
		if ($admin_id != NULL) {
			redirect('super_admin');
		}
	}

	public function index()
	{
		$data = array();
		$data['variable1']= "admin controller";
		$data['admin_login_form']=$this->load->view('admin/login_page_view',$data,true);
		$this->load->view('admin/admin_view',$data);

	}

	public function login_check()
	{
		$rules = array(
			"email" => array(
				'field'=> 'email',
				'label'=> 'email',
				'rules'=> 'trim|required|valid_email'
			),
			"password" => array(
				'field'=> 'password',
				'label'=> 'password',
				'rules'=> 'required|max_length[150]|min_length[5]'
			),
		);
		//set rules
		$this->form_validation->set_rules($rules);
		// if validation failed
		if($this->form_validation->run()!= true)
		{
			//get error message from violating form rules
			$sdata = array();
			$sdata['error']= form_error('email').form_error('password');
			$this->session->set_userdata($sdata);
			redirect('admin');
		}
		else  // if validation successed
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$result = $this->admin_model->check_admin_exist($email,$password);
			if ($result) {
				$sdata = array();
				$sdata['admin_id']= $result->id;
				$sdata['admin_name']= $result->name;
				$this->session->set_userdata($sdata);
				redirect('super_admin');
			}else{
				redirect('admin');
			}
		}
	}
















}

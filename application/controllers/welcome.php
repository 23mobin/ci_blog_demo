<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$u_id = $this->session->userdata('u_id');
		if ($u_id != NULL) {
			redirect(base_url('user_home'));
		}
	}

	public function index()
	{
		$data = array();
		$data['variable1']= "a value from controller";
		$this->load->library('pagination');
		$config['base_url'] = base_url('welcome/index');
		$config['total_rows'] = count($this->welcome_model->count_blog());
		// echo $config['total_rows'];
		// exit();
    $config['per_page'] = 5;
    $config['uri_segment'] = 3;
		//config for bootstrap pagination class integration
    $config['full_tag_open'] = '<ul class="pagination pull-right">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';




		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$offset = $this->uri->segment(3);
		$data['homepage_paginations'] = $this->pagination->create_links();
		$data['pinned_blogs'] = $this->welcome_model->read_pin_blog_max_views();
		$data['published_blogs'] = $this->welcome_model->read_published_blog_with_limit_ofset($limit,$offset);
    $data['logo_on'] = true;
		$data['carosul_on'] = true;
		$data['top3_on'] = true;
		$data['carosul_404'] = true;
		$data['user_loging_form']=$this->load->view('user/login',$data,true);

		$data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
		$data['carosul'] = $this->load->view('main_site/carosul_view',$data,true);
		$data['top3'] = $this->load->view('main_site/top_3',$data,true);
		$data['homepage_content']=$this->load->view('main_site/main_content_view',$data,true);

		$this->load->view('home_view',$data);
	}


	public function view_article($blog_id)
	{
		$data = array();
		$data['carosul_404'] = true;
		$data['pb_b_id'] = $this->welcome_model->read_published_blog_by_id($blog_id);
		if (empty($data['pb_b_id'])) {
			 redirect(base_url('welcome/page_404'));
		}else{
		$data['logo_on'] = false;
		$data['carosul_on'] = false;
		$data['top3_on'] = false;

		$data['user_loging_form']=$this->load->view('user/login',$data,true);

		$data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
		$data['carosul'] = $this->load->view('main_site/carosul_view',$data,true);
		$data['top3'] = $this->load->view('main_site/top_3',$data,true);
		$data['homepage_content']=$this->load->view('main_site/single_page_content',$data,true);

		$this->load->view('home_view',$data);

	}

	}
	public function page_404()
	{
		$data = array();

		$data['logo_on'] = false;
		$data['carosul_on'] = false;
		$data['carosul_404'] = false;
		$data['top3_on'] = false;
		$data['user_loging_form']=$this->load->view('user/login',$data,true);

		$data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
		$data['carosul'] = $this->load->view('main_site/carosul_view',$data,true);
		$data['top3'] = $this->load->view('main_site/top_3',$data,true);
		$data['homepage_content']=$this->load->view('main_site/404',$data,true);

		$this->load->view('home_view',$data);

	}


	public function login_check(){
		$rules = array(
			"u_email" => array(
				'field'=> 'u_email',
				'label'=> 'email',
				'rules'=> 'trim|required|valid_email'
			),
			"u_password" => array(
				'field'=> 'u_password',
				'label'=> 'password',
				'rules'=> 'required|max_length[150]|min_length[5]'
			),
		);
		//set rules
		$this->form_validation->set_rules($rules);
		// if validation failed
		if($this->form_validation->run()!= true){
			//get error message from violating form rules
			$sdata = array();
			$sdata['error']= form_error('u_email','<span style="color:red;background-color:pink;">','</span>').form_error('u_password','<span style="color:red;background-color:pink;">','</span>');
			$this->session->set_userdata($sdata);
			redirect('welcome');
		}
		else{
			// if validation successed
			$email = $this->input->post('u_email');
			$password = $this->input->post('u_password');
			$result = $this->welcome_model->check_user_exist($email,$password);
			if ($result) {
				$sdata = array();
				$sdata['u_id']= $result->u_id;
				// $sdata['u_id']= 1;
				$sdata['u_name']= $result->u_name;
				$this->session->set_userdata($sdata);
				redirect('user_home');
			}else{
				redirect('welcome');
			}
		}
	}









}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['homepage_content']=$this->load->view('main_site/main_content_view',$data,true);
		$this->load->view('home_view',$data);
	}


	public function view_article($blog_id)
	{
		$data = array();
		$data['variable2']= $this->welcome_model->method1();
		$data['homepage_content']=$this->load->view('main_site/single_page_content',$data,true);
		$this->load->view('home_view',$data);

	}







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

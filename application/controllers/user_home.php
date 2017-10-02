<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class User_home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $u_id = $this->session->userdata('u_id');
    if ($u_id == NULL) {
      redirect(base_url());
    }
  }

  public function index()
  {
    $data = array();
    $data['head']=$this->load->view('header',$data,true);
    $data['u_name']= $this->session->userdata('u_name');
    // $data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
    $data['u_id']= $this->session->userdata('u_id');
    $id= $this->session->userdata('u_id');



    $data['category_name'] = $this->user_model->read_categories($id);

    // FOR BLOG POST BY USER IN USERS HOMEPAGE

    $this->load->library('pagination');
    $config['base_url'] = base_url('user_home/index');
    $config['total_rows'] = count($this->user_model->count_blog_by_authore_id($id));
    // echo $config['total_rows'];
    // exit();
    $config['per_page'] =6;
    $config['uri_segment'] = 3;
    //config for bootstrap pagination class integration
    $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '<span  aria-hidden="true"><<</span>';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '<span  aria-hidden="true">>></span>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active "><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';




    $this->pagination->initialize($config);
    $limit = $config['per_page'];
    $offset = $this->uri->segment(3);

    $data['authore_home_paginations'] = $this->pagination->create_links();
    // $data['pinned_blogs'] = $this->welcome_model->read_pin_blog_max_views();
    $data['authore_blogs'] = $this->user_model->read_authores_blog_with_limit_ofset($limit,$offset,$id);
    $data['categories']=$this->load->view('user/user_category_nav_v',$data,true);

    $data['u_home_content']=$this->load->view('user/user_home_content',$data,true);
    $data['user_left_sidebar']=$this->load->view('user/user_left_sidebar_v',$data,true);
    $data['u_navbar']=$this->load->view('user/user_navbar_v',$data,true);
    $this->load->view('user/user_home_v',$data);
  }






  public function blogs($category_id){

    $data = array();
    $data['head']=$this->load->view('header',$data,true);
    $data['u_name']= $this->session->userdata('u_name');
    // $data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
    $data['u_id']= $this->session->userdata('u_id');
    $user_id= $this->session->userdata('u_id');

    $data['category_name'] = $this->user_model->read_categories($user_id);
    $data['category_blogs'] = $this->user_model->read_user_blog_by_category_id($category_id,$user_id);
    $data['categories']=$this->load->view('user/user_category_nav_v',$data,true);


    $data['user_left_sidebar']=$this->load->view('user/user_left_sidebar_v',$data,true);
    $data['u_home_content']=$this->load->view('user/user_blogs_categories_v',$data,true);
    $data['u_navbar']=$this->load->view('user/user_navbar_v',$data,true);
    $this->load->view('user/user_home_v',$data);

  }

  public function add_a_blog(){

    $data = array();
    $data['head']=$this->load->view('header',$data,true);
    $data['u_name']= $this->session->userdata('u_name');
    // $data['navbar'] = $this->load->view('main_site/navbar_view',$data,true);
    $data['u_id']= $this->session->userdata('u_id');
    $user_id= $this->session->userdata('u_id');

    // $data['category_name'] = $this->user_model->read_categories($user_id);
    // $data['category_blogs'] = $this->user_model->read_user_blog_by_category_id($category_id,$user_id);
    // $data['categories']=$this->load->view('user/user_category_nav_v',$data,true);


    $data['user_left_sidebar']=$this->load->view('user/user_left_sidebar_v',$data,true);
    $data['u_home_content']=$this->load->view('user/add_blog_v',$data,true);
    $data['u_navbar']=$this->load->view('user/user_navbar_v',$data,true);
    $this->load->view('user/user_home_v',$data);

  }


  public function logout()
  {
    $this->session->unset_userdata('u_id');
    $this->session->unset_userdata('u_name');
    redirect(base_url(),'refresh');
  }
}

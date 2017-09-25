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
    $data['u_name']= $this->session->userdata('u_name');
    $data['u_id']= $this->session->userdata('u_id');
    $data['u_home_content']=$this->load->view('user/user_home_content',$data,true);
    $data['u_navbar']=$this->load->view('user/user_navbar_v',$data,true);
		$this->load->view('user/user_home_v',$data);
  }
  public function page1()
	{
    $data = array();
    $data['u_name']= $this->session->userdata('u_name');
    $data['u_id']= $this->session->userdata('u_id');
    $data['u_home_content']=$this->load->view('user/user_page1',$data,true);
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

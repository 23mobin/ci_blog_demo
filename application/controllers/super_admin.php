<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Super_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $admin_id = $this->session->userdata('admin_id');
    if ($admin_id == NULL) {
      redirect('admin');
    }
  }

	public function index()
	{
    $data = array();
		$data['variable1']= "admin dashboard";
    $data['admin_name']= $this->session->userdata('admin_name');
		$data['admin_home_content']=$this->load->view('admin/admin_home_content',$data,true);
		$this->load->view('admin/admin_dashboard',$data);

  }
  public function logout()
	{
    $this->session->unset_userdata('admin_id');
    $this->session->unset_userdata('admin_name');
		redirect('admin');
  }
}

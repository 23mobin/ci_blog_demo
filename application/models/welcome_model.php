<?php
class Welcome_model extends CI_Model {

  public function method1()
  {
    $s = " A value for page from a  model <br>";
    return $s;
  }

  public function count_blog(){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->order_by('blog_id','asc');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function read_published_blog_with_limit_ofset($limit,$ofset){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->order_by('blog_date','desc');
    $this->db->limit($limit,$ofset);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function read_pin_blog_max_views(){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->order_by('blog_view_counts','desc');
    $this->db->limit(1,0);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result;
  }
  public function authore_name_by_id($id){

    $this->db->select('name');
    $this->db->from('admin_info');
    $this->db->where('id',$id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result->name;
  }
  public function read_published_blog_by_id($blog_id){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->where('blog_id',$blog_id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result;
  }

  public function check_user_exist($email,$password)
  {
    $this->db->select('*');
    $this->db->from('users_info');
    $this->db->where('u_email',$email);
    $this->db->where('u_password',md5($password));
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;

  }

}

?>

<?php
class User_model extends CI_Model {


  public function read_categories($u_id){
    $this->db->select('blog_category.c_parent_id,blog_category.c_id');
    $this->db->from('blog_category');
    $this->db->join('blogs','blog_category.c_id = blogs.blog_category_id');
    $this->db->where('blogs.blog_authore_id',$u_id);
    $this->db->group_by('blog_category.c_parent_id');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function get_category_child_by_id($p_id,$u_id){
    $this->db->select('blog_category.c_id,blog_category.c_name');
    $this->db->from('blog_category');
    $this->db->join('blogs','blogs.blog_category_id = blog_category.c_id');
    $this->db->where('blogs.blog_authore_id',$u_id);
    $this->db->where('blog_category.c_parent_id',$p_id);
    $this->db->group_by('blogs.blog_category_id');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }
  public function get_category_name_by_id($id){
    $this->db->select('c_name');
    $this->db->from('blog_category');
    $this->db->where('c_id',$id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result->c_name;
  }
  public function get_child_category_name(){
    $this->db->select('*');
    $this->db->from('blog_category');
    $this->db->where('c_parent_id !=',0);
    $this->db->order_by('c_name','ASC');

    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function count_blog_by_authore_id($id){

    $this->db->select('blog_id');
    $this->db->from('blogs');
    // $this->db->where('blog_published_status',1);
    $this->db->where('blog_authore_id',$id);
    $this->db->order_by('blog_id','asc');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function read_authores_blog_with_limit_ofset($limit,$ofset,$id){

    $this->db->select('*');
    $this->db->from('blogs');
    // $this->db->where('blog_published_status',1);
    $this->db->where('blog_authore_id',$id);
    $this->db->order_by('blog_date','desc');
    $this->db->limit($limit,$ofset);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function read_user_blog_by_category_id($category_id,$user_id){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_authore_id',$user_id);
    $this->db->where('blog_category_id',$category_id);
    $this->db->order_by('blog_date','desc');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }










}

?>

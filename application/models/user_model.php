<?php
class User_model extends CI_Model {

  // public function select_all_friends_by_id($user_id)
  // { $friends_id = array();
  //   $this->db->select('*');
  //   $this->db->from('friends_relations');
  //   $this->db->where('user_id',$user_id);
  //   $this->db->or_where('friend_id',$user_id);
  //   $query_result=$this->db->get();
  //   $result = $query_result->result();
  //
  //   foreach($result as $users_friends){
  //     if($users_friends->friend_id == $user_id)
  //     {array_push($friends_id,$users_friends->user_id);}
  //     else {array_push($friends_id,$users_friends->friend_id);}
  //   }
  //   return $friends_id;
  // }

  public function read_categories(){
    $this->db->select('*');
    $this->db->from('blog_category');
    $this->db->where('c_parent_id',0);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function get_category_child_by_id($id){
    $this->db->select('*');
    $this->db->from('blog_category');
    $this->db->where('c_parent_id',$id);
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
    $this->db->order_by('blog_id','asc');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }










}

?>

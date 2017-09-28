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










}

?>

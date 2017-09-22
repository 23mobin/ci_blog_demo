<?php
class Admin_model extends CI_Model {

  public function check_admin_exist($email,$password)
  {
    $this->db->select('*');
    $this->db->from('admin_info');
    $this->db->where('email',$email);
    $this->db->where('password',md5($password));
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;

  }
}

?>

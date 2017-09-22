<?php
class Welcome_model extends CI_Model {

  public function method1()
  {
    $s = " A value for page from a  model <br>";
    return $s;
  }

  public function read_published_blog(){

    $this->db->select('*');
    $this->db->from('demo_line');
    $this->db->order_by('d_id','asc');
    // $this->db->limit(6,$bad_dao+0);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function read_published_blog_with_limit_ofset($limit,$ofset){

    $this->db->select('*');
    $this->db->from('demo_line');

    $this->db->order_by('d_id','asc');
    $this->db->limit($limit,$ofset);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }
}

?>

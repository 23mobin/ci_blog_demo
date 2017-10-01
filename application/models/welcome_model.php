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



  public function get_blog_posts_by_category_id($category_id){

    $this->db->select('blog_id,blog_category_id,blog_title,blog_image');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->where('blog_category_id',$category_id);
    $this->db->order_by('blog_date','desc');
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
  }

  public function get_category_name($id){
    $this->db->select('c_name');
    $this->db->from('blog_category');
    $this->db->where('c_id',$id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result;
  }

  public function get_parent_child($c_id){
    $sql = "SELECT a.c_id AS 'aid', a.c_name AS 'parent', b.c_id AS 'bid', b.c_name AS 'child'
            FROM blog_category b
            INNER JOIN blog_category a
            ON a.c_id = b.c_parent_id
            WHERE b.c_id = $c_id;";
            $query_result=$this->db->query($sql);
            $result = $query_result->result();
  }



  public function authore_name_by_id($id){

    $this->db->select('u_name');
    $this->db->from('users_info');
    $this->db->where('u_id',$id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result->u_name;
  }
  public function get_parent_category(){
    $this->db->select('*');
    $this->db->from('blog_category');
    $this->db->where('c_parent_id',0);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;



  }


  public function category_by_category_id($id){

    $this->db->select('c_name');
    $this->db->from('blog_category');
    $this->db->where('c_id',$id);
    $query_result=$this->db->get();
    $result = $query_result->row();
    return $result->c_name;
  }
  public function get_child_parent_id($id){

    $this->db->select('*');
    $this->db->from('blog_category');
    $this->db->where('c_parent_id',$id);
    $query_result=$this->db->get();
    $result = $query_result->result();
    return $result;
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


  public function get_random_blog_posts($limit){

    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('blog_published_status',1);
    $this->db->order_by('RAND()');
    $this->db->limit($limit);
    $query_result=$this->db->get();
    $result = $query_result->result();
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

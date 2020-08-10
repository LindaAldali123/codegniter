<?php
class Users_model extends CI_Model{
  public function  get_user_by_email($email){
   $this->db->select('*');
   $this->db->from('users');
   $this->db->where('Email',$email);
   $query=$this->db->get();
   if($query->num_rows()>0){
     //  $res=$query->$result();
     //  return $res[0];
     foreach($query->result() as $r){
      $r;}
        return $r;
   }
   else{
       return false;
   }
  }
  public function add_user($name,$email,$pass){
  $generaldata=array(
      'Email'=>$email,
      'Password'=>md5($pass),
      'Name'=>$name
  );
  $query=$this->db->insert('users',$generaldata);
  if($query){
return true;
  }else{
return false;
  }
  }
}
?>
<?php
class Student_model extends CI_Model{
    public function add_student($first,$last,$age,$address){
   $data=array(
       'FirstName'=>$first,
       'LastName'=>$last,
       'Age'=>$age,
       'Address'=>$address
   );
   $query=$this->db->insert('students',$data);
   if($query){
       return true;
   }
   else{
       return false;
   }
    }
    public function delete_student($id){
        $this->db->where('ID',$id);
        $query= $this->db->delete('students');
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    public function get_students(){
        $this->db->select('*');
        $this->db->from('students');
        $query=$this->db->get();
        if($query->num_rows()>0){
            foreach($query->result() as $r){
           $data[]=$r;}
           return $data;
        }
        return false;
    }
    public function edit_student($id,$first,$last,$age,$address){
        $this->db->set('FirstName',$first);
        $this->db->set('LastName',$last);
        $this->db->set('Age',$age);
        $this->db->set('Address',$address);
        $this->db->where('ID',$id);
        $query=$this->db->update('students');
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    public function count_students(){
      $count=$this->db->count_all_results('students');
        return $count;
    }

}
?>
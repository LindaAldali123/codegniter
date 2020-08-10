<?php
class Product_model extends CI_Model{
   
    public function get_product(){
        $this->db->select('*');
        $this->db->from('product');
        $query=$this->db->get();
        if($query->num_rows()>0){
            foreach($query->result() as $r){
           $data[]=$r;}
           return $data;
        }
        return false;
    }
  public function count_product(){
    $count=$this->db->count_all_results('product');
    return $count;
  }
}
?>
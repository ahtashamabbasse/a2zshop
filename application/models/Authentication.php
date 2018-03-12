<?php
    class Authentication extends CI_Model
    {
        public function doLogin($post)
        {
            $q=$this->db->where($post)->get("admins");
            if($q->num_rows()==1)
            {
                return  $q->row()->admin_email;
            }
            else
            {
                return false;
            }
            
        }
        public function do_c_Login($post)
        {
            
            $q=$this->db->where($post)->get("customers");
            if($q->num_rows()==1)
            {
                return  $q->row();
            }
            else
            {
                return false;
            }
            
        }
        
    }
?>
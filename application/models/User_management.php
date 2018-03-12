<?php
    include_once('Authentication.php');
    class User_management extends Authentication
    {
        public function total_admin()
        {
            return $q=$this->db->count_all("admins");
        }
        public function total_customer()
        {
            return $q=$this->db->count_all("customers");
            
        }
        public function add_admin($data)
        {
            return $this->db->insert("admins",$data);
        }
        public function show_admin()
        {
            $q=$this->db->get("admins");
            return $result=$q->result();
             
        }
        public function remove_admin($admin_id)
        {
            return $this->db->delete("admins",["admin_id"=>$admin_id]);
        }
        public function edit_admin($admin_id)
        {
            $q=$this->db->where($admin_id)->get("admins");
            return $q->row();
        }
        
        public function update_admin($post,$admin_id)
        {
            return $result=$this->db->update("admins",$post,["admin_id"=>$admin_id]);
        }
        //Admin management end
        //Customer management start
        public function add_customer($data)
        {
            return $this->db->insert("customers",$data);
        }
        public function show_customer()
        {
            $q=$this->db->get("customers");
            return $result=$q->result();
             
        }
        public function remove_customer($c_id)
        {
            return $this->db->delete("customers",["c_id"=>$c_id]);
        }
        //customer management end//
        //settings of admin start
        public function checkpass($email,$pass)
        {
            $q=$this->db->where(["admin_email"=>$email,"admin_pass"=>$pass])->get("admins");
            return $q->row();
        }
        public function changepasss($email,$npass)
        {
            return $this->db->update("admins",$npass,$email);
        }
        //setting of admins end
        //settings of customer start
        public function c_checkpass($email,$pass)
        {
            $q=$this->db->where(["c_email"=>$email,"c_pass"=>$pass])->get("customers");
            return $q->row();
        }
        public function c_changepasss($email,$npass)
        {
            return $this->db->update("customers",$npass,$email);
        }
        public function edit_customer($c_email)
        {
            $q=$this->db->where($c_email)->get("customers");
            return $q->row();
        }
        
        public function update_customer($post,$c_id)
        {
            return $result=$this->db->update("customers",$post,["c_id"=>$c_id]);
        }
        
    }
?>
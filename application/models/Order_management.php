<?php
    include_once('Authentication.php');
    class Order_management extends Authentication
    {
        public function total_r_payments()
        {
            return $q=$this->db->count_all("payments");
        }
        public function total_pending_order()
        {
            $q=$this->db->query("SELECT COUNT(*) as total FROM orders WHERE status='In Progress'");
            return $q->row_array();
        }
        public function total_c_order()
        {
            $q=$this->db->query("SELECT COUNT(*) as total FROM orders WHERE status='Completed'");
            return $q->row_array();
        }
        public function total_pending_order_c($c_id)
        {
            $q=$this->db->query("SELECT COUNT(*) as total FROM orders WHERE status='In Progress' and c_id="."'".$c_id."'");
            return $q->row_array();
        }
        public function total_completed_order_c($c_id)
        {
            $q=$this->db->query("SELECT COUNT(*) as total FROM orders WHERE status='Completed' and  c_id=".$c_id);
            return $q->row_array();
        }
        public function add_cart($post)
        {
            return $this->db->insert("cart",$post);
        }
        public function showcart($post)
        {
            $this->db->select("*")
                 ->from('cart')
                 ->join('products','products.p_id = cart.cart_p_id','left');
        return  $this->db->get()->result();
        }
        public function checkout_update($data,$cart_p_id)
        {
           return  $this->db->update("cart",["cart_qty"=>$data],["cart_p_id"=>$cart_p_id]);
        }
        public function checkout_remove($post)
        {
           return  $this->db->delete("cart",$post);
        }
        public function completed_orderList()
        {
            $q= $this->db
                    ->join('products','products.p_id = orders.p_id','left')
                    ->join('customers','customers.c_id = orders.c_id','left')
                    ->where(["status"=>"Completed"])->get("orders");
            return $q->result();
        }
        public function pending_orderList()
        {
            $q= $this->db
                    ->join('products','products.p_id = orders.p_id','left')
                    ->join('customers','customers.c_id = orders.c_id','left')
                    ->where(["status"=>"In Progress"])->get("orders");
           return $results= $q->result();
             
        }
        public function completed_orderList_c($c_id)
        {
            $q= $this->db
                    ->join('products','products.p_id = orders.p_id','left')
                    ->join('customers','customers.c_id = orders.c_id','left')
                    ->where(["status"=>"Completed","orders.c_id"=>$c_id])->get("orders");
            return $q->result();
        }
        public function pending_orderList_c($c_id)
        {
            $q= $this->db
                    ->join('products','products.p_id = orders.p_id','left')
                    ->join('customers','customers.c_id = orders.c_id','left')
                    ->where(["status"=>"In Progress","orders.c_id"=>$c_id])->get("orders");
           return $results= $q->result();
             
        }
        public function complete_order($o_id)
        {
            $date=date("Y-m-d H:i:s");
            $data=$data." ".$time;
           return  $this->db->update("orders",["status"=>"Completed","o_c_date"=>$date],["o_id"=>$o_id]);
        }
        public function received_payments()
        {
            $q= $this->db
                    ->join('products','products.p_id = payments.p_id','left')
                    ->join('customers','customers.c_id = payments.c_id','left')
                    ->get("payments");
            return $q->result();
        }
        public function ipCart($data)
        {
            $q=$this->db->where(['cart_c_ip'=>$data])->get("cart");
            return $q->result();
        }
        public function lastinvoiceNo()
        {
            return $this->db->select('invoice_no')->order_by('o_id','desc')->limit(1)->get('orders')->row('invoice_no');
        }
        public function orderInsert($order)
        {
            return $this->db->insert("orders",$order);
        }
        public function deletecart($ip)
        {
            return $this->db->delete("cart",["cart_c_ip"=>$ip]);
        }
        public function invoiceDetails($v_no)
        {
            
                $q= $this->db
                    ->join('products','products.p_id =orders.p_id ','left')
                    ->join('customers','customers.c_id = orders.c_id','left')
                    ->where(['invoice_no'=>$v_no])
                    ->get("orders");
                return $q->result();
            
        }
        public function addPayment($post)
        {
            return $this->db->insert("payments",$post);
        }
    }
?>




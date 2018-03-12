<?php
    include_once('Authentication.php');
    class Inventory_management extends Authentication
    {
        public function total_products()
        {
            return $q=$this->db->count_all("products");
            
        }
        public function total_categories()
        {
            return $q=$this->db->count_all("cat");
            
        }
        public function total_brand()
        {
            return $q=$this->db->count_all("brand");
            
        }
        public function add_cat($post)
        {
            return $this->db->insert("cat",$post);
        }
        public function view_cat()
        {
            $q=$this->db->select("*")
                    ->get("cat");
            $result=$q->result();
            return $result;
        }
        public function remove_cat($cat_id)
        {
           return $this->db->delete("cat",$cat_id);
        }
        public function get_edit_cat_m($cat_id)
        {
           $q=$this->db->select("*")->where("cat_id",$cat_id)->get("cat");
           return $q->row();
                        
        }
        public function update_cat_m($cat_id,$cat_name)
        {
            $result=$this->db->update("cat",['cat_name'=>$cat_name],["cat_id"=>$cat_id]);
            return $result;
        }
        //Category Management End
        //Brand management start
        public function add_brand($post)
        {
            return $this->db->insert("brand",$post);
        }
        public function view_brand()
        {
            $q=$this->db->select("*")
                    ->get("brand");
            $result=$q->result();
            return $result;
        }
        public function remove_brand($brand_id)
        {
           return $this->db->delete("brand",$brand_id);
        }
        public function get_edit_brand($brand_id)
        {
           $q=$this->db->select("*")->where("brand_id",$brand_id)->get("brand");
           return $q->row();
        }
        public function update_brand($brand_id,$brand_name)
        {
            $result=$this->db->update("brand",['brand_name'=>$brand_name],["brand_id"=>$brand_id]);
            return $result;
        }
        //showCat
        public function showCat()
        {
            $q = $this->db->get('cat');
            return $q->result();
            
        }
        public function showbrand()
        {
            $q = $this->db->get('brand');
            return $q->result();
            
        }
        //Brand Management End
        //Product management start
        public function add_product($post)
        {
            return $this->db->insert("products",$post);
        }
        public function view_products()
        {
            $q=$this->db->select("*")->get("products");
            return $result=$q->result();
            
        }
        public function del_prdocut($p_id)
        {
            
            return $this->db->delete("products",["p_id"=>$p_id]);
    
        }
        public function edit_product($p_id)
        {
            $q=$this->db->select("*")->where($p_id)->get("products");
            return $q->row();
        }
        public function update_product($p_data,$p_id)
        {
            return $result=$this->db->update("products",$p_data,$p_id);
            
        }
        //get product for customer
        public function showproduct($type)
        {
            $q=$this->db->where(["p_cat"=>$type])->get("products");
            return $q->result();
        }
        public function getproduct($p_id)
        {
            $q=$this->db->where(["p_id"=>$p_id])->get("products");
            return $q->result();
        }
        public function Search_item($product)
        {
            $q=$this->db->like("p_keyword",$product, 'both')->get("products");
            return $q->result();
             
        }
        
        
    }
?>
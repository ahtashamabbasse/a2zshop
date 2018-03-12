<?php
	class Api extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function index()
        {
            
        }
        public function view_cats()
        {
            $this->load->model("inventory_management");
            $data=$this->inventory_management->view_cat();
            echo $data=json_encode($data);
        }
        public function view_brands()
        {
            $this->load->model("inventory_management");
            $data=$this->inventory_management->view_brand();
            echo $data=json_encode($data);
        }
        public function view_products()
        {
            $this->load->model("inventory_management");
            $data=$this->inventory_management->view_products();
            echo $data=json_encode($data);
        }
        
    }
 ?>
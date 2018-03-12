<?php
	class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('admin_email'))
            {
                return redirect("login");
            }
            $this->load->model("Order_management","om");
            $this->load->model("user_management","um");
            $this->load->model("inventory_management","im");
             
        }
        
        public function loggout()
        {
            $this->session->unset_userdata("admin_email");
            redirect("admin");
        }
        public function index()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $data["t_admins"]=$this->total_admin();
            $data["t_customers"]=$this->total_customer();
            $data["t_products"]=$this->total_products();
            $data["t_categories"]=$this->total_categories();
            $data["t_brands"]=$this->total_brand();
            $data["total_r_payments"]=$this->total_r_payments();
            $data["total_pending_order"]=$this->total_pending_order();
            $data["total_c_order"]=$this->total_c_order();
            $this->load->view("admin/dashboard",$data);
			$this->load->view("admin/include/footer");
        }
        
        public function total_admin()
        {
            
            return $this->um->total_admin(); 
        }
        public function total_customer()
        {
             
            return $this->um->total_customer(); 
        }
        public function total_products()
        {
            
            return $this->im->total_products(); 
        }
        public function total_categories()
        {
             
            return $this->im->total_categories(); 
        }
        public function total_brand()
        {
             
            return $this->im->total_brand(); 
        }
        public function total_r_payments()
        {
             
            return $this->om->total_r_payments(); 
        }
        public function total_pending_order()
        {
             
            return $this->om->total_pending_order(); 
        }
        public function total_c_order()
        {
             
            return $this->om->total_c_order(); 
        }
        
        public function category()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $this->load->view("admin/category"); 
            $this->load->view("admin/include/footer");   
        }
        public function view_cat()
        {
            $this->load->model("inventory_management");
            $data=$this->inventory_management->view_cat();
            echo $data=json_encode($data);
        }
        
        public function add_cat()
        {
            $post=$this->input->post();
             
            $this->im->add_cat($post);
        }
        public function get_edit_cat($cat_id)
        {
             
            $data=$this->im->get_edit_cat_m($cat_id);
            echo $data->cat_name;
        }
        public function update_cat()
        {
            $cat_id=$this->input->post("cat_id");
            $cat_name=$this->input->post("cat_name");
             
            $data=$this->im->update_cat_m($cat_id,$cat_name);
            if($data)
            {
                echo json_encode("done");
            }
            else
            {
                echo json_encode("failed");
            }
        }
        public function remove_cat()
        {
            $cat_id=$this->input->post();
            $this->load->model("inventory_management");
            $data=$this->inventory_management->remove_cat($cat_id);
        }
        //Category Management End
        //Brand management start

        public function brand()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $this->load->view("admin/brand");
            $this->load->view("admin/include/footer");   
        }
        public function add_brand()
        {
            $post=$this->input->post();
             
            $this->im->add_brand($post);
            
        }
        public function view_brand()
        {
            $this->load->model("inventory_management");
            $data=$this->inventory_management->view_brand();
            echo $data=json_encode($data);
        }
        public function remove_brand()
        {
            $brand_id=$this->input->post();
            $this->load->model("inventory_management");
            $data=$this->inventory_management->remove_brand($brand_id);
        }
        public function get_edit_brand($brand_id)
        {
             
            $data=$this->im->get_edit_brand($brand_id);
            echo $data->brand_name;
        }
        public function update_brand()
        {
            $brand_id=$this->input->post("brand_id");
            $brand_name=$this->input->post("brand_name");
             
            $data=$this->im->update_brand($brand_id,$brand_name);
            if($data)
            {
                echo json_encode("done");
            }
            else
            {
                echo json_encode("failed");
            }
        }
         
        //Brand management start
        //for dropdown
        public function showcat()
        {
             
            $categories=$this->im->showcat();
            return $categories;
        }
        public function showbrand()
        {
             
            return $brands=$this->im->showbrand();
            
        }
        //Product Management Start
        public function products()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $categories=$this->showcat();
            $brands=$this->showbrand();
            $products=$this->viewproducts();
            //$data=array_merge($categories,$brands);
            $data = array(
                        'categories' => $categories,
                        'brands' => $brands,
                        'products' => $products
                    );
            $this->load->view("admin/products",$data);
            $this->load->view("admin/include/footer");
            
        }
        
        public function add_product()
        {
            $post=$this->input->post();
            $config['upload_path']= './images/products';
            $config['allowed_types']='jpg|jpeg|png|';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('p_img'))
            {
                $msg=$this->upload->display_errors();
                $this->session->set_flashdata("msg",$msg);
                $this->session->set_flashdata("class","6");
                $this->session->set_flashdata("heading","ERROR");
                return redirect('admin/products');
            }
            $file_data=$this->upload->data();
            $post['p_img']=$file_data['file_name'];
            $insert=$this->im->add_product($post);
            if($insert)
            {
                $this->session->set_flashdata([
                    "msg"=>"Product Has Been Successfully Added",
                    "class"=>"5",
                    "heading"=>"Success"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Product Has Been Not Successfully Added",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/products");
        }
        public function viewproducts()
        {
            $this->load->model("inventory_management",'im');
            return $products=$this->im->view_products();
        }
        public function remove_product($p_id)
        {
            $del_product=$this->im->del_prdocut($p_id);
            if($del_product)
            {
                $this->session->set_flashdata([
                    "msg"=>"Product Has Been Successfully Deleted",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Product Has Been Not Successfully Deleted",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            return redirect("admin/products");
            
        }
        public function edit_product()
        {
            $post=$this->input->post();
             
            $data=$this->im->edit_product($post);
            echo json_encode($data);
        }
        public function update_product()
        {
            if(empty($_FILES['p_img']['name']))
            {
                $post=$this->input->post();
                $p_id['p_id']=$post['p_id'];
                unset($post['p_id']);
                 
                $data=$this->im->update_product($post,$p_id);
                if($data)
                {
                    $this->session->set_flashdata([
                        "msg"=>"Product Has Been Successfully Updated",
                        "class"=>"5",
                        "heading"=>"SUCCESS"
                        ]);
                }
                else
                {
                    $this->session->set_flashdata([
                        "msg"=>"Product Has Been Not Successfully Update",
                        "class"=>"6",
                        "heading"=>"ERROR"
                        ]);
                }
                return redirect("admin/products");
            }
            else if(!empty($_FILES['p_img']['name']))
            {
                $post=$this->input->post();
                 
                $config['upload_path']= './images/products';
                $config['allowed_types']='jpg|jpeg|png|';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('p_img'))
                {
                    $msg=$this->upload->display_errors();
                    $this->session->set_flashdata("msg",$msg);
                    $this->session->set_flashdata("class","6");
                    $this->session->set_flashdata("heading","ERROR");
                    return redirect('admin/products');
                }
                $file_data=$this->upload->data();
                $p_id['p_id']=$post['p_id'];
                unset($post['p_id']);
                $post['p_img']=$file_data['file_name'];
                 
                $data=$this->im->update_product($post,$p_id);
                if($data)
                {
                    $this->session->set_flashdata([
                        "msg"=>"Product Has Been Successfully Updated",
                        "class"=>"5",
                        "heading"=>"SUCCESS"
                        ]);
                }
                else
                {
                    $this->session->set_flashdata([
                        "msg"=>"Product Has Been Not Successfully Update",
                        "class"=>"6",
                        "heading"=>"ERROR"
                        ]);
                }
                return redirect("admin/products");
            } 
        }
        //Product Management End
		//User Management Start
			//admin management start
		public function admin_management()
		{
			$this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $admins["admins"]=$this->view_admins();
            $this->load->view("admin/admin_management",$admins);
			$this->load->view("admin/include/footer");
		}
        public function add_admin()
        {
            $post=$this->input->post();
             
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Admin_email', 'Email', 'is_unique[admins.admin_email]');
            if($this->form_validation->run() == FALSE)
            {
                $error=validation_errors("<div>","</div>");
                $this->session->set_flashdata([
                    "msg"=>$error,
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
                    print_r($error);
                return redirect("admin/admin_management");
            }
            $data=$this->um->add_admin($post);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Successfully Updated",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Not Successfully Update",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/admin_management");
        }
        public function view_admins()
        {
            $data=$this->um->show_admin();
            return $data;
        }
        public function remove_admin($admin_id)
        {
             
            $data=$this->um->remove_admin($admin_id);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Successfully Removed",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Not Successfully Removed",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/admin_management");
        }
        public function edit_admin()
        {
            $post=$this->input->post();
            $data=$this->um->edit_admin($post);
            echo json_encode($data);
        }
        public function update_admin()
        {
            $post=$this->input->post();
            $admin_id=$post['admin_id'];
            unset($post['admin_id']);
            
             
            $data=$this->um->update_admin($post,$admin_id);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Successfully Updated",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Admin Has Been Not Successfully Update",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/admin_management");
            
        }
            //admin management End
            //customer management start
        public function customer_management()
		{
			$this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $customers['customers']=$this->view_customer();
            $this->load->view("admin/customer_management",$customers);
			$this->load->view("admin/include/footer");
		}
        public function add_customer()
        {
            $post=$this->input->post();
             
            $this->load->library('form_validation');
            $this->form_validation->set_rules('c_email', 'Email', 'is_unique[customers.c_email]');
            if($this->form_validation->run() == FALSE)
            {
                $error=validation_errors("<div>","</div>");
                $this->session->set_flashdata([
                    "msg"=>$error,
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
                    print_r($error);
                return redirect("admin/customer_management");
            }
            $data=$this->um->add_customer($post);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Successfully Updated",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Not Successfully Update",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/customer_management");
        }
        public function view_customer()
        {
             
            $data=$this->um->show_customer();
            return $data;
        }
        public function remove_customer($c_id)
        {
             
            $data=$this->um->remove_customer($c_id);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Successfully Removed",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Not Successfully Removed",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/customer_management");
        } 
            //customer management end
        //user managment en
        public function settings()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $this->load->view("admin/settings");
			$this->load->view("admin/include/footer");
        }
        public function changepass()
        {
            $semail= $this->session->userdata("admin_email");
            $post=$this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('npass', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|min_length[6]|matches[npass]');
            if ($this->form_validation->run() == FALSE)
            {
                    $this->session->set_flashdata([
                    "msg"=>validation_errors(),
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
                    return redirect("admin/settings");
            }
            $opass=$post['opass'];
             
            $data=$this->um->checkpass($semail,$opass);
            if(!$data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Password Do Not Match With Old Password",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
                    return redirect("admin/settings");
            }
            $npass['admin_pass']=$post['npass'];
            $email['admin_email']=$semail;
            $data=$this->um->changepasss($email,$npass);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Password Successfully Changed",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
                    return redirect("admin/settings");
            }
            
        }
        public function completed_orders()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
             
            $data['orders']=$this->om->completed_orderList();
            $this->load->view("admin/completed_order",$data);
			$this->load->view("admin/include/footer");
        }
        public function pending_orders()
        {
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
             
            $data['orders']=$this->om->pending_orderList();
            $this->load->view("admin/pending_order",$data);
			$this->load->view("admin/include/footer");
        }
        public function received_payments()
        {
            $data['customers']=$this->um->show_customer();
            $data['products']=$this->viewproducts();
            $data['orders']=$this->om->pending_orderList();
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
             
            $data['payments']=$this->om->received_payments();
            $this->load->view("admin/payments",$data);
			$this->load->view("admin/include/footer");
        }
        public function complete_order($o_id)
        {
             
            $data=$this->om->complete_order($o_id);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Order Has Been Successfully Completed",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Not Successfully Completed",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/pending_orders");
        }
        public function invoice($v_no)
        {
            $data['orders']=$this->om->invoiceDetails($v_no);
            
            $this->load->view("admin/include/header");
			$this->load->view("admin/include/sidebar");
            $this->load->view("admin/invoice",$data);
            $this->load->view("admin/include/footer");  
            
        }
        public function addpayment()
        {
            $Post=$this->input->post();
            
            $data=$this->om->addPayment($Post);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Order Has Been Successfully Completed",
                    "class"=>"5",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Customer Has Been Not Successfully Completed",
                    "class"=>"6",
                    "heading"=>"ERROR"
                    ]);
            }
            redirect("admin/received_payments");
        }
        
    }
?>
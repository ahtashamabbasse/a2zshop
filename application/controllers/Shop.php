<?php
	class Shop extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("order_management","om");
            $this->load->model("inventory_management","im");
            $this->load->model("user_management","um");
        }
        public function showHeader()
        {
            $categories=$this->showcat();
            $laptops=$this->showproduct("Laptops");
            $women=$this->showproduct("women");
            $men=$this->showproduct("men");
            $mobiles=$this->showproduct("mobiles");
            //$carts=json_encode($this->showcart());
            $data = array(
                        'categories' => $categories,
                        'laptops' => $laptops,
                        'women' => $women,
                        'men' => $men,
                        'mobiles' => $mobiles
                        //"carts"=>$carts
                    );
            $this->load->view("user/include/header",$data);
        }
        public function index()
        {
            $this->showHeader();
            $this->load->view("user/index");
            $this->load->view("user/include/footer");
        }
        public function home()
        {
            $this->showHeader();
            $this->load->view("user/index");
            $this->load->view("user/include/footer");
        }
        public function login()
        {
                $this->showHeader();
                $this->load->view("user/login");
                $this->load->view("user/include/footer");
        }
        public function checkout()
        {
            $this->showHeader();
            $this->load->view("user/checkout");
            $this->load->view("user/include/footer");
        }
        public function contact()
        {
            $this->showHeader();
            $this->load->view("user/contact");
            $this->load->view("user/include/footer");
        }
        public function about()
        {
            $this->showHeader();
            $this->load->view("user/about");
            $this->load->view("user/include/footer");
        }
        public function search()
        {
            $this->showHeader();
            $post=$this->input->get('search');
            $data['products']=$this->im->Search_item($post);
            $this->load->view("user/search",$data);
            $this->load->view("user/include/footer");
        }
        //for dropdown
        public function showcat()
        {
            
            $categories=$this->im->showcat();
            return $categories;
        }
        public function showproduct($type)
        {
            
            return $brands=$this->im->showproduct($type);
            
        }
        public function add_cart()
        {
            $post=$this->input->post();
            $post['cart_c_ip'] = $this->input->ip_address();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('cart_p_id', 'Product', 'is_unique[cart.cart_p_id]');
            if($this->form_validation->run() == FALSE)
            {
                $error=validation_errors("<div>","</div>");
                echo json_encode($error);
                return false;
            }
            
            $data=$this->om->add_cart($post);
            echo json_encode($data);
            
        }
        public function showcart()
        {
            $post['cart_c_ip'] = $this->input->ip_address();
            
            $data =$this->om->showcart($post);
            echo json_encode($data);
        }
        public function checkout_update()
        {
            $post=$this->input->post();
            $cart_p_id=$post['cart_p_id'];
            $data=$post['cart_qty'];
            
            $data=$this->om->checkout_update($data,$cart_p_id);
            if($data)
            {
                echo json_encode("done");
            }
            else
            {
                echo json_encode("fail");
            }
            
        }
        public function checkout_remove()
        {
            $post=$this->input->post();
            
            $data=$this->om->checkout_remove($post);
            if($data)
            {
                echo json_encode("done");
            }
            else
            {
                echo json_encode("fail");
            }
            
        }
        public function register()
        {
            $post=$this->input->post();
            $post['c_date']=date("Y-m-d");
            $this->load->library('form_validation');
            $this->form_validation->set_rules('c_email', 'Email', 'is_unique[customers.c_email]');
            $this->form_validation->set_rules('c_pass', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('c_cpass', 'Confirm Password', 'required|matches[c_pass]');
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata([
                    "msg"=>"Email Address is already Exist",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                return redirect("shop/login");
            }
            unset($post['c_cpass']);
            
            $data=$this->um->add_customer($post);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Confirmation Code Sent to Your Email ",
                    "class"=>"success",
                    "heading"=>"SUCCESS"
                    ]);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Please Try Again",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
            }
            return redirect("shop/login");
        }
        public function product($p_cat,$p_id)
        {
            $this->showHeader();
            
            $data['products']=$this->im->getproduct($p_id);
            $data['releted_prodcuts']=$this->showproduct($p_cat);
            $this->load->view("user/details",$data);
            $this->load->view("user/include/footer");
        }
        public function changepass()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $email= $this->session->userdata("c_email");
            $post=$this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('npass', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[npass]');
            if ($this->form_validation->run() == FALSE)
            {
                    $this->session->set_flashdata([
                    "msg"=>validation_errors(),
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                    return redirect("shop/profile");
            }
            $opass=$post['opass'];
            
            $data=$this->um->c_checkpass($semail,$opass);
            if(!$data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Password Do Not Match With Old Password",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                    return redirect("shop/profile");
            }
            $npass['c_pass']=$post['npass'];
            $email['c_email']=$semail;
            $data=$this->um->c_changepasss($email,$npass);
            if($data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Password Successfully Changed",
                    "class"=>"success",
                    "heading"=>"SUCCESS"
                    ]);
                    return redirect("shop/profile");
            }
            
        }
        public function edit_customer()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $semail['c_email']= $this->session->userdata("c_email");
            return $data=$this->um->edit_customer($semail);
            
        }
        public function edit_profile()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $post=$this->input->post();
            $c_id=$post['c_id'];
            $data=$this->um->update_customer($post,$c_id);
            if($data)
            {
               $this->session->set_userdata("c_email",$post['c_email']);
                $this->session->set_flashdata([
                    "msg"=>"Profile Has Been Successfully Updated",
                    "class"=>"success",
                    "heading"=>"SUCCESS"
                    ]);
                    return redirect("shop/profile");
            }
            else if(!$data)
            {
                $this->session->set_flashdata([
                    "msg"=>"Please, Try Again Profile Do Not Update",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                    return redirect("shop/profile");
            }
        }
        public function profile()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $this->showHeader();
            $data['c']=$this->edit_customer();
            $c_id=$this->session->userdata("c_id");
            $data['p_o']=$this->om->total_pending_order_c($c_id);
            $data['c_o']=$this->om->total_completed_order_c($c_id);
            $this->load->view("user/profile",$data);
            $this->load->view("user/include/footer");
        }
        public function payment()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $this->showHeader();
            $post['cart_c_ip'] = $this->input->ip_address();
            
            $data['products'] =$this->om->showcart($post);
            $this->load->view("user/payment",$data);
            $this->load->view("user/include/footer");
        }
        public function payment_success()
        {
            $this->showHeader();
            $data['tx']=$this->input->get("tx");
            $data['st']=$this->input->get("st");
            $data['amt']=$this->input->get("amt");
            $data['cm']=$this->input->get("cm");
            print_r($data);
            //$data =$this->om->orderInsert($data);
            $this->load->view("user/success");
            $this->load->view("user/include/footer");
        }
        public function payment_cancel()
        {
            $this->showHeader();
            $this->load->view("user/cancel");
            $this->load->view("user/include/footer");
        }
        public function lastinvoiceNo()
        {
            
           return $this->om->lastinvoiceNo();
        }
        public function placeOrder()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $ip=$this->input->ip_address();
            $carts=$this->om->ipCart($ip);
            $invoice_no=$this->lastinvoiceNo();
            $invoice_no++;            
            foreach($carts as $data)
            {
                
                $order['p_id']=$data->cart_p_id;
                $order['c_id']=$_SESSION['c_id'];
                $order['qty']=$data->cart_qty;
                $order['o_no']=$order['invoice_no']=$invoice_no;
                $data=$this->om->orderInsert($order);
            }
            
            //$data=$this->om->orderInsert($order);
            $delete=$this->om->deletecart($ip);
            if($delete==1 and $data==1)
            {
                $this->session->set_flashdata([
                    "msg"=>"Your Order Has Been Placed",
                    "class"=>"success",
                    "heading"=>"SUCCESS"
                    ]);
                    redirect("shop/invoice/".$order['invoice_no']);
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Your Order Has Been not Placed",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                    redirect("shop/checkout");
            }
        }
        public function invoice($v_no)
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $data['orders']=$this->om->invoiceDetails($v_no);
            $this->showHeader();
            $this->load->view("user/invoice",$data);
            $this->load->view("user/include/footer");
        }
        public function logout()
        {
            $this->session->unset_userdata("c_email");
            $this->session->unset_userdata("last_page");
            redirect("shop/home");
        }
        public function completed_orders()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $data['c']=$this->edit_customer();
            $c_id=$this->session->userdata("c_id");
            $data['orders']=$this->om->completed_orderList_c($c_id);
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $this->showHeader();
            
            $this->load->view("user/completed",$data);
            $this->load->view("user/include/footer");
        }
        public function pending_orders()
        {
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $data['c']=$this->edit_customer();
            $c_id=$this->session->userdata("c_id");
            $data['orders']=$this->om->pending_orderList_c($c_id);
            if(!$this->session->userdata('c_email'))
            {
                $this->session->set_userdata('last_page', current_url());
                return redirect("shop/login");
            }
            $this->showHeader();
            $this->load->view("user/pending",$data);
            $this->load->view("user/include/footer");
        }
         
    }
?>
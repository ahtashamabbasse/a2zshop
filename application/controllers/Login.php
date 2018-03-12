<?php 
class Login extends CI_Controller
{
    public function __construct()
        {
            parent::__construct();
            if($this->session->userdata('admin_email'))
            {
                return redirect("admin");
            }
        }
        public function index()
        {
            $this->load->view("admin/login"); 
        }
        //admin login
        public function doLogin()
        {
            $post=$this->input->post();
            $this->load->model("Authentication","au");
            echo $data=$this->au->doLogin($post);
            if($data)
            {
                $this->session->userdata("c_email");
                $this->session->set_userdata("admin_email",$data);
                return redirect("admin");
            }
            else
            {
                $this->session->set_flashdata("failed","Email and Password is not correct");
                return redirect("login");
            }
         
        }
        //customer login
        public function do_c_Login()
        {
            $post=$this->input->post();
            $this->load->model("Authentication","au");
            $data=$this->au->do_c_Login($post);
            if($data)
            {
                $this->session->userdata("admin_email");
                $c_email=$data->c_email;
                $c_id=$data->c_id;
                $this->session->set_userdata("c_email",$c_email);
                $this->session->set_userdata("c_id",$c_id);
                //return redirect("shop/profile");
                if($this->session->userdata("last_page"))
                {
                    return redirect($this->session->userdata("last_page"));
                }
                return redirect("shop/profile"); 
            }
            else
            {
                $this->session->set_flashdata([
                    "msg"=>"Email and Password do match",
                    "class"=>"danger",
                    "heading"=>"ERROR"
                    ]);
                return redirect("shop/login");
            }
         
        }
}


?>
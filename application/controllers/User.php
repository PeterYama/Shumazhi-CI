<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    //$this->load->library('form_validation');
        $this->load->model('userModel', 'register_u'); 
	// $this->load->database();
	// $this->load->helper('url');
    }

    public function register()
    {
        //action when register clicked
        if (isset($_POST['register']))
        {
            $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('company_name', 'Company Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('password', 'Password', 'required'); 
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            
		    //if form validation true
            if ($this->form_validation->run() == TRUE) {
               // echo"here";
                $data=array(
                    'first_name'=>$this->input->post('first_name'),
                    // echo $_POST['first_name'];
                    'last_name'=>$this->input->post('last_name'),
                    'company_name'=>$this->input->post('company_name'),
                    'email'=>$this->input->post('email'),
                    'password'=>md5($this->input->post('password')),
                    'phone'=>$this->input->post('phone')
                );
                // print_r($data);
                // echo $_POST['first_name'];
                $insert = $this->register_u->register_user($data);
                $this->session->set_flashdata('msg', 'Registration successful!'); 
                redirect(base_url() . 'login'); 

            }else{ 
                $this->session->set_flashdata('errors', validation_errors());
                redirect(base_url() . 'home');
                //$data['error_msg'] = 'Please fill all the mandatory fields.'; 
            }
        }  
    }

    public function login(){
        if (isset($_POST['login'])) 
        {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == TRUE)
            {

                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));

                $this->session->set_flashdata('msg', 'AWELCOME!'); 
                redirect(base_url() . 'home');                
            }
            else{ 
                $this->session->set_flashdata('errors', validation_errors());
                redirect(base_url() . 'login');
            }            

        } 
    }
}

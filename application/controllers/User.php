<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
  function __Construct(){
        parent::__Construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('user_model');
        $this->load->model('Medicines_model');
    }
  public function register()
  {
        $this->load->view('registration');
  }
  public function registration()
  {
    //validate input value with form validation class of codeigniter
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirmpswd', 'Password Confirmation', 'required|matches[password]');
        //$this->form_validation->set_message('is_unique', 'This %s is already exits');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registration');
        }
        else
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passhash = hash('md5', $password);

            //md5 hashing algorithm to decode and encode input password
            //$salt       = uniqid(rand(10,10000000),true);
      $saltid     = md5($email);
      $status     = 0;
      $data = array('fname' => $fname,
              'lname' => $lname,
              'email' => $email,
              'password' => $passhash,
              'status' => $status,
              'description' => '');
      $this->user_model->insertuser($data);
      $this->load->view('login');
        }
  }

    public function login()
    {
        $this->load->view('login');
    }
    public function check_login()
        {
        $email = $_POST['email'];
        $pass = hash('md5', $_POST['password']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $res = $this->user_model->check_user($email , $pass);
            if(!empty($res))
            {
                    $data['user'] = $res[0]['fname'];
                    $data['id'] = $res[0]['id'];
                    $this->setSession($res[0]['id'],$res[0]['fname']);
                    $this->load->view('profile', $data);
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">email/password not found</div>');
            redirect(base_url().'index.php/user/login');
            }
        }
      }
      function setSession($userId,$userName) {

          $userSession = array('userId'=>$userId,
                               'userName'=>$userName,
                               'loggedIn'=>TRUE );
          $this->session->set_userdata($userSession);
      }
      function logout(){
          $this->session->sess_destroy();
          redirect(base_url().'index.php/user/login', 'refresh');
      }
}

<?php  
if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $this -> front_page();
    }

    public function front_page(){
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    
    //Individual pages Controller methods
    public function members(){
        if($this->session->userdata('is_logged_in')){
            $this->load->view('pages/members'); 
        } else {
            redirect('login/restricted');
        }   
    }
    
    
    
}
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    public function index()
    {
        $this->register();
    }
    
    public function register(){
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }
    
    public function register_validation(){
        $this->load->library('form_validation');
        
        //Valideer de ingevulde gegevens
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
        $this->form_validation->set_rules('achternaam', 'Achternaam', 'required');
        $this->form_validation->set_rules('mail', 'Email', 'required|trim|valid_email|is_unique[users.mail]');
        $this->form_validation->set_rules('password', 'Wachtwoord', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Bevestig Wachtwoord', 'required|trim|matches[password]');
        $this->form_validation->set_rules('geslacht', 'Geslacht', 'required');
        $this->form_validation->set_rules('date', 'Geboortedatum', 'required|trim|callback_valid_date|callback_valid_age');
        $this->form_validation->set_rules('ges_voorkeur', 'Geslachtsvoorkeur');
        $this->form_validation->set_rules('beschrijving', 'Beschrijving', 'trim');
        $this->form_validation->set_rules('leef_voorkeur', 'Leeftijdsvoorkeur');
        
        //Message als een bepaalde field niet correct is ingevuld
        $this->form_validation->set_message('is_unique', 'Deze e-mailadres en/of username bestaan al');
        $this->form_validation->set_message('valid_mail', 'Dit is geen geldig emailadres');
        $this->form_validation->set_message('alpha_dash_space', 'Dat is geen geldige naam');
        $this->form_validation->set_message('valid_date', 'Dat is geen geldige datum');
        $this->form_validation->set_message('valid_age', 'U bent niet ouder dan 18');
        
        if($this->form_validation->run()){
            if($this->add_user()){
                $this->load->view('templates/header');
                $this->load->view('pages/members');
                $this->load->view('templates/footer');
            } else {
                $this->load->view('templates/header');
                echo "There was an error registrating you, please try again";
                $this->load->view('pages/register');
                $this->load->view('templates/footer');
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('pages/register');
            $this->load->view('templates/footer');
        }
    }
    
    //Check voor characters die buiten de regexp vallen zo ja return false
    function alpha_dash_space($str) {
        return (!preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
    }
    
    //Check of het een geldige geboortedatum is
    function valid_date($str) {
        return (!preg_match("~^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$~", $str)) ? FALSE : TRUE;
    }
    
    //Check of de persoon 18+ is
    function valid_age($str) {
        list($d, $m, $y) = explode('/', $str);

        if (($m = (date('m') - $m)) < 0) {
            $y++;
        } elseif ($m == 0 && date('d') - $d < 0) {
            $y++;
        }
        if (date('Y') - $y < 18) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    //Bepaal leeftijd van geboorte datum
    public function age_from_date($date) {
        if ($this -> input -> post('date') != null) {
            list($d, $m, $y) = explode('/', $date);

            if (($m = (date('m') - $m)) < 0) {
                $y++;
            } elseif ($m == 0 && date('d') - $d < 0) {
                $y++;
            }

            return date('Y') - $y;
        } else {
        }
    }
    
    public function add_user(){
        $data = array(
            'username' => $this->input->post('username'),
            'voornaam' => $this->input->post('voornaam'),
            'achternaam' => $this->input->post('achternaam'),
            'mail' => $this->input->post('mail'),
            'password' => md5($this->input->post('password')),
            'geslacht' => $this->input->post('geslacht'),
            'geb_datum' => $this->age_from_date($this->input->post('date')),
            'geslacht_voorkeur' => $this->input->post('ges_voorkeur'),
            'beschrijving' => $this->input->post('beschrijving'),
            'leeftijd_voorkeur' => $this->input->post('leef_voorkeur')
        );
        
        
        if($this->db->insert('users', $data)){
            return true;
        } else {
            return false;
        };
    }
    
}
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('mi_helper');
		$this->load->model('General_model');
		$this->load->library('session');
	}

	public function index()
	{
        $this->load->view('Login/login_view');
    }
    public function login(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');
		$usuarios = $this->General_model->get('usuarios', array('email'=>$email), array(), '');
		if ($usuarios!=false) {
			$usuario = $usuarios->row(0);
			if ($usuario->email == $email && $usuario->password == $password) {
                if($usuario->tipo == "Administrador"){
                    redirect(base_url('admin_menu'));
                }else{
                    if($usuario->tipo == "Corralonero"){
                        redirect(base_url('corraloneros_menu'));
                    }
                }
			}
			else{
				redirect(base_url('login'));		
			}
		}
		else{
			redirect(base_url('login'));	
		}
    }
}
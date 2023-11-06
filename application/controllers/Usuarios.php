<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
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
		/*Aqui va el contenido*/
		$this->load->view('Usuarios/usuarios_view');
	}
}
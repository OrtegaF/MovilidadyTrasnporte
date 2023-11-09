<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('Home/home_prueba_view');
    }

	public function usuarios(){

		$matricula= $this->input->post('matricula');
		$arrastres= $this->General_model->get('arrastres_admin', array('matricula'=>$matricula), array(), '');
		$arrastre = ($arrastres!=false)? $arrastres->row(0) : false;
		//var_dump($arrastre);

		$data= array(
			'arrastre'  => $arrastre,
		);

		$this->load->view('Usuarios/usuarios_view', $data);
		
	}

	/*public function busca_matricula(){

		$matricula= $this->input->post('matricula');
		$arrastres= $this->General_model->get('arrastres_admin', array('matricula'=>$matricula), array(), '');
		$arrastre = ($arrastres!=false)? $arrastres->row(0) : false;
		var_dump($arrastre);

		$data= array(
			'arrastre'  => $arrastre,
		);
		//$this->load->view('Usuarios/usuarios_view');
		
	}*/
}
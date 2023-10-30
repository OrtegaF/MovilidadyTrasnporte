<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Corraloneros extends CI_Controller {

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
		//consultas
		$gruas= $this->General_model->get('gruas', array(), array(), '');

		$data= array(
			'gruas'  => $gruas,
		);

		$this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		//$this->load->view('Corraloneros/corraloneros_view');
		//$this->load->view('Corraloneros/corraloneros_addGruas_view', $data);
		$this->load->view('Corraloneros/corraloneros_addArrastres_view');

		$this->load->view('Corraloneros/gruas_datatable_view');
		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
	}

	public function addGruas()
	{
		$gruas= $this->General_model->get('gruas', array(), array(), '');

		$data= array(
			'gruas'  => $gruas,
		);
		$this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Corraloneros/corraloneros_addGruas_view', $data);

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		$this->load->view('Corraloneros/gruas_datatable_view');
	}
	public function insertGruas(){
		$tipo= $this->input->post('tipo');
		$matricula= $this->input->post('matricula');
		$n_motor= $this->input->post('n_motor');
		$kg_max= $this->input->post('kg_max');
		$marca= $this->input->post('marca');
		$modelo= $this->input->post('modelo');

		$data = array(
			'tipo' 		=> $tipo,
			'matricula' => $matricula,
			'n_motor' 	=> $n_motor,
			'kg_max' 	=> $kg_max,
			'marca' 	=> $marca,
			'modelo' 	=> $modelo,
		);

		$this->General_model->set('gruas', $data);
		redirect(base_url('Corraloneros'));
	}

	public function addArrastres()
	{
		$this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Corraloneros/corraloneros_addArrastres_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
	}

	public function insertArrastre(){
		$data = array(
			'lugar' => $this->input->post('lugar'),
			'colonia' => $this->input->post('colonia'),
			'municipio' => $this->input->post('municipio'),
			'folio' => $this->input->post('folio'),
			'codigo_p' => $this->input->post('codigo_p'),
			'region' => $this->input->post('region'),
			'almacen' => $this->input->post('almacen'),
			'contacto' => $this->input->post('contacto'),
			'ubicacion_a' => $this->input->post('ubicacion_a'),
			'telefono' => $this->input->post('telefono'),
		);
		$this->General_model->set('arrastres', $data);
		redirect(base_url('Corraloneros'));
	}
}
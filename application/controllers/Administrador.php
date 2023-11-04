<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

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
        $this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Administrador/administrador_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
    }

	public function adminUsuarios()
	{
		//consultas
		$usuarios = $this->General_model->get('usuarios', array(), array(), '');
		$data = array (
			'usuarios' => $usuarios,
		);

        $this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Administrador/admin_usuarios_view', $data);

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		$this->load->view('Administrador/usuarios_datatable_view');
    }

	public function insertUsuarios(){
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'nombre' => $this->input->post('nombre'),
			'a_paterno' => $this->input->post('a_paterno'),
			'a_materno' => $this->input->post('a_materno'),
			'tipo' => $this->input->post('tipo'),
		);
		$insertar = $this->General_model->set('usuarios', $data);
		redirect(base_url('admin_addUsers'));
	}

	public function adminCorralones()
	{
		//consultas
		$corralones = $this->General_model->get('corralones', array(), array(), '');

		$data = array(
			'corralones' => $corralones,
		);

        $this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Administrador/admin_corralones_view', $data);

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		$this->load->view('Administrador/corralones_datatable_view');
    }

	public function insertCorralones(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'propietario' => $this->input->post('propietario'),
			'zona' => $this->input->post('zona'),
			'calle' => $this->input->post('calle'),
			'colonia' => $this->input->post('colonia'),
			'municipio' => $this->input->post('municipio'),
			'longitud' => $this->input->post('longitud'),
			'latitud'  => $this->input->post('latitud'),
		);
		$insertar = $this->General_model->set('corralones', $data);
		redirect(base_url('admin_addCrane'));
	}

	public function mostrar_map()
	{
		//consultas
		$arrastres = $this->General_model->get('arrastres', array(). array(), '');

		$data= array(
			'arrastres' => $arrastres,
		);

		$this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');


		/*Aqui va el contenido*/
		$this->load->view('Administrador/administrador_mostrarmap_view');
		
		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		
		$this->load->view('Administrador/mapa_js_view');

	}
}
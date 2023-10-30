<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function index()
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
		//$this->load->view('Administrador/administrador_view');
		//$this->load->view('Administrador/admin_usuarios_view');
		$this->load->view('Administrador/admin_corralones_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
    }

	public function adminUsuarios()
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
		$this->load->view('Administrador/admin_usuarios_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
    }

	public function adminCorralones()
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
		$this->load->view('Administrador/admin_corralones_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
    }
}
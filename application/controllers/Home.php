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
        $this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_home_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Home/home_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
    }
}
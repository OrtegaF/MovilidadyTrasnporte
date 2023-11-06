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
		$this->load->view('Administrador/admin_usuarios_js_view');
		$this->load->view('Administrador/admin_usuarios_modal_view');
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

	public function borrar_usuario()
	{
		$id_usuario = $this->uri->segment(2);
		//echo $id_taller;
		$valores = array(
			'id_usuario'	=>	$id_usuario,
		);
		$this->General_model->delete('usuarios', $valores);
		redirect(base_url('admin_addUsers'));
	}

	public function recupera_usuario()
	{
		$id = $this->input->post('id_usuario');
		$usuarios = $this->General_model->get('usuarios', array('id_usuario'=>$id), array(), '');
		$usuario = ($usuarios!=false)? $usuarios->row(0) : false;
		echo json_encode($usuario);
	}

	public function actualiza_usuario()
	{
		$id= $this->input->post('id');
		$valores = array(
			'email'			=>	$this->input->post('email'),
			'password'		=>	$this->input->post('password'),
			'nombre'		=>	$this->input->post('nombre'),
			'a_paterno'		=>	$this->input->post('a_paterno'),
			'a_materno'		=>	$this->input->post('a_materno'),
			'tipo'			=>	$this->input->post('tipo'),
		);
		$this->General_model->update('usuarios', array('id_usuario'=>$id), $valores);
	}

	public function adminCorralones()
	{
		//consultas
		$almacenes = $this->General_model->get('almecenes', array(), array(), '');
		$zonas= $this->General_model->get('zonas', array(), array(), '');
		$dias = $this->General_model->get('dias', array(), array(), '');

		$data = array(
			'almacenes' => $almacenes,
			'zonas' => $zonas,
			'dias' => $dias,
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
		$this->load->view('Administrador/admin_corralon_js_view');
		$this->load->view('Administrador/admin_corralon_modal_view');
		$this->load->view('Administrador/corralones_datatable_view');
    }

	public function insertCorralones(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'propietario' => $this->input->post('propietario'),
			'id_zona' => $this->input->post('zona'),
			'direccion' => $this->input->post('direccion'),
			'contacto' => $this->input->post('contacto'),
			'telefono' => $this->input->post('telefono'),
			'longitud' => $this->input->post('longitud'),
			'latitud'  => $this->input->post('latitud'),
			'id_dia'  => $this->input->post('dia'),
		);
		$insertar = $this->General_model->set('almecenes', $data);
		redirect(base_url('admin_addCrane'));
	}

	public function borrar_corralon()
	{
		$id_almacen = $this->uri->segment(2);
		//echo $id_taller;
		$valores = array(
			'id_almacen'	=>	$id_almacen,
		);
		//$this->General_model->delete('almecenes', $valores);
		redirect(base_url('admin_addCrane'));
	}

	public function recupera_corralon()
	{
		$id = $this->input->post('id_almacen');
		$almacenes = $this->General_model->get('almecenes', array('id_almacen'=>$id), array(), '');
		$almacen = ($almacenes!=false)? $almacenes->row(0) : false;
		echo json_encode($almacen);
	}

	public function actualiza_corralon()
	{
		$id= $this->input->post('id');
		$valores = array(
			'nombre'			=>	$this->input->post('nombre'),
			'propietario'		=>	$this->input->post('propietario'),
			'telefono'		=>	$this->input->post('telefono'),
			'contacto'		=>	$this->input->post('contacto'),
		);
		$this->General_model->update('almecenes', array('id_almacen'=>$id), $valores);
	}


	public function adminRutas()
	{
		//consultas
		

        $this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Administrador/admin_rutas_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		$this->load->view('Administrador/corralones_datatable_view');
		$this->load->view('Administrador/admin_rutas_js_view');
    }

	public function buscaDatos(){
		$codigo = $this->input->post('codigo');
		$datos = $this->General_model->get('codigo_postal', array('codigo_postal' => $codigo), array(), '');
		$zonas = $this->General_model->get('zonas', array(), array(), '');
		$municipios = $this->General_model->get('municipios', array(), array(), '');
		$data = array(
			'datos' => $datos,
			'zonas' => $zonas,
			'municipios' => $municipios,
		);
		$this->load->view('Administrador/municipios_view', $data);
	}
	public function llenadoDatos(){
		$codigo = $this->input->post('codigo');
		$municipio = $this->input->post('municipio');
		$id_dia='';
		$dia=date(l);
		if($dia=='Monday'){
			$id_dia = 1;
		}else{
			if($dia=='Tuesday'){
				$id_dia = 2;
			}else{
				if($dia=='Wednesday'){
					$id_dia = 3;
				}else{
					if($dia=='Thursday'){
						$id_dia = 4;
					}else{
						if($dia=='Friday'){
							$id_dia = 5;
						}else{
							if($dia=='Saturday'){
								$id_dia = 6;
							}else{
								$id_dia = 7;
							}
						}
					}
				}
			}
		}
		$region='';
		$datos = $this->General_model->get('codigo_postal', array('codigo_postal' => $codigo), array(), '');
		$municipios = $this->General_model->get('municipios', array('id_municipio'=> $municipio), array(), '');
		if($municipios!=false){
			foreach ($municipios->result() as $muni) {
				$region=$muni->id_zona;
			}
		}
		$zonas= $this->General_model->get('zonas', array('id_zona'=>$region), array(), '');
		$almacenes= $this->General_model->get('almecenes', array('id_zona'=>$region, 'id_dia' => $id_dia), array(), '');
		$dias = $this->General_model->get('dias', array(), array(), '');
		$data = array(
			'datos' 		=> $datos,
			'municipios' 	=> $municipios,
			'almacenes' 	=> $almacenes,
			'dias' 			=> $dias,
			'zonas'			=> $zonas,
		);
		//var_dump($data);
		$this->load->view('Administrador/datos_view', $data);
	}
	
	public function mostrar_map()
	{
		//extraemos la informacion de los input del usuario 
		$codigo = $this->input->post('codigo');
		$municipio = $this->input->post('municipio');
		$n_municipios = $this->General_model->get('municipios', array('id_municipio'=>$municipio), array(), '');
		$n_municipio = ($n_municipios!=false)? $n_municipios->row(0) : false;
		$nom_m = $n_municipio->cabecera;
		$direccion1 = $this->input->post('direccion1');

		//recuperar la informacion de los input de la asignacion de almacen
		$id_dia='';
		$dia=date(l);
		if($dia=='Monday'){
			$id_dia = 1;
		}else{
			if($dia=='Tuesday'){
				$id_dia = 2;
			}else{
				if($dia=='Wednesday'){
					$id_dia = 3;
				}else{
					if($dia=='Thursday'){
						$id_dia = 4;
					}else{
						if($dia=='Friday'){
							$id_dia = 5;
						}else{
							if($dia=='Saturday'){
								$id_dia = 6;
							}else{
								$id_dia = 7;
							}
						}
					}
				}
			}
		}
		$region='';
		$datos = $this->General_model->get('codigo_postal', array('codigo_postal' => $codigo), array(), '');
		$municipios = $this->General_model->get('municipios', array('id_municipio'=> $municipio), array(), '');
		if($municipios!=false){
			foreach ($municipios->result() as $muni) {
				$region=$muni->id_zona;
			}
		}
		$zonas= $this->General_model->get('zonas', array('id_zona'=>$region), array(), '');
		$almacenes= $this->General_model->get('almecenes', array('id_zona'=>$region, 'id_dia' => $id_dia), array(), '');
		$dias = $this->General_model->get('dias', array(), array(), '');

		$a_almacenes= array();
		$dis_almacenes= array();
		if($datos!=false){
			foreach ($datos->result() as $dato) {
				if($almacenes!=false){
					foreach ($almacenes->result() as $alm) {
						if($dias!=false){
							foreach ($dias->result() as $dia) {
								if($alm ->id_dia == $dia->id_dia ){
									$a_almacenes = array(
										'latitud' => $alm->longitud,
										'longitud' => $alm->latitud,
									);
									array_push($dis_almacenes, $a_almacenes);
								}
							}
						}	
					}
				}
			}	
		}	


		//consulta para tarer los corralones
		$almacenes = $this->General_model->get('almecenes', array(), array(), '');
		$corralones_r4= array();
    	$coordenadas = array();
        if($almacenes!=false){
            foreach ($almacenes->result() as $almacen) {
                $coordenadas = array(
                    'latitud' => $almacen->longitud,
                    'longitud' => $almacen->latitud,
                );
                array_push($corralones_r4, $coordenadas);
                
            }
        }
        //var_dump($corralones_r4);

		$data= array(
			'almacenes' => $almacenes,
			'corralones_r4' => $corralones_r4,
			'codigo' => $codigo,
			'nom_m' => $nom_m,
			'direccion1' => $direccion1,
			'dis_almacenes' => $dis_almacenes,

		);


		/*Aqui va el contenido*/
		$this->load->view('Administrador/administrador_mostrarmap_view');

		$this->load->view('Commons/scripts_view');
		$this->load->view('Administrador/mapa_js_view', $data);

	}

	public function mostrar_corralones()
	{
		//consulta para tarer los corralones
		$almacenes = $this->General_model->get('almecenes', array(), array(), '');
		$corralones_r4= array();
    	$coordenadas = array();
        if($almacenes!=false){
            foreach ($almacenes->result() as $almacen) {
                $coordenadas = array(
                    'latitud' => $almacen->longitud,
                    'longitud' => $almacen->latitud,
					'nombre' => $almacen->nombre,
					'telefono' => $almacen->telefono,
                );
                array_push($corralones_r4, $coordenadas);
                
            }
        }
       // var_dump($corralones_r4);

		$data= array(
			'almacenes' => $almacenes,
			'corralones_r4' => $corralones_r4,

		);


		/*Aqui va el contenido*/
		$this->load->view('Commons/html_open_view');
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wraper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/sidebar_administrador_view');
		$this->load->view('Commons/content_wraper_open_view');
		$this->load->view('Commons/content_wraper_header_view');

		/*Aqui va el contenido*/
		$this->load->view('Administrador/admin_mostrar_corralones_view');

		$this->load->view('Commons/content_wraper_close_view');
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wraper_close_view');
		$this->load->view('Commons/scripts_view');
		$this->load->view('Administrador/admin_most_corralones_js_view', $data);

	}
}
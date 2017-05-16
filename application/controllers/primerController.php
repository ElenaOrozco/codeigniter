<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PrimerController extends CI_Controller {
	function __construct(){
		//importante ejecutar el construtor padre CI_Controller
		parent::__construct();
		//ponemos el nombre del heper sin el _helper
		//$this->load->helper('mihelper');
		//helper para formularios
		$this->load->helper('form');
		//cargamos el modelo
		$this->load->model('primerController_model');
	}

	//Esta funcion se cagara cuando se llame a este controlador
	function index(){
		$this->load->library('menu', array('Inicio', 'Contacto', 'Cursos'));
		$data['mi_menu'] = $this->menu->construirMenu();
		//podemos cargar multiples vistas
		$this->load->view('primerController/headers.php');
		$this->load->view('primerController/bienvenido.php', $data);
	}

	function holaMundo(){
		$this->load->view('primerController/headers.php');
		$this->load->view('primerController/bienvenido.php');
	}

	//Carga la vista del formulario
	function nuevo(){
		$this->load->view('primerController/headers.php');
		$this->load->view('primerController/formulario.php');
	}

	//Funcion  action  del formulario
	function recibirDatos(){
		$data = array (
			'nombre'    => $this->input->post('nombre'),
			'direccion' => $this->input->post('direccion'),
			'telefono'  => $this->input->post('telefono')
		);
		//llamamos al modelo y enviamos los datos
		$this->primerController_model->crearUsuario($data);
		//cargamos las paginas
		$this->load->view('primerController/headers.php');
		$this->load->view('primerController/formulario.php');

	}


}

?>
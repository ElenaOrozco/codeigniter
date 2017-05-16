<?php
/* Estructura basica del modelo 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		class PrimerController_model extends CI_Model {
			function __construct(){
			parent::__construct();
		}
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class PrimerController_model extends CI_Model {
	function __construct(){
		parent::__construct();
		//Cargamos la BD recordar en autload $autoload['libraries'] = array('database');
		//$this->load->database();
		echo "Estamos creando el modelo";

	}

	function crearUsuario($data){
		//estamos creando usuarios
		echo "Estamos creando usuarios";
		//insert('nombreTabla'), array con los campos de la tabla
		$this->db->insert('user', array(
									'nombre'    => $data['nombre'],
									'direccion' => $data['direccion'],
									'telefono'  => $data['telefono']
									));
	}
}
?>
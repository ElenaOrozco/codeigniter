<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$dato['string'] = '<br /> 1. abre el index desde controllers/Welcome.php :D
						   <br /> 2. La URL http://localhost:8000/CodeIgniter/Controlador -> carga index
						   <br />    http://localhost:8000/Controlador/Funcion -> carga una funcion del controlador
						   <br /> 3. Sintaxis de los helpers nombreHelper_helper.php
						   ';
		$this->load->view('welcome_message', $dato);
	}
}

<?php
defined('BASEPATH') OR exit('No dse permite el acceso directo al script');

	/**
	* Recordar nombre de la clase y archivo en mayusculas
	*/
	class Menu{
		
		private $arr_menu;

		function __construct($arr){
			$this->arr_menu = $arr;
		}

		public function construirMenu(){
			$ret_menu = "<nav><ul>";
			foreach ($this->arr_menu as $opcion){
				$ret_menu .= "<li>  $opcion  </li>";
			}
			$ret_menu .= "</ul></nav>";
			//echo $ret_menu;
			return $ret_menu;

		}
	}
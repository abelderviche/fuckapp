<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palabras extends MY_Controller {
	const TABLA = "palabra_clave";
    const PK = "id";
	public function __construct()
    	{   
      	parent::__construct();
      	$this->load->library("session");
      	$this->load->model("palabra_model");
    	}   
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function listar()
	{
		$empresas = $this->palabra_model->get_all();
		$data = array();
		$data["empresas"] = $empresas;
		$dataLayout = array();
		$data["page_id"] = "listar_palabras";
        $dataLayout["contenido"] = $this->load->view("listado_palabras",$data,TRUE);
        $this->load->view("layout/admin", $dataLayout);
	}
	/**
	* @whitelist true
	**/
	public function ajax_agregar_palabra() {
		$valores["palabra"] = (string) $this->input->post("palabra");
		$id_empresa = $this->_agregar($valores);
		echo (int) $id_empresa;
	}
	/**
	* @whitelist true
	**/
	public function ajax_eliminar_palabra() {
		$id_palabra = (int) $this->input->post("id_palabra");
		$valores =array("eliminado" => 1);
		$actualizado = $this->_actualizar($valores,$id_palabra);
		echo (int) $actualizado;
	}
}

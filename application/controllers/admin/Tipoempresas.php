<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipoempresas extends MY_Controller {
	const TABLA = "tipo_empresa";
    const PK = "id";
	public function __construct()
    	{   
      	parent::__construct();
      	$this->load->library("session");
      	$this->load->model("tipoempresa_model");
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
		$empresas = $this->tipoempresa_model->get_all();
		$data = array();
		$data["empresas"] = $empresas;
		$dataLayout = array();
		$data["page_id"] = "listar_tipoempresas";
        $dataLayout["contenido"] = $this->load->view("listado_tipoempresas",$data,TRUE);
        $this->load->view("layout/admin", $dataLayout);
	}
	/**
	* @whitelist true
	**/
	public function ajax_agregar_tipoempresa() {
		$valores["nombre"] = (string) $this->input->post("nombre_empresa");
		$id_empresa = $this->_agregar($valores);
		echo (int) $id_empresa;
	}
	/**
	* @whitelist true
	**/
	public function ajax_eliminar_tipoempresa() {
		$id_empresa = (int) $this->input->post("id_empresa");
		$valores =array("eliminado" => 1);
		$actualizado = $this->_actualizar($valores,$id_empresa);
		echo (int) $actualizado;
	}
}

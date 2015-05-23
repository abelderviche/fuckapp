<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {
public function __construct()
    {   
        parent::__construct();
      $this->load->library("session");
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
	public function listar_empresas()
	{
		$data = array();
		$data["parametros"] = "parametro1";
		$dataLayout = array();
		$data["page_id"] = "listar_empresas";
        $dataLayout["contenido"] = $this->load->view("listado_empresas",$data,TRUE);
        $this->load->view("layout/admin", $dataLayout);
	}

}

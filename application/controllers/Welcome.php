<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * @whitelist true
     */
class Welcome extends MY_Controller {
public function __construct()
    {   
        parent::__construct();
      
    }   
    /**
     * @whitelist true
     */
	public function index()
	{
		$data = array();
		$data["parametros"] = "parametro1";
		$dataLayout = array();
        $dataLayout["contenido"] = $this->load->view("welcome_message",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
	}
	public function paso2(){
		$data = array();
        $data["parametros"] = "parametro1";
        $dataLayout = array();
        $dataLayout["contenido"] = $this->load->view("usuario_registro",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
	}
}

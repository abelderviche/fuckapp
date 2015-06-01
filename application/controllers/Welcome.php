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
    public function manual(){
        $data["carta_final"] = 'manual';
        $dataLayout = array();
        $dataLayout["contenido"] = $this->load->view("manual",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
    }    
    public function manual_post(){
        if ($this->input->post("finalizar") !== FALSE){
            $this->session->set_userdata('puteada', $this->input->post("problema"));
            redirect("/paso2");
        }
    }
	public function paso2(){
        if ($this->session->userdata("puteada") == "") {
            redirect("/");
        }
		$data = array();
        $data["parametros"] = "parametro1";
        $dataLayout = array();
        $data["page_id"] = "usuario_registro";
        $dataLayout["contenido"] = $this->load->view("usuario_registro",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
	}
    public function usuario_login(){
        $this->load->model("usuario_model");
        if ($this->input->post("entrar") !== FALSE){
            $usuario = $this->input->post("email");
            $password = $this->input->post("contrasenia");
            $nroError = $this->usuario_model->login($usuario, $password);
            if ($nroError === Usuario_model::LOGIN_CORRECTO) {
                $idUsuarioLogueado = (int) $this->usuario_model->get_id_usuario();
                $this->_llenar_datos_usuario($idUsuarioLogueado);
                    echo "ir a pagina ya logueado";
                    print_r($_SESSION);die;
            } else {
                if ($nroError === Usuario_model::ERROR_BLOQUEADO) {
                    redirect('/paso2?respuesta=bloqueado');
                }
                if ($nroError === Usuario_model::ERROR_NICKNAME || $nroError === Usuario_model::ERROR_PASSWORD) {
                    redirect('/paso2?respuesta=credenciales');
                }
            }            print_r($nroError);die;
        } else {
           show_error("No se pudo procesar el pedido", "500", "Error");
        }
    }
    public function usuario_registro(){
        $this->load->model("usuario_model");        
        if ($this->input->post("registro") !== FALSE){
            $values = array(
                "nombre" => $this->input->post("nombre"),
                "apellido" => $this->input->post("apellido"),
                "email" => $this->input->post("email"),
                "contrasenia_sin_encriptar" => $this->input->post("contrasenia"),
            );
            $values["contrasenia"] = $this->_encriptar_contrasenia($this->input->post("contrasenia"));
            $id_usuario = $this->usuario_model->agregar_usuario($values);
            if ((int) $id_usuario > 0) {

            }
        } else {
           show_error("No se pudo procesar el pedido", "500", "Error");
        }
    } 

    /**
     * Encripta la contrase�a con crypy y el salt Blowfish
     * Idea tomada del siguiente link
     * @link http://alias.io/2010/01/store-passwords-safely-with-php-and-mysql/
     * PDF en proyecto plataforma_multiservicios:
     * @link \plataforma_multiservicios\documentacion\EncriptacionPasswordsUsada.pdf
     * @param string $password La contrase�a a encriptar
     * @return string La contrase�a encriptada
     */
    private function _encriptar_contrasenia($password)
    {
        $cost = 10;
        //Random salt
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        //"$2a$" salt especial, que crypt reconoce para codificar con el alogaritmo Blowfish
        $salt = sprintf("$2a$%02d$", $cost) . $salt;

        $hash = crypt($password, $salt);

        return $hash;
    }
    private function _llenar_datos_usuario($iIdUsuario)
    {
        $this->load->model("usuario_model");
        $datosUsuario = (array) $this->usuario_model->buscar_por_id((int) $iIdUsuario);
        if ( ! empty($datosUsuario)) {
            $this->session->set_data('usuario', $datosUsuario);
        }
    }
}

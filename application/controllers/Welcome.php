<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * @whitelist true
     */
class Welcome extends MY_Controller {
    const TABLA = "puteadas";
    const PK = "id";
    
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

        $fb_config = array(
            'appId'  => '364289940434061',
            'secret' => '4c5f1b726f910f981eaff9e2c8bd08ba'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl();
        }
        $dataLayout["contenido"] = $this->load->view("welcome_message",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
	}

    public function manual(){
        $data = array();
        $data["carta_final"] = 'manual';
        $data["page_id"] = "ingreso_manual_puteada";
        $dataLayout = array();
        $dataLayout["contenido"] = $this->load->view("manual",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
    }    

    public function manual_post(){
        if ($this->input->post("finalizar") !== FALSE) {
            $palabras_clave = get_palabras_clave();
            $empresas = get_empresas();
            $valores["puteada"] = $this->input->post("problema");
            /*
            **  ACA CHEQUEAR SI PUTEADA TIENE PALABRA CLAVE Y EMPRESA. 
            **  SI NO DIJO PUTEADA O EMPRESA, CREO QUE HABRÍA QUE MANDARLO AL INDEX con variable GET
            **  redirect("/index.php?error=empresa"); redirect("/index.php?error=palabra");
            **  Y MOSTRARTE ALGUN CARTEL SEGUN CORRESPONDA
            **  TAMBIEN AGREGAR EL ID EMPRESA A LA TABLA PUTEADA
            **  $valores["id_empresa"] = numero de id de empresa encontrada;
            */
            $valores["id_empresa"] = 1; //HARDCODE
            $puteada = $this->_agregar($valores);
            $this->session->set_userdata(array('puteada' => $this->input->post("problema"),"id_puteada" => $puteada));
            redirect("/paso2");
        }
    }    

	public function paso2(){
        //print_r($this->session->userdata);
        if ($this->session->userdata("puteada") == "") {
            redirect("/");
        }
		$data = array();
        $data["parametros"] = "parametro1";
        $dataLayout = array();
        $data["page_id"] = "usuario_login";
        $this->load->view("usuario_login",$data,FALSE);
        //$dataLayout["contenido"] = $this->load->view("usuario_registro",$data,TRUE);
        //$this->load->view("layout/default", $dataLayout);
	}
    public function paso2_registro(){
     //   print_r($this->session->userdata);
        if ($this->session->userdata("puteada") == "") {
            redirect("/");
        }
        $data = array();
        $dataLayout = array();
        $data["page_id"] = "registro";
      //  $this->load->view("usuario_registro",$data,FALSE);
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
                $id_puteada = $this->session->userdata('id_puteada');
                $valores["id_usuario"] = $idUsuarioLogueado;
                $this->_actualizar($valores,$id_puteada);
                redirect("/compartir/".$id_puteada);
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
            $valores["id_usuario"] = $id_usuario;

            $id_puteada = $this->session->userdata('id_puteada');
            $this->_actualizar($valores,$id_puteada);
            if ((int) $id_usuario > 0) {
                $idUsuarioLogueado = (int) $this->usuario_model->get_id_usuario();
                $this->_llenar_datos_usuario($idUsuarioLogueado);
                echo "ir a pagina ya logueado";
                print_r($_SESSION);die;
            }
        } else {
           show_error("No se pudo procesar el pedido", "500", "Error");
        }
    } 
    public function compartir($iIdPuteada){
        $id_puteada = (int) $iIdPuteada;
        if ($id_puteada == 0) {
            show_error("No se pudo procesar el pedido", "500", "Error");
        }
        $data = array();
        $data["datos"] = get_datos_por_id($this->session->userdata('id_puteada'));
        $template = "carta_prueba";
        $dataLayout = array();
        $dataLayout["page_id"] = "compartir";
        $dataLayout["contenido"] = $this->load->view($template,$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
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

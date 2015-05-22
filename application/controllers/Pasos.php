<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasos extends CI_Controller {
public function __construct()
    {   
        parent::__construct();
      
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
	public function index()
	{
		$data = array();
		$data["parametros"] = "parametro1";
		$dataLayout = array();
        $dataLayout["contenido"] = $this->load->view("welcome_message",$data,TRUE);
        $this->load->view("layout/default", $dataLayout);
	}
	public function sanear_string($texto){
		return $texto;

	}

	public function paso2(){
		$this->load->helper('func');

        $yourWord= sanear_string(strtolower($_POST['texto']));
        // $yourWord = "edesur la puta que te re pario";
        //   echo $yourWord;
        $targets = array("edesur", "edenor", "telefonica", "claro", "movistar");

        $words = join("|", $targets);
        $matches = array();
        if ( preg_match('/' . $words . '/i', $yourWord, $matches) ){
          $empresa = $matches[0];
        }
	    $electricidad = "<div class='carta'>
                        <div class='cabecera'>
                          <div class='fecha'>".getFecha('ES')."</div>
                          <div class='lugar'>@EMPRESA@</div>
                        </div>
                        <div class='cuerpo'>
                          <b>Señor presidente de @EMPRESA@</b><br>
                          Le comunico que hago absolutamente responsable a la empresa <b>@EMPRESA@</b> por la falta de previsión, 
                          de mantenimiento y malas condiciones en que sostiene el tendido eléctrico.
                          La falta de adecuación de infraestructura eléctrica con cableado de media tensión de más de 60 años frente al precedo de urbanización indiscriminado y desmedido sin planeamiento previo contribuyó al colapso y preanuncian situaciones más graves en el futuro.
                          Del mismo modo hacemos civil y penalmente responsable a usted y a los funcionarios de la empresa que no han gestionado  y atendido la emergencia eléctrica dejando a extensas zonas
                          sin suministro eléctrico.<br>
                          Hago a la empresa responsable por los daños y perjuicios, daño moral, pérdidas materiales, inconvenientes y problema de salud que esta emergencia ocasionó sobretodo a las familias, niños de corta edad, personas mayores y/o enfermas, y lucro cesante por haber 
                          imposibilitado a las personas cumplir con sus obligaciones laborales e impidió a empresas e instituciones trabajar o los obligó a recurrir a costosos equipos electrógenos para poder mínimamente continuar prestando servicios
                          Por lo expuesto exijo e intimo a:<br>
                          1º) Que en un plazo perentorio de 24 horas restablezca el servicio en forma estable y permanente.<br>
                          2º) Un resarcimiento económico inmediato a todos los clientes damnificados.<br>
                          3º) La realización de las obras necesarias que permitan a la población superar los cortes continuos y aseguren el suministro eléctrico.<br>
                          4º) Se designe una audiencia a la que puedan concurrir los representantes de esta asociación así como damnificados a fin de evacuar las dudas correspondientes.<br>
                          Reservo derechos.<br>
                        </div>
                      </div>"; 
     $telefonia = "<div class='carta'>
                        <div class='cabecera'>
                          <div class='fecha'>".getFecha('ES')."</div>
                          <div class='lugar'>@EMPRESA@</div>
                        </div>
                        <div class='cuerpo'>
                          <b>Señor presidente de @EMPRESA@</b><br>
                          Le comunico que hago absolutamente responsable a la empresa <b>@EMPRESA@</b> por la falta de previsión, 
                          de mantenimiento y malas condiciones en que sostiene el servicio de comunicación.<br>
                          1. Solicito: que cese la infracción  a la Ley de Defensa al Consumidor 24.240,  por los daños causados por su servicio (art. 5) dado su incumplimiento con el contrato en los  términos, plazos, condiciones, modalidades, reservas y demás circunstancias conforme a las cuales hayan sido ofrecidos, publicitados o convenidos.(arts. 8, 10 bis y 19), la información adecuada (art. 4), el trato digno (art. 8 bis), y tratar de imponerme cláusulas abusivas realizadas en contratos formularios ( arts. 37, 38 y 39) por lo que solicito cumpla con mi reclamo en forma inmediata.<br>
                          2. Restituya: el proporcional del abono por los días que el servicio no fue prestado en debida forma e indemnización por los daños causados.<br>
                          3. Daño Directo, dado el menoscabo sufrido, conforme lo he expresado solicitaré en caso de rechazo se indemnice con el máximo valor dispuesto por el art. 40 Bis. Ley 24.240 en el Organismo Gubernamental de Defensa al Consumidor.<br>
                          4. Sanciones:  dado el menoscabo sufrido, conforme lo he expresado solicitaré en caso de rechazo le sea aplicada la multa prevista en el art. 47 inc. B), Ley 24.240 y/o cualquier otra sanción que correspondiere, en su máxima graduación, por el  el carácter de reincidente, la cuantía de los beneficios indebidamente obtenidos, su proyección económica, el peligro de su generalización para todos los usuarios, y la repercusión de estas infracciones  atento la posición en el mercado (conf. art. 49 de la ley 24.240) en el Organismo Gubernamental de Defensa al Consumidor.<br>
                          Reservo derechos.<br>
                          </div>
                      </div>";

		if($empresa == 'edesur' || $empresa == 'edenor'){
			$carta_parcial = $electricidad;
		}else if($empresa == 'telefonica' || $empresa == 'claro' || $empresa == 'movistar'){
			$carta_parcial = $telefonia;
		}
		$carta_final = str_replace("@EMPRESA@", strtoupper($empresa)." S.A.", $carta_parcial); 

		//echo $carta_final;

		$data["carta_final"] = $carta_final;
		$dataLayout = array();
		$dataLayout["contenido"] = $this->load->view("presentacion",$data,TRUE);
		$this->load->view("layout/default", $dataLayout);

	}
	public function manual(){
		$data["carta_final"] = 'manual';
		$dataLayout = array();
		$dataLayout["contenido"] = $this->load->view("manual",$data,TRUE);
		$this->load->view("layout/default", $dataLayout);
	}


}

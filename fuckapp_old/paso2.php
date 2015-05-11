<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width"/>
<!--Credit: George Chiang (www.abstract.simplenet.com) Free JavaScripts site-->
<meta http-equiv="Page-Enter" content="revealTrans(Duration=5.0,Transition=9)">
<title>App</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/normalize.css">
<style type="text/css">
#results {
    font-size: 14px;
    font-weight: bold;
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
    min-height: 150px;
  }
  #siguiente{
    display: none;
    font-family: 'rawengulklight', sans-serif;
  color: #fff;
  background: #ff2700;
  background: -moz-linear-gradient(top, #ff2700 0%, #ff5e07 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff2700), color-stop(100%,#ff5e07));
  background: -webkit-linear-gradient(top, #ff2700 0%,#ff5e07 100%);
  background: -o-linear-gradient(top, #ff2700 0%,#ff5e07 100%);
  background: -ms-linear-gradient(top, #ff2700 0%,#ff5e07 100%);
  background: linear-gradient(to bottom, #ff2700 0%,#ff5e07 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff2700', endColorstr='#ff5e07',GradientType=0 );
  border-radius: 5px;
  width: 80%;
  margin: auto;
  padding: 1em;
  text-align: center;
  font-size: 1.4em;
  margin-bottom: 20px;
  }
  </style>
</head>

<?php 
include('functions.php');
?>

<body>
	<section id="container">
		<header>
			<div id="volver">
				<a href="index.html"> < </a> 
			</div> 

			<figure>
				<img src="images/logo.png" alt="logo">
			</figure>
		</header>

    <?php 
    if($_POST['texto']){
        $yourWord= sanear_string(strtolower($_POST['texto']));
        // $yourWord = "edesur la puta que te re pario";
        //   echo $yourWord;
        $targets = array("edesur", "edenor", "telefonica", "claro", "movistar");

        $words = join("|", $targets);
        $matches = array();
        if ( preg_match('/' . $words . '/i', $yourWord, $matches) ){
         //   echo "Words matched:";
         //   print_r($matches);
          $empresa = $matches[0];
        }else{
          //$empresa = "No se encontro ninguna empresa";
        }
      }else{
        $empresa = strtolower(sanear_string($_POST['empresa']));
      }
     /* echo "<pre>";
      print_r($_SERVER);
      echo "</pre>";
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      echo $ip;
      $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
      echo $details->city;
      */
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
    ?>
      <style type="text/css">
      .cabecera{
        background: #e0e0e0;
        padding: 20px 0px;
      }
      .fecha,.lugar{
        width: 45%;
        display: inline-block;
      }
      .lugar{
        text-align: right;
      }
      .fecha{
        text-align: left;
      }
      .carta{
        width: 100%;
      }
      .cuerpo{
        width: 80%;
        text-align: justify;
        text-justify: inter-word;
        margin: 0 auto;
      }
      </style>
    <div style="border:1px solid #290728;margin-top:3px;text-align:center;">
      <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Texto procesado</div>
      <div style="font-size:15px;margin-top:2px"><?=$yourWord;?>
        <?php if($_POST['manual']){
            foreach ($_POST as $param_name => $param_val) {
                echo "$param_name : $param_val<br />\n";
            }
          }?>
      </div>
    </div>
    <br><br>
    <?php if($carta_final){ ?>
		<div style="border:1px solid #290728;margin-top:3px;text-align:center;">
			<div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white;	">Carta Documento</div>
			<div style="font-size:15px;margin-top:2px"><?=$carta_final;?></div>
		</div>
    <?php }else{ ?>
    <div style="border:1px solid #290728;margin-top:3px;text-align:center;">
      <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Error!</div>
      <div style="font-size:15px;margin-top:2px">No se ha detectado una empresa en la base de datos<br>
          <a href="manual.php" id="ingresar"><h2>INGRESAR MANUALMENTE</h2></a>
      </div>
    </div>
    <?php } ?>
		<div id="pasos">
		<figure><img src="images/paso-1.png" alt=""></figure>
		</div>
	</section>
	<script src="js/modernizr.js" type="text/javascript"></script>
</body>
</html>


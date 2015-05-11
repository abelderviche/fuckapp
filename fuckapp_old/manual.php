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

      form input,textarea{
        border:1px solid #e0e0e0;
      }
      form label{
        width: 30%;
     
      }
      </style>
    <div style="border:1px solid #290728;margin-top:3px;text-align:center;">
      <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Carga Manual</div>
      <div style="font-size:15px;margin-top:2px">
        <form id="form" method="POST" action="paso2.php">
        <input type="hidden" name="manual" value="1">
          <label>Nombre:</label><input type="text" required name="nombre"><br>
          <label>Apellido:</label><input type="text" required name="apellido"><br>
          <label> DNI:</label><input type="text" required name="dni"><br>
          <label> Empresa:</label><input type="text" required name="empresa"><br>
          <label>  Puteada:</label><textarea required name="problema"></textarea><br>
          <input type="submit" value="finalizar">
        </form>
      </div>
    </div>
  
  <br>  <div id="pasos">
		<figure><img src="images/paso-1.png" alt=""></figure>
		</div>
	</section>
	<script src="js/modernizr.js" type="text/javascript"></script>
</body>
</html>


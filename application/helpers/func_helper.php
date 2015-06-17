<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }   
}


function getFecha($idioma){
	if($idioma == "ES"){
		$dia=date("l");
		if ($dia=="Monday") $dia="Lunes";
		if ($dia=="Tuesday") $dia="Martes";
		if ($dia=="Wednesday") $dia="Miércoles";
		if ($dia=="Thursday") $dia="Jueves";
		if ($dia=="Friday") $dia="Viernes";
		if ($dia=="Saturday") $dia="Sabado";
		if ($dia=="Sunday") $dia="Domingo";
		$mes=date("F");
		if ($mes=="January") $mes="Enero";
		if ($mes=="February") $mes="Febrero";
		if ($mes=="March") $mes="Marzo";
		if ($mes=="April") $mes="Abril";
		if ($mes=="May") $mes="Mayo";
		if ($mes=="June") $mes="Junio";
		if ($mes=="July") $mes="Julio";
		if ($mes=="August") $mes="Agosto";
		if ($mes=="September") $mes="Setiembre";
		if ($mes=="October") $mes="Octubre";
		if ($mes=="November") $mes="Noviembre";
		if ($mes=="December") $mes="Diciembre";
		$ano=date("Y");
		$dia2=date("d");
		return "$dia, $dia2 de $mes de $ano";
	}else if($idioma=='EN'){
		return date('l jS \of F Y');
	}
}
function sanear_string($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );

    return $string;
}

function get_tipo_empresa($bSoloActivo = TRUE)
{
    $CI = & get_instance();
    $where = array("eliminado" => 0);
    if ($bSoloActivo === FALSE) {
        $where = array();
    }
    $CI->db->order_by("nombre");
    $query = $CI->db->get_where("tipo_empresa", $where);
    $rows = $query->result_array();
    $rows_id_key = array();
    foreach ($rows as & $row) {
        $row["nombre"] = $row["nombre"];
        $rows_id_key[(int) $row["id"]] = $row;
    }
    return $rows_id_key;
}
function get_palabras_clave()
{
    $CI = & get_instance();
    $where = array("eliminado" => 0);
    $CI->db->order_by("palabra");
    $query = $CI->db->get_where("palabra_clave", $where);
    $rows = $query->result_array();
    $rows_id_key = array();
    foreach ($rows as & $row) {
        $row["palabra"] = $row["palabra"];
        $rows_id_key[(int) $row["id"]] = $row;
    }
    return $rows_id_key;
}
function get_empresas()
{
    $CI = & get_instance();
    $where = array("e.eliminado" => 0);
    $CI->db->select("e.id as id_empresa, tp.id as id_tipo_empresa,e.nombre as empresa, tp.nombre as tipo_empresa,tp.template");
    $CI->db->order_by("e.nombre");
    $CI->db->join("tipo_empresa tp","tp.id=e.id_tipo_empresa","INNER");
    $query = $CI->db->get_where("empresa e", $where);
    $rows = $query->result_array();
    $rows_id_key = array();
    foreach ($rows as & $row) {
        $row["empresa"] = $row["empresa"];
        $rows_id_key[(int) $row["id_empresa"]] = $row;
    }
    return $rows_id_key;
}
function get_datos_por_id($iIdPuteada) {
    $id_puteada = (int) $iIdPuteada;
    if ($id_puteada == 0) {
        return FALSE;
    }
    $CI = & get_instance();
    $where = array("p.id" => $id_puteada);
    $CI->db->select("p.puteada,e.nombre empresa,u.nombre,u.apellido,tp.template");
    $CI->db->order_by("e.nombre");
    $CI->db->join("usuario u","u.id=p.id_usuario","INNER");
    $CI->db->join("empresa e","p.id_empresa=e.id","INNER");
    $CI->db->join("tipo_empresa tp","tp.id=e.id_tipo_empresa","INNER");
    $query = $CI->db->get_where("puteadas p", $where);
    $row = $query->row_array();
    return $row;
}
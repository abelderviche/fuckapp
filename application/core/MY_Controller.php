<?php

/**
 * 28/03/2015
 * File: MY_Controllers.php
 * Encoding: UTF-8
 * Project: iron_acl_ci3
 * Description of MY_Controllers
 *
 * @author Diego Olmedo
 */
class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper(array("url", "html", "form", "date", "acl"));
        //$this->load->library(array("PHPSession"));
        $this->load->database();
        //load var_dump extendido
        //$this->load->spark('krumo/0.0.1');
        date_default_timezone_set("America/Argentina/Buenos_Aires");        
    }
    protected function _listar($sOrderBy = "", $sSentido = "")
    {
        $this->_order_by = strtolower($sOrderBy);
        //Es el sentido para setear en los links. Contrario al sentido de orden actual
        $this->_sentido = strtolower($sSentido) === "desc" ? "asc" : "desc";
        $pag = $this->uri->segment(static::PAG_SEGMENT);
        $this->_offset = (($pag > 0 ? $pag : 1 ) * static::RPP) - static::RPP;
    }

    protected function _agregar($aValores)
    {
        if ( ! is_array($aValores) OR empty($aValores)) {
            return NULL;
        }
        $this->db->insert(static::TABLA, $aValores);
        return $this->db->insert_id();
    }

    protected function _actualizar($aValores, $mValorPK, $mPK = NULL)
    {
        if ( ! is_array($aValores) OR empty($aValores)) {
            return NULL;
        }
        $where = array(static::PK => $mValorPK);
        if ($mPK !== NULL) {
            if (is_array($mPK)) {
                $where = $mPK;
            } else {
                $where = array($mPK => $mValorPK);
            }
        }
        $this->db->update(static::TABLA, $aValores, $where);
        return $this->db->affected_rows();
    }

    protected function _borrar($mValorPK, $mPK = NULL)
    {
        $where = array(static::PK => $mValorPK);
        if ($mPK !== NULL) {
            if (is_array($mPK)) {
                $where = $mPK;
            } else {
                $where = array($mPK => $mValorPK);
            }
        }

        $this->db->delete(static::TABLA,$where);
        return $this->db->affected_rows();
    }

    protected function _eliminar($mValorPK,$mPK = NULL)
    {

    	$this->db->update(static::TABLA, array('eliminado' => '1'), array($mPK => $mValorPK));
    	return $this->db->affected_rows();
    }

    protected function _get_por_id($mValorPK, $aFiltrosExtendidos = array(), $mPK = NULL)
    {
        $pk = static::PK;
        if ($mPK !== NULL) {
            $pk = $mPK;
        }
        $filtros = array($pk => $mValorPK);
        $where = array_merge($filtros, $aFiltrosExtendidos);
        $query = $this->db->get_where(static::TABLA, $where);
        return $query->row_array();
    }

    public function acceso_denegado()
    {
        $dataLayout["contenido"] = $this->load->view("acceso_denegado", array(), TRUE);
        $this->load->view("layout/default", $dataLayout);
    }

    /**
     * Metodo que permite la exportación de un listado a csv sin filtros
     *
     * @param string $sOrden Especifica el orden de la columna
     * @param string $sSentido Definde el sentido del orden
     * @param array $columnas Seteo las columnas que voy a mostrar en el csv
     * @param array $aResultados si el criterio de busqueda es diferente al se puede pasar un resultado directamente
     * @param string $csv_file Especifica el nombre del archivo de salida, se usa el nombre de la tabla por defecto
     * @todo Extender para que el nombre de la columna pueda diferir del nombre del campo.
     *
     */
    protected function _exportar_csv($sOrden = "nombre", $sSentido = "desc", $columnas='', $aResultados=array(),$csv_file='')
    {

    	$sentido_orden = strtoupper($sSentido);
    	$order_by = strtolower($sOrden);
    	$this->db->order_by($sOrden, $sSentido);

    	$resultados = (count($aResultados)<=0)?$this->db->get(static::TABLA)->result_array():$aResultados;

    	$csv_end = "\n";
    	$csv_sep = ";";
    	$csv_file = ($csv_file)?$csv_file:static::TABLA;

    	$csv = "";
    	$csv .= implode($csv_sep, $columnas).$csv_end;

    	foreach ($resultados as $resultado ):
	    	foreach ($columnas as $key=>$value):
	    		$csv .= $resultado[$value].$csv_sep;
	    	endforeach;
	    	$csv .= substr($csv, -1).$csv_end;
    	endforeach;


    	header("Content-type: application/vnd.ms-excel");
    	header("Content-disposition: csv" . date("Y-m-d") . ".csv");
    	header( "Content-disposition: filename=".$csv_file.".csv");
    	print $csv;
    	exit;
    }

    public function _export_csv_full($aResultados=array(),$csv_file='')
    {
    	$resultados = (count($aResultados)<=0)?$this->db->get(static::TABLA)->result_array():$aResultados;

    	ob_start();
    	$df = fopen("php://output", 'w');
    	fputcsv($df, array_keys(reset($resultados)),";");
    	foreach ($resultados as $resultado ){
    		fputcsv($df, $resultado,";");
    	}
    	fclose($df);
    	header("Content-type: application/vnd.ms-excel");
    	header("Content-disposition: csv" . date("Y-m-d") . ".csv");
    	header( "Content-disposition: filename=".$csv_file.".csv");

    	exit;
    }    
}

<?php

/**
 * 13/11/2014
 * File: acl_grupos_model.php
 * Encoding: ISO-8859-1
 * Project: acl
 * Description of acl_grupos_model
 *
 * @author Diego Olmedo
 */
class Empresa_model extends CI_Model
{

    const TABLA = "empresa";
    const PK = "e.id";
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($iLimit = 0, $iOffset = 0, $sOrden = "nombre", $sSentido = "asc")
    {
        $limit = (int) $iLimit;
        $campos_orden = array("e.nombre" => "nombre", "e.id" => "id");
        $orden = isset($campos_orden[$sOrden]) ? $campos_orden[$sOrden] : self::PK;
        //valido que no manden cualquier cosa en el sentido
        $sentido = "desc";
        $where = array("e.eliminado" => 0);
        if ($limit > 0) {
            $offset = (int) $iOffset;
            $this->db->limit($limit, $offset);
        }
        $this->db->select('e.nombre as empresa,tp.nombre as tipo_empresa,e.id as id_empresa, tp.id as id_tipo_empresa');
        $this->_get_filtro_busqueda();
        $this->db->where($where);
        $this->db->join("tipo_empresa tp","e.id_tipo_empresa=tp.id", "INNER");
        $this->db->order_by($orden, $sentido);
        $empresas = $this->db->get_where(self::TABLA . " as e", $where)->result_array();
        //echo $this->db->last_query();die;
        return $empresas;
    }
//PRIVATE
    private function _get_filtro_busqueda()
    {
        $like = "";
        if ($this->input->get("texto_buscar")) {
            $texto = $this->db->escape_like_str($this->input->get("texto_buscar"));
            $like = " AND (nombre LIKE '%$texto%' OR apellido LIKE '%$texto%' OR usuario LIKE '%$texto%')";
        }
        return $like;
    }    
}

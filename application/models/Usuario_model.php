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
class Usuario_model extends CI_Model
{

    const TABLA = "usuario";
    const PK = "id";
    const CAMPO_USUARIO = "email";
    const CAMPO_PASSWORD = "contrasenia";
    const MAX_CII = 3;
    const LOGIN_CORRECTO = 0;
    const ERROR_NICKNAME = 1;
    const ERROR_PASSWORD = 2;
    const ERROR_BLOQUEADO = 3;
    protected $_idUsuarioLogueado = 0;

    public function __construct()
    {
        parent::__construct();
    }
    public function agregar_usuario($AValores){
        $this->db->insert(self::TABLA, $AValores);
        return $this->db->insert_id();

    }
    public function login($usuario, $password)
    {
//        $sql = "SELECT id_acl_usuario, contrasenia, cii FROM acl_usuario WHERE usuario = ? AND activo = 'S'";
//        $query = $this->db->query($sql, array($usuario));
        $this->db->select(self::PK . ", " . self::CAMPO_PASSWORD);
        $query = $this->db->get_where(self::TABLA, array(self::CAMPO_USUARIO => $usuario));

        $row = $query->row_array();
        if (empty($row)) {
            return self::ERROR_NICKNAME;
        }
        if ( ! empty($row)) {
            $id_usuario = (int) $row[self::PK];
            $contraseniaDB = $row[self::CAMPO_PASSWORD];
            $this->_idUsuarioLogueado = $id_usuario;
        }
        //Verificamos la contrase�a
        if ($this->_validar_password($password, $contraseniaDB) === FALSE) {
            return self::ERROR_PASSWORD;
        }
        return self::LOGIN_CORRECTO;
    }        
    /**
     *
     * @param string $sPasswordIngresada
     * @param string $sPasswordDB
     * @return boolean
     */
    private function _validar_password($sPasswordIngresada, $sPasswordDB)
    {
        if (crypt($sPasswordIngresada, $sPasswordDB) === $sPasswordDB) {
            return true;
        }
        return false;
    }    
    public function buscar_por_id($iIdUsuario)
    {
        $id_usuario = (int) $iIdUsuario;
        $where = array(self::PK => $id_usuario);
        $query = $this->db->get_where(self::TABLA, $where);
        return $query->row_array();
    }    
    public function get_id_usuario()
    {
        return $this->_idUsuarioLogueado;
    }    
}

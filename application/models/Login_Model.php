<?php
class Login_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function usuario_por_nombre_contrasena($nombre, $contrasena){
        $this->db->select('id_usuario, nombre');
        $this->db->from('sinos_cat_usuario');
        $this->db->where('usuario', $nombre);
        $this->db->where('contrasenia', $contrasena);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
}
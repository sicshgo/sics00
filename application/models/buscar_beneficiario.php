<?php
class Buscar_beneficiario extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function ObtenerTodos(){
        $this->db->select('nombre,apellido_paterno,apellido_materno');
        $this->db->order_by('nombre');
        return $this->db->get('sinos_cat_usuario')->result_array();
    }

}
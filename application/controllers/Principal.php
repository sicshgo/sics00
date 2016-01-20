<?php
if (!defined('BASEPATH'))     exit('No direct script access allowed');
class Principal extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function iniciar_sesion() {
        $data = array();
        //$this->load->view('usuarios/iniciar_sesion', $data);
        $this->load->view('login_view', $data);
    }

    public function iniciar_sesion_post() {
        if ($this->input->post()) {
            $nombre = $this->input->post('nombre');
            $contrasena = $this->input->post('contrasenia');
            $this->load->model('Login_Model');
            $usuario = $this->Login_Model->usuario_por_nombre_contrasena($nombre, $contrasena);
            if ($usuario) {
                $usuario_data = array(
                    'id_usuario' => $usuario->id_usuario,
                    'nombre' => $usuario->nombre,
                    'logueado' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                redirect('Principal/logueado');
            } else {
                redirect('Principal/iniciar_sesion');
            }
        } else {
            $this->iniciar_sesion();
        }
    }
    public function logueado() {
        if($this->session->userdata('logueado')){
            $data = array();
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('logueado', $data);
        }else{
            redirect('login_view');
        }
    }
    public function cerrar_sesion() {
        $usuario_data = array(
            'logueado' => FALSE
        );
        $this->session->set_userdata($usuario_data);
        redirect('login_view');
    }
}
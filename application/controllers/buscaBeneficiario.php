<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class BuscaBeneficiario extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        echo "Prueba";
    }

    public function buscarBeneficiario()
    {
        $this->load->model('buscar_beneficiario');
        // Cargar librer�a de 'table'
        $this->load->library('table');
        $data['usuarios']  = $this->buscar_beneficiario->ObtenerTodos();

        // Cargar el view, y enviar los resultados
        $this->load->view('buscaBeneficiario_view', $data);
    }

    public function inicioSesion(){
        $this->load->view('login_view');
    }
}
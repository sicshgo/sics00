<?php defined('BASEPATH') OR exit('No direct script access allowed');



class AO extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model("ao_model");

    }

    function cliError($num = "0x0", $msg="Bad Request"){
        set_status_header(500);
        exit($msg . " " . $num);
    }


}
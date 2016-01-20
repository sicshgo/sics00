<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$_img = "" . $this->session->userdata("imagen");
//if(strlen($_img)<=0){
    $_img = "empty.jpg";
//}



?>


<div class="ui right vertical inverted sidebar labeled menu" id="menuSide">
    <div class="item">
        <img class="ui small circular centered image" src="<?php echo base_url("assets/img/users/". $_img);?>">
        <h5 class="ui centered inverted header">
            <?php // echo $this->session->userdata("nombre_completo");?>
        </h5>

    </div>
    <a class="item" href="<?php echo site_url(""); ?>">
        <i class="home icon"></i>
        Página principal SINOS
    </a>

    
        <a class="item" href="<?php echo site_url("configuraciones") ?>">
            <i class="configure icon"></i>
            Configuración
        </a>
        
        <div class="item">
            <a class="header" href="<?php echo site_url("/ao/") ?>">
                Sub. Afiliación y Operación
                <div class="menu">
                    <a class="item" href="<?php echo site_url('ao/ver/estadisticas')?>">Estadísticas</a>
                    <a class="item" href="<?php echo site_url('ao/ver/foliosap')?>">Folios para SAP</a>
                </div>
            </a>
        </div>
   




    <a class="item">
        <i class="smile icon"></i>
        Friends
    </a>
    <a class="item">
        <i class="smile icon"></i>
        Friends
    </a>

    <a class="item" href="<?php echo  site_url(("login/logout_user"));?>">
        Cerrar sesión
        <i class="red power icon"></i>
    </a>
</div>

<div class="ui fixed top btnmenu">
    <button class="ui black icon button">Menú <i class="sidebar icon"></i></button>
</div>

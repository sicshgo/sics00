<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$data['title'] = ":: Página Principal";
$data['css'] = array(
    "jw/jqx.base.css",
    "jw/jqx.repss.css"
);

$this->load->view("template/head",$data);
//todo: de cada área crear un ménu con opciones para entrar, dependiendo de los permisos, mmmmm eso si que estará muy loco
?>

<div class="ui grid container">
    <section class="row">
        <article class="column">
            <div class="ui cards">
                
                        <div class="ui centered card">
                            <div class="content">
                                <div class="header">
                                    Subdirección de Afiliación y Operación
                                </div>
                                <div class="description">
                                    <div class="ui vertical buttons">
                                        
                                                <a class="ui button"
                                                   href="<?php echo site_url('ao/ver/estadisticas') ?>">Estadísticas</a>
                                                ?>

                                       
                                                <a class="ui button" href="<?php echo site_url('ao/ver/foliosap') ?>">Folios
                                                    para SAP</a>
                                           
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                   
            </div>
        </article>
    </section>
</div>

<?php
$data['scripts'] = array(

);
$this->load->view("template/footer",$data);
?>
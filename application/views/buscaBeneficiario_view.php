<?php
$this->load->view('templetes/header');
?>

<div class="ui grid container">
    <div class="row">
        <div class="column">
            <div id="tblDatos">

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var $tblDatos=$('#tblDatos'), $data=JSON.parse('<?php echo json_encode($usuarios); ?>');

        var source =
        {
            localdata: $data,
            datatype: "local",
            datafields: [
                { name: 'nombre', type: 'string' },
                { name: 'apellido_paterno', type: 'string' },
                { name: 'apellido_materno', type: 'string' }
            ]
        };

        var dataAdapter = new $.jqx.dataAdapter(source);

        $tblDatos.jqxGrid(
            {
                //width: 650,
                source: dataAdapter,
                pageable: true,
                autoheight: true,
                autowidth:true,
                sortable: true,
                //altrows: true,
                //enabletooltips: true,
                //editable: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                    { text: 'Nombre',  datafield: 'nombre', width:250 },
                    { text: 'Apellido Paterno', datafield: 'apellido_paterno', width:250 },
                    { text: 'Apellido Materno', datafield: 'apellido_materno', width:250 }
                ]
            });
    });
</script>

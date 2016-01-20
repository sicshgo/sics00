<?php $this->load->view('templetes/header'); ?>
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
        var $tblDatos=$('#tblDatos'),$data=JSON.parse('<?php echo json_encode($usuarios) ?>');
        var source = {
            localdata:$data,
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
                width: 600,
                source: dataAdapter,
                pageable: true,
               // autowidth:true,
                sortable: true,
                altrows: true,
                enabletooltips: true,
                // editable: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                    {text: 'Nombre', datafield: 'nombre', whith: 200},
                    {text: 'Apellido Paterno', datafield: 'apellido_paterno', whith: 200},
                    {text: 'Apellido Materno', datafield: 'apellido_materno', whith: 200}
                ]
            });
    });

</script>


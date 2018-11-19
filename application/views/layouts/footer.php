<footer  >
    <div  style="text-align: center;">
       <p>
        <b>Version</b> 1.1
    <br>
    <strong >Análisis y Diseño de Sistemas 2018-02   <a href="http://ingsistemas.ufps.edu.co/ ">Ingeniería de Sistemas UFPS</a>.</strong> <br>Todos los derechos reservados.
        </p>
    </div>
</footer>

<script type="text/javascript">
    
//llamar funcion cuando cambia tipo de pregunta en el select
function contenido_preguntas(){
    var tipo_pregunta = (document.getElementById('tipo_pregunta')).value;
    if(tipo_pregunta == "sm"){
         document.getElementById('seleccionMultiple').style.display = "block";
         document.getElementById('verdaderoFalso').style.display = "none";
         document.getElementById('preguntaAbierta').style.display = "none";
    }else if(tipo_pregunta == "vf"){
         document.getElementById('seleccionMultiple').style.display = "none";
         document.getElementById('verdaderoFalso').style.display = "block";
         document.getElementById('preguntaAbierta').style.display = "none";
    }else{ //pa
         document.getElementById('seleccionMultiple').style.display = "none";
         document.getElementById('verdaderoFalso').style.display = "none";
         document.getElementById('preguntaAbierta').style.display = "block";
    }
}

    //eliminar simulacros ajax

    $(document).ready(function () {
    var base_url= "<?php echo base_url();?>";
    $(".eliminar-simulacro").on("click", function(e){

        var id = $(this).parents("tr").attr("id");
        e.preventDefault();
        var ruta = $(this).attr("href");
        //alert(ruta);
        $.ajax({
            url: ruta,
            type:"POST",
            success:function(resp){
               $("#"+id).remove();
            }
        });
    });
    $('.sidebar-menu').tree();
})

</script>







<!--Modales-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <center>REGISTRAR SIMULACRO</center>
                </h4>
                <!--button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button-->
            </div>
            <div class="modal-body">
                <form class="form-group" method="post" id="formRegistroS" action="<?php echo base_url();?>director/Simulacros/registrar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Director: </b>
                                    <?php echo $user-> nombre;?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>Programa: </b>
                                    <?php echo $user-> programa;?>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label><b>Fecha de Inicio: </b></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="exampleInputPassword1" value="2018-06-15" name="fecha" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"><label><b>Hora Inicial: </b></label></div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <input type="time" class="form-control" value="00:00:00" id="exampleInputPassword1" name="horaI" required>
                                </div>
                            </div>
                            <div class="col-md-2"> <label><b>Hora Final: </b></label></div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <input type="time" class="form-control" value="01:00:00" id="exampleInputPassword1" name="horaF" required>
                                </div>
                            </div>
                        </div>
                    </div>



            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Registrar Simulacro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--ventana modal registrar area docente-->
<div class="modal fade" id="RegAreaDoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <center>REGISTRAR AREA</center>
                </h4>
            </div>
            <div class="modal-body">
                <form class="form-group row" method="post" action="<?php echo base_url();?>docente/Areas/registrarArea">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <center> <label>Area:</label> </center>
                            </div>
                            <div class="col-md-6">

                                <select class="selectpicker" name="areaR" data-live-search="true">
                        <?php foreach ($areas as $area):?>
                            <?php $validacion= false; ?>
                            <?php foreach ($areas_doc as $area_doc) {
                                if($area_doc-> nombre==$area-> nombre){ //el docente ya registró esa era, no mostrarla
                                    $validacion = true;
                                    break;
                                }
                            }
                            if(!$validacion){?>
                            <option ><?=$area->nombre?></option>
                            <?php }
                            ?>
                      
                  <?php endforeach;?>
                    </select>


                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Registrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
<!--selectpicker-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No se encontraron resultados en su busqueda",
                "searchPlaceholder": "Buscar registros",
                "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                "infoEmpty": "No existen registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            },
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>
<script type="text/javascript">
    var modalStartLocation;

    $(document).on('show.bs.modal', function(e) {
        var modal = $(e.target);
        modalStartLocation = modal.parent();
        modal.appendTo('body');

        $('body').addClass('modal-is-open');
    });

    $(document).on('hidden.bs.modal', function(e) {
        var modal = $(e.target);
        modal.appendTo(modalStartLocation);
        $('body').removeClass('modal-is-open');
    });
</script>

<script type="text/javascript">
    (function($) {
        'use strict';

        jQuery(document).on('ready', function() {

            $('a.page-scroll').on('click', function(e) {
                var anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top - 50
                }, 1500);
                e.preventDefault();
            });

        });


    })(jQuery);
</script>

</body>

</html>
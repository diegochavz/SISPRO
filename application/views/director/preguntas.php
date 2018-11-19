<div id="page_content">
      <div class="container-fluid">
          <div id="indice_pag">
            <p>Gestionar > <a href="<?=base_url();?>director/Preguntas">Preguntas</a></p>
            </div>
         <div id="cotenido_pag">
        <!-------------- CUADRO LISTADO PREGUNTAS------->

            <div class="cuadro_prin">

           <div id="cuadro_content">
            <div id="cuadro_uno">
                <p>Opciones Preguntas</p>
            </div>

            <div id="cuadro_dos">
                 <form>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Registrar</button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Ver Preguntas</button>
                 </form>
            </div>
            </div>


        </div>
<!--Ver Areas existentes para las preguntas-->
         <div id="indice_pag">
         <center><p>Menú de preguntas <a href="<?php echo base_url(); ?>director/Preguntas/ver_preguntas_director">(Ver Preguntas del director)</a></p></center>
         </div>

         <!--contenido areas-->
     <section id="noticias" class="info-section">
      <div class="container">
        <?php
$num_filas = ceil(count($todas_las_areas) / 3);
$cont      = 0;
for ($i = 0; $i < $num_filas; $i++) {?>

           <div class="row">
            <?php for ($i = 0; $i < 3 || $cont < count($todas_las_areas); $i++, $cont++) {?>

           <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="m-0"><a href="<?php echo base_url(); ?>director/Preguntas/ver_preguntas_area/<?=$todas_las_areas[$cont]->id?>"><?php echo $todas_las_areas[$cont]->nombre ?></a></h4>
              </div>
            </div>
          </div>

          <?php }
    ;?>
</div>

        <?php }?>
      </div>
    </section>
         <!--fin contenido areas-->
</div>
</div>
      </div>

   <!-------------VENTANA MODAL VER PREGUNTAS EN ESPERA----------------->
<div id="myModal2" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg ">
         <div class="modal-content modal_per ">
     <div class="reg_sim">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-header">

        <div id="reg_sim_titu_modal">
                <h3>Ver Preguntas de los docentes en Espera de su Aprobación</h3>
        </div>
      </div>
       <div class="modal-body">
    <!--------------------------------------------------------------------------->


        <!-------------- CUADRO LISTADO PREGUNTAS------->
        <?php if ($preguntas_espera) {
    ?>
        <div class="table_">
               <table class="table table-hover">
  <thead>
    <tr id="tit_table">
      <th scope="col">Id</th>
      <th scope="col">Creador</th>
      <th scope="col">Materia</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($preguntas_espera as $pregunta): ?>
      <tr>
      <th scope="row"><?php echo $pregunta->id; ?></th>
      <td><?php echo $pregunta->docente; ?></td>
      <td><?php echo $pregunta->area; ?></td>
      <td>
         <a href="<?php echo base_url(); ?>director/Preguntas/verDetalle/<?=$pregunta->id?>">Ver detalle</a><br>
        <a href="<?php echo base_url(); ?>director/Preguntas/aprobar_pregunta/<?=$pregunta->id?>">Aprobar</a>
      </td>
    </tr>
      <?php endforeach;?>

  </tbody>
</table>
</div>
<?php } else {?>
                  <center><p>No hay preguntas en espera de ser aprobadas.</p></center>
                  <?php
}?>
       </div>
</div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       </div>
</div>
          </div>
</div>

   <!---------------VENTANA MODAL REG PREGUNTAS------------------------->

         <div id="myModal" class="modal fade " role="dialog">
          <div class="modal-dialog modal-lg ">

        <!-- Modal content-->
    <div class="modal-content modal_per ">
     <div class="reg_sim">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-header">

        <div id="reg_sim_titu_modal">
                <h3>Registrar pregunta</h3>

        </div>
      </div>


       <div class="modal-body">
       <div id="reg_sim_content">

                <form>



<!--------------------EDITOR DE TEXTO------------------------------->


    <div class="panel_edit_text">
        <form  action="prueba.php" method="post" id="frm-test">
            <div class="form-group col-md-8">
                    <label for="inputState">Selecciona una materia</label>
                    <select id="inputState" class="form-control">
                        <option selected>Calculo diferencial</option>
                        <option>...</option>
                    </select>
            </div>

            <hr class="my-4">

            <div  class="form-group">
                <textarea id="txt-content" name="txt-content"></textarea>
            </div>

            <hr class="my-4">

            <div  class="form-group">
    <label for="inputState">Respuesta unica: &nbsp; &nbsp; &nbsp; </label>

            <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Si</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">No</label>
</div>

            </div>

            <hr class="my-4">
             <div  class="form-group">
                <label for="inputState">Ingresa las respuestas</label>
                     <div id="group_ques">
                          <input class="form-check-input" type="radio" name="radio_1" value="opt_circle_1">
                         <input class="op_preg"  type="text" name="opt_text_1">
                         <input type="button" id="add_kid()" onclick="agregar_pregunta()" value=" + " />
                     </div>

                </div>

             <input type="submit" class="btn btn_reg_pre" id="btn-enviar" value="Registrar">
                </form>
            </div>




   <!-------------------- FIN EDITOR DE TEXTO------------------------------->

</form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
              </div>
  </div>
</div>

   <!----------------FOOTER---------------------->
    <footer class="small text-center text-white-50">
      <div class="container">
        Copyright &copy; Ingenieria de software
      </div>
    </footer>

   <!-- Bootstrap core JavaScript -->
    <!--<script src="../vendor/jquery/jquery.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-------------------SCRIPT CORRESPONDIENTE AL PANEL DE TEXTO--------------------------------->
  <script type="text/javascript">
        $(document).ready(function(){
            $('#txt-content').Editor();

            $('#txt-content').Editor('setText', ['<p style="color:#6E6E6E;">Ingrese aquí el enunciado de su pregunta</p>']);

            $('#btn-enviar').click(function(e){
                e.preventDefault();
                $('#txt-content').text($('#txt-content').Editor('getText'));
                $('#frm-test').submit();
            });
        });
</script>

   <!---------------------RESPUESTAS DINAMICAS--------------------------->

   <script type="text/javascript">
    var i=1;
          function agregar_pregunta(){

              i++;
              var div=document.createElement('div');
              div.innerHTML='<input class="form-check-input" type="radio" name="radio_'+i+'" value="opt_circle_'+i+'"><input class="op_preg"  type="text" name="opt_text_'+i+'"><input type="button" id="add_kid()" onclick="agregar_pregunta()" value=" + " /><input type="button"  onclick="delete_pregunta(this)" value="-"/>'
              document.getElementById('group_ques').appendChild(div);
          }

          function delete_pregunta(div){
              document.getElementById('group_ques').removeChild(div.parentNode);
              i--;
          }
    </script>

   <!---------------------FIN RESPUESTAS DINAMICAS--------------------------->

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/template/js/grayscale.min.js"></script>


   <!-- Bootstrap core JavaScript-------------------------------------------------- -->
  </body>

</html>
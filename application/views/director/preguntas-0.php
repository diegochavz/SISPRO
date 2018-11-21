<?php
if ($tipo == "crear pregunta") {?>
<h3>Crear conjunto de preguntas</h3>
<form class="form-group" method="post" id="formCrearPregunta" action="<?php echo base_url(); ?>director/Preguntas/anadir?>" >

    <p>Insertar enunciado</p>
    <textarea name="enunciado" id="enunciado" rows="5" cols="40" placeholder="Esto es Opcional"></textarea>
    <p>Area de Conocimiento</p>
<select name="area">
    <?php foreach ($Areas as $area): ?>
    <option value="<?=$area->id;?>"><?=$area->nombre?></option>
    <?php endforeach?>
</select>
<p>Tipo de pregunta</p>
<select name="tipo" onchange="contenido_preguntas()" id="tipo_pregunta">
   <option value="sm">Seleccion Multiple</option>
   <option value="vf">Verdadero y Falso</option>
   <option value="pa">Pregunta abierta</option>
</select>
<p>Visibilidad</p>
<select name="visibilidad">
   <option value="publico">Publico</option>
   <option value="privada">Privada</option>
</select>
<h3>Menu de preguntas</h3>

     <p><b>Ingresar pregunta <?=$contador_preguntas?></b></p>
        <p>ingresar descripcion de la pregunta</p>
        <textarea name="descripcionPregunta" rows="3" cols="40"></textarea>



</div>


<button type="submit" id="guardarenviar">Guardar</button>
</form>
<button>Guardar Conjunto</button>

<center>Preguntas añadidas al conjunto</center>

<div id="conjunto">
    hola
</div>
<script type="text/javascript">
        var ruta = "<?php echo base_url(); ?>director/Preguntas/anadir?>";
        $(document).ready( function() {
            $('#formCrearPregunta').submit( function(e) {
                $.ajax({
                    url:  $(this).attr('action'),
                    type:"POST",
                    data: $(this).serialize(),
                    success:function(resp){
                     document.getElementById("conjunto").innerHTML+='<p>pregunta añadida</p>';
                     //$("#enunciado").remove();
                   //modificar elementos form
            }
        });
                e.preventDefault();
            });
        });
    </script>


<?php
}

?>
                    <!--fin-perfil-->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
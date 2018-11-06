 <!-- Content Wrapper. Contains page content -->
        <div style="min-height: 524px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <center> <div class="section-title text-center wow zoomIn">
                        <h2>PREGUNTAS</a></h2>
                 </div></center>
                <!--small>Editar</small-->
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!--ini-perfil-->
                   <?php
                        if($tipo == "general"){ //mostrar  vista general -> la misma del docente
                    ?>
                        <h1>Listado de preguntas</h1>
                    <a href="<?php echo base_url();?>director/Preguntas/ver_preguntas_director">Ver preguntas del director</a>
                    <?php
                        if(!$todas_las_areas){
                            echo "No existen areas registradas";
                        }else{
                         ?>
                         <center>Tabla de Areas</center>
                         <p>ver por:</p>
                         <?php
                         foreach ($todas_las_areas as $area):?>
                        <a href="<?php echo base_url();?>director/Preguntas/ver_preguntas_area/<?=$area->id?>"><?php echo $area-> nombre."  /  "; ?></a>
                         <?php  
                          endforeach;  
                        }
                        }else if($tipo == "gestion"){ //mostrar aprobacion de nuevas preguntas
                          ?>
                          <?php if($preguntas_espera){?>
                          <h3>Ver nuevas preguntas registradas por docentes de plan de estudios</h3>
                          <table id="example" class="table table-striped table-bordered nowrap tabla-preguntas-espera" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>docente a cargo</th>
                <th>Area de conocimiento</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($preguntas_espera as $pregunta):?>
            <tr>
                <td><?php echo $pregunta-> id;?></td>
                <td><?php echo $pregunta-> docente;?></td>
                <td><?php echo $pregunta-> area;?></td>

                <td>
                    <a href="#">Ver detalle</a>
                    <a href="<?php echo base_url();?>director/Preguntas/aprobar_pregunta/<?=$pregunta-> id?>">Aprobar</a>    
                                    </td>
                                        </tr>
                                        <?php endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                        <?php
                        }else{?>
                            <p>No hay preguntas en espera de ser aprobadas.</p>
                          <?php
                        }
                        }else if($tipo =="ver preguntas docente"){
                          ?>
VOY ACAAAAAAAAAA :P
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
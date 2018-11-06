 <!-- Content Wrapper. Contains page content -->
        <div style="min-height: 524px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <center> <div class="section-title text-center wow zoomIn">
                        <h2>GESTION DE ESTUDIANTES</a></h2>
                 
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
                    <!--form cambiar rol director-->
                   

                   <h3>Estudiantes vinculados al programa académico</h3>
            <?php if(!$estudiantes){
                echo "no hay estudiantes vinculados";
            }else{
                ?>
                   <table id="example" class="table table-striped table-bordered nowrap tabla-docentes-espera" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($estudiantes as $estudiante):?>
            <tr>
                <td><?php echo $estudiante-> id;?></td>
                <td><?php echo $estudiante-> codigo;?></td>
                <td><?php echo $estudiante-> nombre;?></td>

                <td>
                    <a href="#">Ver detalle</a>
                                    
                                    
                                    </td>
                                        </tr>
                                        <?php endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                                <?php }?>
                    <!--fin-perfil-->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
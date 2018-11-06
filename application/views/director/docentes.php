 <!-- Content Wrapper. Contains page content -->
        <div style="min-height: 524px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <center> <div class="section-title text-center wow zoomIn">
                        <h2>GESTION DE DOCENTES</a></h2>
                 
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
                    <form>
                        <h5>Asignar nuevo director</h5>
                        <p>al asignar a un docente vinculado al programa académico como nuevo director, tu rol pasará a ser docente. La sesión se cerrará y perderás tus previlegios como director de plan de estudios</p>
                        <label>Codigo del nuevo director</label><input type="text" name="nuevodirector">

                    </form>

                   <h3>Docentes nuevos en espera a ser aprobados</h3>
            <?php if(!$docentes_a){
                echo "no hay nuevos docentes";
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
             foreach ($docentes_a as $docente):?>
            <tr>
                <td><?php echo $docente-> id;?></td>
                <td><?php echo $docente-> codigo;?></td>
                <td><?php echo $docente-> nombre;?></td>

                <td>
                    <a href="<?php echo base_url();?>director/usuarios/Docentes/aprobar/<?php echo $docente-> id;?>">Aprobar</a>
                                    
                                    
                                    </td>
                                        </tr>
                                        <?php endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                                <?php }?>
                <h3>Docentes vinculados al programa académico</h3>
                <?php if(!$docentes_a2){
                echo "no hay nuevos docentes";
            }else{
                ?>
            <table id="example" class="table table-striped table-bordered nowrap tabla-docentes-aprobados" style="width:100%">
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
             foreach ($docentes_a2 as $docente):?>
            <tr>
                <td><?php echo $docente-> id;?></td>
                <td><?php echo $docente-> codigo;?></td>
                <td><?php echo $docente-> nombre;?></td>

                <td>
                    <a href="#">ver detalle</a>
                                    
                                    
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
 <!-- Content Wrapper. Contains page content -->
        <div style="min-height: 524px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><center> <div class="section-title text-center wow zoomIn">AREAS DE CONOCIMIENTO</a></div></center></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <!--ini-perfil-->
                        <?php
                        if($this->session->flashdata("error")){
                        echo $this->session->flashdata("error");
                        }else if($this->session->flashdata("bien")){
                        echo $this->session->flashdata("bien");
                        }
                        ?>
                   <h3>Registrar nueva area de conocimiento</h3>
                     <form id="Area" action="<?php echo base_url();?>Director/Areas/registrar" method="post">
                            <p class="login-box-msg">Nombre del area, no debe repetirse</p>
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Ingrese nombre area" name="nombreA" required>
                            <button type="submit" class="btn btn-danger btn-block btn-flat" style="border-radius: 3px;">Registrar nueva area</button>
                        </form>
            <?php if(!$todas_las_areas){
                echo "no hay areas de conocimiento registradas";
            }else{
                ?>
                   <table id="example" class="table table-striped table-bordered nowrap tabla-docentes-espera" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($todas_las_areas as $area):?>
            <tr>
                <td><?php echo $area-> id;?></td>
                <td><?php echo $area-> nombre;?></td>
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
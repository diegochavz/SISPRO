
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <?php if($est=="viewall"){?>
        <div style="min-height: 524px;">
            <!-- Content Header (Page header) -->
            <section style="background-color: #ffffff;" class="content-header">
                 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow zoomIn">
                        <h2>Simulacros <a href="#"  class="btn " data-toggle="modal" data-target="#exampleModal"><span style="color: red;" class="glyphicon glyphicon-plus"></span></a></h2>
                 
                    </div>
                </div>
            </div>
        </div>
                
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                   
                    <!--Datatable simulacro-->
                    <?php if($simulacros!=false){?>
                    <table id="example" class="table table-striped table-bordered nowrap tabla-simulacro" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Programa Académico</th>
                <th>Director de Programa</th>
                <th>Fecha Convocatoria</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($simulacros as $simulacro):?>
            <tr>
                
                   
                <td><?php echo $simulacro-> id;?></td>
                <td><?php echo $simulacro-> nombreProg;?></td>
                <td><?php echo $simulacro-> nombreDir;?></td>
                <td><?php echo $simulacro-> fecha;?></td>
                <td><?php echo $simulacro-> hora_ini;?></td>
                <td><?php echo $simulacro-> hora_fin;?></td>

                <td>
                                    
                                    <center><div class="btn-group">

                                        <!--visualizar categoria-->
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span></button><!--ventana modal  btn-view se usara para la peticion ajax-->

                                        <!--editar categoria-->
                                        <a href="<?php echo base_url();?>director/Simulacros/editar/<?php echo $simulacro-> id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a><!--btn-remove se usara para la peticion ajax-->

                                        <!--eliminar categoria-->
                                        <a href="<?php echo base_url();?>director/Simulacros/eliminar/<?php echo $simulacro-> id;?>" class="btn btn-danger btn-remove eliminar-simulacro"><span class="fa fa-remove"></span></a>

                                    </div> </center>   
                                    </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
            <?php
                   
                }
                else{?>
                <p><center>No existen simulacros registrados</center></p>
                <?php } ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>

        <?php
    }else if($est="editS"){?>


 <div style="min-height: 524px;"">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              
          
            <section class="content">
               
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow zoomIn">
                        <h1>Editar Simulacro</h1>
                        <span></span>
                        
                    </div>
                </div>
            </div>

            <div class="row">               
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        General 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    
            <form class="form-group" method="post" id="formRegistroS" action="<?php echo base_url();?>director/Simulacros/editarDatosBase/<?php echo $simulacroid;?>">

            <div class="container-fluid">
                <div class="row">
                    <center><div class="col-md-6"><p><b>Director: </b><?php echo $user-> nombre;?></p></div></center>
                   <center> <div class="col-md-6"><p><b>Programa: </b><?php echo $user-> programa;?></p></div></center>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label><b>Fecha de Inicio: </b></label>
                    </div>
                    <div class="col-md-10">
                    <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputPassword1" 
                    value="<?php echo $info_simulacro-> fecha;?>" name="fecha" required>
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-2"><label><b>Hora Inicial: </b></label></div>
                    <div class="col-md-4">
                        
                        <div class="form-group">
                    <input type="time" class="form-control" value="<?php echo $info_simulacro-> hora_ini;?>" id="exampleInputPassword1" name="horaI" required>
                  </div>
                    </div>
                    <div class="col-md-2"> <label><b>Hora Final: </b></label></div>
                    <div class="col-md-4">
                        
                        <div class="form-group">
                    <input type="time" class="form-control" value="<?php echo $info_simulacro-> hora_fin;?>" id="exampleInputPassword1" name="horaF" required>
                  </div>
                    </div>
                </div>
            </div>
        
        <center><button type="submit" class="btn btn-danger">Editar Simulacro</button></center>

        </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Areas de Conocimiento 
                                    </a>
                                </h4>

                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <?php if($this->session->flashdata("error")):?><!--si hay un mensaje de usuario y contraseña incorr-->
                  <div id="mensaje" style="text-align: center;" class="alert alert-danger">
                    <p><?php echo ($this->session->flashdata("error"));?></p>
                  </div>
                <?php endif;?>
                <a href="#">Genarar pdf examen</a>
                            <center><form class="form-inline" action="<?php echo base_url();?>director/Simulacros/registroAreaSimulacro/<?php echo $simulacroid;?>" method="post">
                                    <label>Registrar Area a Evaluar: </label>
                                       <div class="form-group has-feedback">
                  
                  <!--todas las areas-->
                    <select class="form-control" name="areaS">
                    <?php if($areasNo){?>
                        <!--listar las areas que aun no han sido registradas dentro del simulacro-->
                    <?php foreach ($areasNo as $n):?>
                      <option class="form-control"><?=$n-> nombre;?></option>
                       
                       <?php 
                       endforeach;?>
                                <?php }else{?>
                      <option class="form-control" selected>has seleccionado todas las areas</option>
                      <?php }?>
                    </select>
                </div>
                <?php 
                //if(count($areasNo) > count($areas)){?>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-plus"></span></button>
                                   </form> </center><br>
                                   <?php if($areas!=false){?>

                                      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Area</th>
                <th>Nombre</th>
                <th>Numero de Preguntas</th>
                <th>Opciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areas as $area):?>
            <tr>
                
                <?php //numero de preguntas por area:
                $numPreguntas=0;
                if($preguntas!=false){
                foreach ($preguntas as $pregunta) {
                    if($pregunta-> id_area == $area-> id ){
                        $numPreguntas++;
                    }
                }
              }
                ?>
                   
                <td><?php echo $area-> id;?></td>
                <td><?php echo $area-> nombre;?></td>
                <td><?php echo $numPreguntas?></td>

                <td>
                                    
                                    <center><div class="btn-group">

                                        <!--visualizar categoria-->
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span></button><!--ventana modal  btn-view se usara para la peticion ajax-->

                                        <!--editar categoria-->
                                        <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a><!--btn-remove se usara para la peticion ajax-->

                                        <!--eliminar categoria-->
                                        <a href="#" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>

                                    </div> </center>   
                                    </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        <?php }else{
                            ?>
                        <p><center>No hay Areas de conocimiento registradas para el simulacro</center></p>
                        <?php }?>
                                </div>
                            </div>
                        </div>


                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Estudiantes 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Registrar estudiante al simulacro</p>
                                      <form id="est-s" action="#" method="post">
                            <p class="login-box-msg">Ingrese codigo del estudiante</p>
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Ingrese codigo" name="codigo" required>
                            <button type="submit" class="btn btn-danger btn-block btn-flat" style="border-radius: 3px;">Registrar estudiante</button>
                        </form>
                                  <?php
                                    if(!$estudiantes){ echo "No hay estudiantes registrados en el simulacro";
                                }else{
                                  ?>
                                  <table class="table table-bordered tabla-estudiantes-s">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Opciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante):?>
            <tr>
                   
                <td><?php echo $estudiante-> id;?></td>
                <td><?php echo $estudiante-> codigo;?></td>
                <td><?php echo $estudiante-> nombre;?></td>
                <td>     
                                    <center><div class="btn-group">
                                        <!--visualizar-->
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span></button>
                                        <!--eliminar-->
                                        <a href="#" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>

                                    </div> </center>   
                                    </td>
                                        </tr>
                                        <?php endforeach; ?>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->     
            </div><!--- END ROW -->         
        </div>
              <style type="text/css">
                  .template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    /*box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);*/
    margin-bottom: 0;
    padding: 30px;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #FE3F3F none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 30px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
    background: #FE3F3F none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 50%;
    /*box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);*/
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    left: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 55px;
}
#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-left: 1px dashed #8c8c8c;
    padding-left: 25px;
}
              </style> 
            </section>
            <!-- /.content -->
        </div>
    <?php }?>
        <!-- /.content-wrapper -->

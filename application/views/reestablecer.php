<!DOCTYPE html>
<!-- para añadir preguntas con jquery http://jsfiddle.net/qBURS/2/

insertar componentes dinámicamente     https://jsfiddle.net/jaredwilli/tZPg4/4/
//iconos https://www.flaticon.es/familia/essential-color/rojo

-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISPRO | Reestablecer contraseña</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- base_url() = http://localhost/ventas_ci/-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.css">
<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/template/dist/img/init.png"/>
</head>
<body class="hold-transition login-page">


    <div class="login-box">
        <div class="login-logo">
            <h2 style="color: #ffffff; text-shadow: 2px 5px 5px #000000;">SISTEMA PARA PRUEBAS SABER PRO</h2>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 5px;">
        <div class="formularios-ini active">

            <?php if($this->session->flashdata("error")):?><!--si hay un mensaje de usuario y contraseña incorr-->
                  <div id="mensaje" style="text-align: center;" class="alert alert-danger">
                    <p><?php echo ($this->session->flashdata("error"));?></p>
                  </div>
                <?php endif;?>
            <form id="login" name="Formularior" action="<?php echo base_url();?>AutenticarLogin/reestablecerPass/<?=$this->uri-> segment(3);?>" method="post" >
            <p class="login-box-msg"><b><?php echo $nombre?>: </b>Reestablecer Contraseña</p>
                <div class="form-group has-feedback">
                    <input type="password" id="antigua"  class="form-control" placeholder="Contraseña Antigua" name="ca"  onChange="javascript:verificarp" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <p id="nada"></p>
               
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña Nueva" name="cn" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Repita Contraseña Nueva" name="cnn" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Reestablecer contraseña</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            

             </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--script type="text/javascript">
   function verificarA(){
    var x = document.getElementById("antigua").value;
    var y ='<?php echo $pass?>';

    <?php
'<script type="text/javascript">;
    var mivarJS="Asignado en JS";
    document.writeln (mivarJS);
</script>';
    ?>
    
    document.getElementById("nada").innerHTML = y;
   }
</script-->
</body>
</html>

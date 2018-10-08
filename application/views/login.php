<!DOCTYPE html>
<!-- para añadir preguntas con jquery http://jsfiddle.net/qBURS/2/

insertar componentes dinámicamente     https://jsfiddle.net/jaredwilli/tZPg4/4/

-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISPRO UFPS | INICIO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- base_url() = http://localhost/ventas_ci/-->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <!--<link rel="stylesheet" type="text/css" href="assets/template/dist/css/AdminLTE.css">-->
    <link rel="stylesheet"  href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.css" type="text/css">
   <link href="https://ww2.ufps.edu.co/assets/img/ico/favicon.ico" rel="Shortcut icon"> 
   <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    </head>
    
    

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2 >PRUEBAS SABER PRO</h2> </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 6px;">
            <div class="formularios-ini active" >
                <?php if($this->session->flashdata("error")):?>
                    <!--si hay un mensaje de usuario y contraseña incorr-->
                    <div id="mensaje">
                        <p>
                            <?php echo ($this->session->flashdata("error"));?>
                        </p>
                    </div>
                    <?php endif;?>
                       <section id="list" style="border-radius: 6px;">
                        <ul class="contenedor-tabs">
                            <li class="tab tab-segunda active" ><a class="active" style="border-radius: 3px;" href="#" onclick="formLogin()" id="registrar">Iniciar Sesión</a></li>
                            <li class="tab tab-primera"><a href="#" style="border-radius: 3px;" onclick="formRegistro()" id="registrar">Registrarse</a></li>
                        </ul>
                </section>
                        <form id="login" action="<?php echo base_url();?>AutenticarLogin/login" method="post">
                            <p class="login-box-msg">Introduzca sus datos de ingreso</p>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Código" name="codigo" required> <span class="glyphicon glyphicon-user form-control-feedback"></span> </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" style="border-radius: 3px;" placeholder="Contraseña" name="contraseña" required> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
                               

                <p style="text-align: center;"> <a href="#" onclick="formReestablecer()" style="text-decoration-line: underline;"  id="registrar">¿Olvidaste tu contraseña?</a></p>
                            <p style="text-align: center;">¿Aún no tienes cuenta? <a href="#" onclick="formRegistro()" style="text-decoration-line: underline;" id="registrar">Regístrate</a></p>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-danger btn-block btn-flat" style="border-radius: 3px;">Iniciar Sesión</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <!--formulario registro-->
                        <form id="registro" style="display: none;" action="<?php echo base_url();?>AutenticarLogin/registro" method="post">
                            <p class="login-box-msg">Introduzca sus datos de Registro
                            
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Nombre" name="nombreR" required> <span class="glyphicon glyphicon-user form-control-feedback"></span> </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Código" name="codigoR" required> <span class="glyphicon glyphicon-education form-control-feedback"></span> </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" style="border-radius: 3px;" placeholder="Correo" name="correoR" required> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
                            <div class="form-group has-feedback">
                                <!--listando programas academicos-->
                                <select class="form-control" name="programaR" style="border-radius: 3px;">
                                    <option style="color:#B0AEAE;" selected disabled>Programa Académico</option>
                                    <?php if($programas!= false):?>
                                        <?php foreach ($programas->result() as $programa):?>
                                            <option class="form-control">
                                                <?=$programa->nombre;?>
                                            </option>
                                            <?php endforeach;?>
                                                <?php endif;?>
                                </select>
                            </div>
                            <div class="form-group has-feedback radio-green" style="text-align: center;">
                                <p>
                                    <input type="radio" value="docente" onclick="deshabilitaropc();" name="tipo_usuario" checked="checked" style="margin-right:15px;">Docente
                                    <input type="radio" onclick="habilitaropc();" value="estudiante" name="tipo_usuario" style="margin-right:15px; margin-left:20px; "> Estudiante</p>
                            </div>
                            <div class="form-group has-feedback " id="nperiodos" style="display: none;">
                                <input type="text" class="form-control" placeholder="Semestre" name="semestreR"> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" style="border-radius: 3px;" placeholder="Contraseña" name="contraseñaR" required> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
                           
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-danger btn-block btn-flat" style="border-radius: 3px;">¡Regístrate!</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <script>
        function deshabilitaropc() {
            document.getElementById('nperiodos').style.display = "none";
        }

        function habilitaropc() {
            document.getElementById('nperiodos').style.display = "block";
        }

        function formRegistro() { //mostrar

            document.getElementById('login').style.display = "none";
            document.getElementById('registro').style.display = "";
            //document.getElementById('mensaje').style.display = "none";
        }

        function formLogin() { //mostrar
            document.getElementById('registro').style.display = "none";
            document.getElementById('login').style.display = "block";
            document.getElementById('mensaje').style.display = "none";
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sispro Docente</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    <link href="https://ww2.ufps.edu.co/assets/img/ico/favicon.ico" rel="Shortcut icon">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>assets/template/dist/css/estilos.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <!--selectpicker-->
    <script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <!--integrar editor de texto  https://ckeditor.com/ckeditor-4/download/#-->
</head>

<body class="hold-transition skin-blue ">
    <!-- Site wrapper -->
 
        <header class="main-header">
            <!-- Logo -->

            <a style="background-color: #C10303" href="../../index2.html" class="logo">
             
                <span class="logo-lg"><b class="titulo">SISPRO</b><i class="fa fa-book"></i></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            
               <nav class="navbar navbar-default navbar-static-top " role="navigation" role="navigation" style="background-color: #C10303">
                <!-- Sidebar toggle button-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        


                        <li>
                            <a href="#">
                            <i class="fa fa-sticky-note-o"></i> <span>Simulacros</span>
                        </a>
                        </li>
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/template/dist/img/usuario.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata("nombre")?></span>
                            </a>
                

                            <ul class="dropdown-menu">
                                <li>
                            <a href="../widgets.html" style="text-align: center;">
                            <i class="fa fa-home"></i> <span>Perfil</span>
                        </a>
                        </li>
                                <li>
                                  
                                        
                                    <a style="text-align: center;" href="<?php echo base_url();?>AutenticarLogin/logout"><i class="fa fa-power-off"></i><span>  Cerrar Sesión</span></a>
                                
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>SISPRO - Preguntas</title>

    <!-- Bootstrap core-->
    <link href="<?php echo base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/dir_pre_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-------editor de texto------->
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery-1.12.0.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/editor.js"></script>	
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/template/css/editor.css">
  </head>

  <body>
    <!-----------MENU--------------->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a  class="navbar-brand js-scroll-trigger" href="#page-top">
    <img src="<?php echo base_url(); ?>assets/template/img/logo_blanco.png" alt="">        
            
            
        </a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">  
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" class="dropdown-toggle" data-toggle="dropdown">Materias</a>
              <ul class="dropdown-menu">
                 <li>
                        <a href="<?=base_url();?>director/Areas">
                            <i class="fa fa-user-plus"></i> <span>Ver Areas de conocimiento</span>
                        </a>
                 </li>
                 <li>
                        <a href="<?=base_url();?>director/Areas/misAreas">
                            <i class="fa fa-user-plus"></i> <span>Mis Areas</span>
                        </a>
                 </li>
              </ul>
            </li>
            
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url();?>director/Preguntas/gestionar">Preguntas</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url();?>director/Simulacros">Simulacros</a>
            </li>
            
            
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url();?>director/usuarios/Docentes">Docentes</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?=base_url();?>director/usuarios/Estudiantes">Estudiantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>director/Perfil">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>AutenticarLogin/logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div id="page_content">
      
<div class="container-fluid">
    <div id="indice_pag">          
        <p>Gestionar > Preguntas</p>
    </div>     
 
    <!--------------------------------------------------------------------------->
    
    <div id="cotenido_pag">          
      <!-------------CUADRO------------------->
    <div class="cuadro_prin">
                  
           <div id="cuadro_content">
            <div id="cuadro_uno">
                <p>Registrar pregunta</p>
            </div>
            
            <div id="cuadro_dos">
                
                    
              
               	 <form>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Registrar</button>
                 </form>
            </div>
            </div>
        </div>
        
        <!--------------LISTADO PREGUNTAS------->
        <div id="indice_pag">         
        <p>Ver Preguntas de los docentes en Espera de su Aprobación</p>
        </div>

        <?php if($preguntas_espera) {
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
                  <p>No hay preguntas en espera de ser aprobadas.</p>
                  <?php
}    ?>
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
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
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
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/grayscale.min.js"></script>
   
   
   <!-- Bootstrap core JavaScript-------------------------------------------------- --> 
  </body>

</html>
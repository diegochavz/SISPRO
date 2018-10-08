<?php }

				/*else if($est=="creacion_Enunciado"){
					?>
					<h2><center>Insertar Enunciado</center></h2>

					<form class="form-group" method="post" id="formRegistroS" action="<?php echo base_url();?>docente/Preguntas/registrarEnunciado">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-1"><label>Area: </label></div>
								<div class="col-md-11">
									<select class="form-control form-control-sm" name="areaEnunciado">
										<?php foreach ($areas_doc as $ad) {?>
										<option><?=$ad-> nombre;?></option>
										<?php }?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<br>
									<center><label>Cuerpo del Enunciado</label></center> <br>
									<textarea cols='80' id='editor1' name='contenidoEnunciado' rows='10'>
									</textarea> <br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<center><button type="submit" class="btn btn-danger">Registrar Enunciado</button></center>
								</div>
							</div>
							<script type='text/javascript'>
					CKEDITOR.replace ('editor1'); //integrar editor
				</script>

			</div> 
		</form>



		<?php
	}else if($est=="creacion_pregunta"){?>
	<h2><center>Insertar Pregunta</center></h2>
	<br>
	<form class="form-group" method="post" id="formRegistroS" action="<?php echo base_url();?>docente/Preguntas/registrarPregunta/<?=$id_pregunta?>" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5">
					<div class="row">

						<div class="col-md-2">
							<center><label>Tipo: </label></center>
						</div>
						<div class="form-group has-feedback " style="text-align: center;">
							<div class="col-md-4">

								<input type="radio" value="seleccion" onclick="seleccionMultiple();" name="tipo_pregunta" checked="checked"><span>Seleccion Múltiple</span>
							</div>
							<div class="col-md-4">
								<input type="radio" onclick="vericidad();" value="vericidad" name="tipo_pregunta"> <span>Verdadero o falso</span>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-4">
				 <div class="row">
					<div class="col-md-2">
						<label>Area: </label>
					</div>
					<div class="col-md-10">
					 <select class="form-control form-control-sm" name="areaP">
						<?php foreach ($areas as $ad) {?>
						<option value="<?=$ad->id?>"><?=$ad-> nombre;?></option>
						<?php }?>
					</select> 
				</div>
			</div>

		</div>
		<div class="col-md-3">
		   <center> <a href="#"  class="btn btn-danger" data-toggle="modal" data-target="#pregEnunc">Relacionar a un Enunciado</a> </center>
	   </div>
   </div>
   <div class="row">
	<div class="col-md-12">
		<br>
		<center><label>Cuerpo de la Pregunta</label></center> <br>
		<textarea cols='80' id='editor2' name='contenidoPregunta' rows='5' required>
		</textarea> <br>
	</div>
</div>
<div >
	<center><p><?php if($Enunciado_rel!=""){?>

		<button type="button" style="color: red;" data-toggle="modal" data-target="#vpe" class="btn btn-link"><center><b>Enunciado Relacionado:</b> <?php echo $Enunciado_rel-> id;?></p></center></button><?php }?>
		<div class="row">
			<div class="col-md-12" id="opcionesRespuesta"  style="display: block">
				<center><h3>Opciones de respuesta<a href="#"  class="btn " data-toggle="modal" data-target="#RegOpc"><span style="color: red;" class="glyphicon glyphicon-plus"></span></a></h3></center> <br>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="opcionesRespuesta2" style="display: block">

				<?php if($opciones != false){?>
				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Contenido</th>
							<th>Correcta</th>
							<th>Justificación</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<?php 

							foreach ($opciones as $opcion) {

								?>
								<td><?=$opcion-> descripcion ?></td>
								<td><?=$opcion-> correcta ?></td>
								<td><?=$opcion-> justificacion ?></td>

								<td>

									<center><div class="btn-group">

										<a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a><!--btn-remove se usara para la peticion ajax-->

										<!--eliminar pregunta-->
										<a href="#" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>

									</div> </center>   
								</td>

							</tr>
							<?php }?>
						</tbody>

					</table>
					<?php }else{?>
					<center> <p>No existen Opciones de Respuesta registradas</p></center>
					<?php }?>
					<br>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
			  <!---center><button type="submit" class="btn btn-danger" <?php if($opciones == false || count($opciones) < 4){?> disabled  <?php }?> >Guardar</button></center-->
			  <center><button type="submit" class="btn btn-danger" >Guardar</button></center>
		  </div>

		  <div class="col-md-6">
			  <center><a href="<?php echo base_url();?>docente/Preguntas/cancelar/<?php echo $id_pregunta;?>"  class="btn btn-danger">Cancelar</a></center>
		  </div>
	  </div>

  </div>
  <script type='text/javascript'>
					CKEDITOR.replace ('editor2'); //integrar editor
				</script>
			</div>

		</form>
		<?php } */?>


		<!--modal insertar opcion-->

<div class="modal fade" id="RegOpc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		 <center><h4 class="modal-title" id="exampleModalLabel">REGISTRAR OPCION</h4></center> 

	 </button>
 </div>
 <div class="modal-body">
	 <form class="form-group" method="post" id="formRegistroS" action="<?php echo base_url();?>docente/Preguntas/registrarOpcion/<?php echo $id_pregunta?>">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"><label>Descripcion </label></div>
				<div class="col-md-10"> 
					<!--div class="form-group has-feedback">
						<input type="text" class="form-control" style="border-radius: 3px;" name="descripcion_o" required> </div-->
						<textarea class="form-control" id="exampleTextarea" name="descripcion_o" rows="3"></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-2"><label>Estado </label></div>
					<div class="col-md-10"> 
						<select class="form-control" name="estado_o">
						  <option value="si">Correcta</option>
						  <option value="no">Incorrecta</option>
					  </select>
				  </div>
			  </div>
			  <br>
			  <div class="row">
				<div class="col-md-2"><label>Justificación (opcional) </label></div>
				<div class="col-md-10"> 
					<!--div class="form-group has-feedback">
						<input type="text" class="form-control" style="border-radius: 3px;" name="descripcion_o" required> </div-->
						<textarea class="form-control" id="exampleTextarea" name="justificacion_o" rows="3"></textarea>
					</div>
				</div>

			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-danger">Registrar</button>
		</form>
	</div>
</div>
</div>
</div>

<!--Modal relacionar a enunciado-->

<div class="modal fade" id="pregEnunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<center><h4 class="modal-title" id="exampleModalLabel">RELACIONAR UN ENUNCIADO</h4></center> 
	</div>
	<div class="modal-body">
		<?php if($enunciados!=false){?>
		<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
		 
			<thead>
				<tr>
					<th>Id Enunciado</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<?php 
					
					foreach ($enunciados as $enunciado) {

						?>
						<td><center><?=$enunciado-> id ?></center></td>

						<td>

							<center><div class="btn-group">

								<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-eye-open"></span></a><!--vista previa del enunciado-->

								<!--eliminar pregunta-->
								<a href="<?php echo base_url();?>docente/Preguntas/relacionarEnunciadoPregunta/<?=$id_pregunta?>/<?=$enunciado-> id?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-check"></span></a><!--relacionar enunciado-->

							</div> </center>   
						</td>

					</tr>
					<?php }?>
				</tbody>

			</table>
			<?php }else{?>
			<center><p>No existen Enunciados creados</p></center>
			<?php }?>
		</div>
	  <!---div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	</div-->
</div>
</div>
</div>

<!--Modal vista previa enunciado-->
<div class="modal fade" id="vpe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<center><h4 class="modal-title" id="exampleModalLabel"><b>VISTA PREVIA</b> Enunciado
		 <?php if($Enunciado_rel!=""){
			echo $Enunciado_rel -> id;
		}?></h4></center> 
	</div>
	<div class="modal-body">
		<center><?php if($Enunciado_rel!=""){
			echo $Enunciado_rel -> contenido;
		}?></center>
	</div>
	
</div>
</div>
</div>





<script type="text/javascript">
	function seleccionMultiple() {
		document.getElementById('opcionesRespuesta').style.display = "block";
		document.getElementById('opcionesRespuesta2').style.display = "block";    
	}
	function vericidad(){
	 document.getElementById('opcionesRespuesta').style.display = "none";
	 document.getElementById('opcionesRespuesta2').style.display = "none";
 }
</script>

<?php
//mugre controller

	/*
	

	public function registrarPregunta($id_p){
		$id=$this->session->userdata("id");
		$tipoP = $this->input->post("tipo_pregunta");
		if($tipoP=="vericidad"){ //borrar todas las opc de respuesta y poner verdadero y falsp
			$this-> Preguntas_model->generarVF($id_p);
		}
		$data['id_area']=(int) $this->input->post("areaP");
		$data['descripcion']= $this->input->post("contenidoPregunta");
		$data['estado']="En espera";

		$this-> Preguntas_model->actualizarDatosPregunta($data, $id_p);

		redirect(base_url()."docente/Preguntas");




	}
	public function registrarEnunciado(){ 
		
		$id=$this->session->userdata("id");
		$area= $this-> Areas_model->getArea($this->input->post("areaEnunciado"));
		$cuerpoE= $this->input->post("contenidoEnunciado");

		$data['contenido'] =$cuerpoE;
		$data['id_area'] =$area;
		$data['id_Docente'] =$id;
		$this-> Preguntas_model->crearEnunciado($data);

		redirect(base_url()."docente/Preguntas/Exito");

	}

	public function Exito(){
		$this->load->view('docente/header');
		

		$id=$this->session->userdata("id");
		//$programa= $this-> Usuarios_model->getUsuarioPrograma($id); //progran
		$data['preguntas']= $this-> Preguntas_model->getPreguntas($id);
		$data['user']= $this-> Usuarios_model->getDirectorB($id); //datos basicos del user
		$data['est']= "general";
		$areas = $this-> Usuarios_model-> getAreasDocente($id);

		if(!$areas){
			$data['crear']= false;
			$this->session->set_flashdata("error", "Debes Registrar Areas de Conocimiento para Poder Crear Preguntas"); 
		}else{
			$data['crear']= true;
		}

		$sucess= $this->uri-> segment(3);

		if($sucess == "Exito"){
			$this->session->set_flashdata("bien", "Enunciado registrado exitosamente"); 
		}

		$this->load->view('docente/preguntas', $data);
		$this->load->view('layouts/footer');
	}

	public function cancelar($id_pregunta){ //eliminar todos los registros de la pregunta con las opciones

	}

	public function registrarOpcion($id_pregunta){
		$id=$this->session->userdata("id");
		$id_pregunta= $this->uri-> segment(4);

		$data['id_pregunta'] = $id_pregunta;
		$data['descripcion'] = $this->input ->post("descripcion_o");
		$data['correcta'] = $this->input ->post("estado_o");
		$data['justificacion'] = $this->input ->post("justificacion_o");

		$this-> Preguntas_model->registrarOpcion($data);

		redirect(base_url()."docente/Preguntas/crearPregunta/".$id_pregunta);
		 
	}

	public function relacionarEnunciadoPregunta($idPregunta, $idEnunciado){
		$data['id_enunciado']= $idEnunciado;
		$this->Preguntas_model->actualizarEnunciadoPregunta($data, $idPregunta);

		redirect(base_url()."docente/Preguntas/crearPregunta/".$idPregunta);
	}*/


?>
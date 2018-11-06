<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Simulacros_model");
		$this->load->model("Usuarios_model");

		if(!$this->session->userdata("login")) {  //si no se ha iniciado sesion "login" -> es la variable creada en Auth var $data
			redirect(base_url());
		}  
		 
	}

	public function index()
	{
		$this->load->view('director/header');
		
		$id=$this->session->userdata("id");
		//cargar todos los docentes del programa académico que aún no han sido aprobados
		$programa =  $this-> Usuarios_model->getUsuarioPrograma($id); //programa academico al cual pertenece al usuario
		$data['docentes_a'] = $this-> Usuarios_model->docentes_en_espera($programa, "espera");
		//cargar los docentes vinculados a un programa académico (docentes de planta)
		$data['docentes_a2'] = $this-> Usuarios_model->docentes_en_espera($programa, "aprobado");
		$this->load->view('director/docentes', $data);
		$this->load->view('layouts/footer', $data);


	}

	public function aprobar(){
		$id_docente= $this->uri-> segment(5);
		$this-> Usuarios_model->aprobar_nuevo_docente($id_docente);
		redirect(base_url()."director/usuarios/Docentes");

	}
}
?>
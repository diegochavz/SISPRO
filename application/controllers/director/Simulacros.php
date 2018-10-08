 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulacros extends CI_Controller {

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
		//$programa= $this-> Usuarios_model->getUsuarioPrograma($id); //progran
		$data['simulacros']= $this-> Simulacros_model->getSimulacros();
		$data['user']= $this-> Usuarios_model->getDirectorB($id);
		$data['est']= "viewall";
		$this->load->view('director/simulacros', $data);
		$this->load->view('layouts/footer', $data);


	}

	public function registrar(){ 
		$id=$this->session->userdata("id");
		$sim['id_director'] =$id;
		$sim['fecha'] =$this->input ->post("fecha");
		$sim['hora_ini'] =$this->input ->post("horaI");
		$sim['hora_fin'] =$this->input ->post("horaF");

		$res=$this-> Simulacros_model->registrar($sim);

		redirect(base_url()."director/Simulacros");
	}

	public function editar(){
		$id= $this->uri-> segment(4);
		$idUser=$this->session->userdata("id");
		$data['user']= $this-> Usuarios_model->getDirectorB($idUser);
		$areas = $this-> Simulacros_model->getAreasSimulacro($id); //listar las areas del simulacro
		$data['areas'] = $areas; //areas registradas en el simulacro
		$data['areasNo'] = $this-> Simulacros_model->getAreasNoRegistradas($id); //areas no registradas en el simulacro
		//$data['estudiantes']= $this-> Simulacros_model->getEstudiantesSimulacro($id);
		$data['preguntas']= $this-> Simulacros_model->getPreguntasSimulacro($id); //listar todas las preguntas con su area de conocimiento de cada una y el profesor encargado

		//$data['simulacro'] = $this-> Simulacros_model->getSimulacro($id)
		$data['est']= "editS";
		$data['simulacroid']= $id;
        if($this->uri-> segment(5)=="n"){
        	$this->session->set_flashdata("error", "todas las areas están registradas");
        }
		$this->load->view('director/header');
		
		$this->load->view('director/simulacros', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function registroAreaSimulacro(){
		$area=$this->input ->post("areaS");
		$id= $this->uri-> segment(4);

		if($area=="has seleccionado todas las areas"){
			redirect(base_url()."director/Simulacros/editar/".$id."/n");
		}else{
			$this-> Simulacros_model->registroAreaSimulacro($area, $id);
			redirect(base_url()."director/Simulacros/editar/".$id);
		}
	}
}
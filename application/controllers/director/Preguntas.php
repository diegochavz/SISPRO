<?php
						//PERFIL DIRECTOR
defined('BASEPATH') OR exit('No direct script access allowed');

class Preguntas extends CI_Controller { //autenticar

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->model("Preguntas_model");
		$this->load->model("Areas_model");
	}

	public function index()
	{
		$this->load->view('director/header');
		$data['tipo'] = "general";

		$id=$this->session->userdata("id");
		$data['todas_las_areas'] = $this-> Areas_model->getAreas(); //todas las areas
		$data['preguntas']= $this-> Preguntas_model->getPreguntas($id); //preguntas del docente
		$data['user']= $this-> Usuarios_model->getDirectorB($id); //datos basicos del user
		$data['est']= "general";
		$areas = $this-> Usuarios_model-> getAreasDocente($id);

		if(!$areas){
			$data['crear']= false;
			$this->session->set_flashdata("error", "Debes Registrar Areas de Conocimiento para Poder Crear Preguntas"); 
		}else{
			$data['crear']= true;
		}
		$this->load->view('director/preguntas', $data);
		$this->load->view('layouts/footer');

	}

	public function aprobar_pregunta(){//aprobar las preguntas realizadas por un docente
		$id_pregunta= $this->uri-> segment(4);
		$this-> Preguntas_model->aprobarPregunta($id_pregunta);
		redirect(base_url()."director/Preguntas/gestionar");
	}

	public function ver_preguntas_director(){
		$this->load->view('director/header');
		$id=$this->session->userdata("id");
		$data['tipo'] = "ver preguntas docente";
		$data['preguntas']= $this-> Preguntas_model->getPreguntas($id);
		$this->load->view('director/preguntas', $data);
		$this->load->view('layouts/footer');
	}

	public function ver_preguntas_area(){
		
	}

	public function gestionar(){//cargar vista aprobación de preguntas
		$this->load->view('director/header');
		$id=$this->session->userdata("id");
		
		$programa =  $this-> Usuarios_model->getUsuarioPrograma($id);
		$data['tipo'] = "gestion";
		//cargar preguntas de los profesores de ingenieria de sistemas que aun no han sido aprobadas
		$data['preguntas_espera'] = $this-> Preguntas_model-> get_preguntas_programa($programa);
		$this->load->view('director/preguntas', $data);
		$this->load->view('layouts/footer', $data);
	}

    //cargar vista creacionPregunta
	public function crearPregunta(){ 
		$this->load->view('docente/header');
		$id=$this->session->userdata("id");
		
		$data['est']= "creacion_pregunta";
		$this->load->view('docente/preguntas/creacion_preguntas', $data);
		$this->load->view('layouts/footer');
	}

}
?>
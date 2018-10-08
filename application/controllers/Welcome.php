<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		//cargar programas academicos registrar

		if($this->session->userdata("login")) {  //ya se inicio sesion
			$rol = $this->session->userdata("rol");
			redirect(base_url().$rol."/Dashboard");
		}  else{
			$res ['programas']=$this->Usuarios_model->cargarProgramas(); 
			$this->load->view('login', $res); //cargar vista login

		} 


		

	}
}

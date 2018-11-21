<?php
						//PERFIL DIRECTOR
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller { //autenticar

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$this->load->view('director/header');

		$id=$this->session->userdata("id");
		$rol=$this->session->userdata("rol");
		$v=$this-> Usuarios_model -> cargarInfoPerfil($id, $rol);
		$data['info'] = $v;
		$data['programa'] = $this-> Usuarios_model -> getProgramaNombre($v-> id_programa);
		
		$this->load->view('director/perfil', $data);
	}
	}
?>
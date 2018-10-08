<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulacros_model extends CI_Model {

public function getSimulacros(){ //todos los simulacros de los programas académicos
	     $this->db->select('s.id, d.nombre AS nombreDir, s.fecha, s.hora_ini, s.hora_fin, p.nombre AS nombreProg');
		 $this->db->from('simulacro s');
		 $this->db->join('usuario d', 'd.id=s.id_director');
		 $this->db->join('programa_academico p', 'p.id=d.id_programa');
		 
		 //$this->db->where('s.id', $id );
	

		 $consulta=$this->db->get();
			 if($consulta->num_rows() > 0){
				return $consulta->result();
			} return false;
}

public function registrar($sim){
	return $this->db->insert("simulacro", $sim);
}

public function getAreasSimulacro($id){ //listar areas de los simulacros
		$this->db->select('a.id, a.nombre');
		$this->db->from('area_simulacro as');
		$this->db->join('area a', 'a.id= as.id_area');
		$this->db->where("as.id_simulacro", $id);
		 $resultados = $this-> db->get(); 
		 
		 if($resultados->num_rows() > 0){
			return $resultados->result();
		}return false;
}

public function getPreguntasSimulacro($id){ //listar todas las preguntas del simulacro
	$this->db->select('*');
		$this->db->from('simulacro_pregunta s');
		$this->db->join('pregunta p', 'p.id= s.id_pregunta');
		$this->db->where("s.id_simulacro", $id);
		$this->db->where("p.estado", "aprobado");
		 $resultados = $this-> db->get(); 
		 
		 if($resultados->num_rows() > 0){
			return $resultados->result();
		}return false;	

}

public function getAreasNoRegistradas($id){ //selecciones las areas que aun no han sido listadas del simulacro

	 $this->db->select('a.id, a.nombre');
	 $this->db->from('area a');
		///$this->db->join('area_simulacro as', 'a.id= as.id_area');
		//$this->db->where_not_in("as.id_simulacro", $id);
		 $resultados = $this-> db->get(); 
		 
		 if($resultados->num_rows() > 0){
			return $resultados->result();
		}return false;
}

public function registroAreaSimulacro($area, $id_simulacro){
	    $this->db->select('a.id');
		$this->db->from('area a');
		$this->db->where("a.nombre", $area);
		$id_area = $this-> db->get()->row()-> id; 

		$area_s['id_area']=(int) $id_area;
		$area_s['id_simulacro']= (int) $id_simulacro;
		 $this->db->insert("area_simulacro", $area_s);

}
}

?>
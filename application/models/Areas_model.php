<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas_model extends CI_Model {

public function getAreas(){ //todas las areas existentes
    $this->db->select('*');
    $this->db->from('area');
    $resultados = $this-> db->get();

    if($resultados->num_rows() > 0){
    return $resultados->result();
    }return false;
}

public function registrar($area){
    $this->db->insert("area", $area);   
}


public function registrarAreaDoc($area, $user){
	$this->db->select('id');
    $this->db->from('area');
    $this->db->where("nombre", $area);
    $id_area = $this-> db->get()->row()->id;

    $data['id_area'] = $id_area;
    $data['id_docente'] = (int)$user;

    $this->db->insert("area_docente", $data);

}

public function getArea($nombreArea){
    $this->db->select('id');
    $this->db->from('area');
    $this->db->where("nombre", $nombreArea);
    $resultados = $this-> db->get();
    if ($resultados->num_rows () > 0) {
            return $resultados->row()->id; //un solo user
        }else {
            return false;
        }
    }

}
?>
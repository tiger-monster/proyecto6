<?php namespace App\Models;

use CodeIgniter\Model;

class HomePostModel extends Model {
	public function agregarMueble($data) {
		$mueble = $this->db->table("t_muebles");
		$mueble->insert($data);
		return $this->db->insertID();
	}

	public function obtenerTodosLosMueblesModel(){
		$mueble  = $this->db->query('SELECT * FROM t_muebles');
		return $mueble->getResult();
	}

	public function eliminaMueble($data) {
		$mueble = $this->db->table("t_muebles");
		$mueble->where($data);
		$mueble->delete();
		return json_encode(array("status" => TRUE));
	}

	public function obtenerDatosUpdate($data) {
		$mueble = $this->db->table("t_muebles");
		$mueble->where($data);
		return json_encode($mueble->get()->getResultArray());
	}

	public function actualizarMueble($data) {
		$mueble = $this->db->table("t_muebles");
		$datos = array(
					"mueble" => $data['mueble'],
					"tipo" => $data['tipo'],
					"costov" => $data['costov'],
					"costoc" => $data['costoc'],
					"fecha" => $data['fecha']
					);
		$idMueble = $data['id_mueble'];
		$mueble->set($data);
		$mueble->where('id_mueble', $idMueble);
		return $mueble->update();
	}
}
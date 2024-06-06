<?php
class eventosModel extends CI_model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function registro($titulo, $descripcion, $fec_ini, $fec_fin)
    {

        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'fecha_inicio' => $fec_ini,
            'fecha_fin' => $fec_fin,
            'create_date' => date('Y-m-d')
        );

        return $this->db->insert("eventos", $datos);
    }

    public function actualizar($id, $titulo, $descripcion, $fec_ini, $fec_fin)
    {
        $datos = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'fecha_inicio' => $fec_ini,
            'fecha_fin' => $fec_fin,
            'update_date' => date('Y-m-d')
        );

        $this->db->where('id', $id);
        return $this->db->update('eventos', $datos);
    }

    public function eliminar($id)
    {
        return $this->db->update('eventos', array('estado' => 0,'update_date' => date('Y-m-d')), array('id' => $id));
    }

    function getListEventos()
    {
        $this->db->where('estado', 1);
        $query = $this->db->get('eventos');

        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    function getEventoById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('eventos');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return false;
        }
    }
}

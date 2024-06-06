<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    /**
     * @var CI_Input
     */

    public $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("eventosModel");
        $this->load->helper(array('form','url'));
    }

	public function index()
	{
        $data['eventos'] = $this->eventosModel->getListEventos();
		$this->load->view('evento/index',$data);
	}

    public function viewEditEvento()
	{
        $idvalue= $this->input->post("id");
        $data['eventos'] = $this->eventosModel->getEventoById($idvalue);
		$this->load->view('evento/edit',$data);
	}

    public function registrar()
    {
        $titulo= $this->input->post("titulo");
        $descripcion= $this->input->post("descripcion");
        $fec_inicio= $this->input->post("fec_inicio");
        $fec_fin= $this->input->post("fec_fin");
        var_dump($titulo,$descripcion,$fec_inicio,$fec_fin);

        $resultado = $this->eventosModel->registro($titulo,$descripcion,$fec_inicio,$fec_fin);

        if($resultado){
            redirect('evento/index');
        }
    }

    public function editar()
    {
        $idvalue= $this->input->post("id");
        $titulo= $this->input->post("titulo");
        $descripcion= $this->input->post("descripcion");
        $fec_inicio= $this->input->post("fec_inicio");
        $fec_fin= $this->input->post("fec_fin");

        $resultado = $this->eventosModel->actualizar($idvalue,$titulo,$descripcion,$fec_inicio,$fec_fin);

        if($resultado){
            redirect('evento/index');
        }
    }

    public function eliminar()
    {
        $idvalue= $this->input->post("id");

        $resultado = $this->eventosModel->eliminar($idvalue);

        if($resultado){
            redirect('evento/index');
        }
    }
}

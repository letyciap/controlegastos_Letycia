<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function index()
	{
		$this->load->view('listar_categorias');
    }
    
    public function nova_categoria()
    {
        $this->load->view('nova_categoria');
    }
}

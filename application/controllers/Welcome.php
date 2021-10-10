<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
			$this->load->view('templates/header');
			$this->load->view('index');
			$this->load->view('templates/footer');
	}
	public function autenticar()
	{
		$this->load->model("Produtos");
		$prod =$this->Produtos->retidoso();
		$dados = array("prod"=> $prod);
		$this->load->view('templates/headermenu',$dados);
		$this->load->view('dashboard/menu',$dados);
		$this->load->view('templates/footermenu',$dados);
	}
	public function menu()
	{
		$this->load->model("Produtos");
		$prod =$this->Produtos->retidoso();
		$dados = array("prod"=> $prod);
		$this->load->view('templates/headermenu',$dados);
		$this->load->view('dashboard/menu',$dados);
		$this->load->view('templates/footermenu',$dados);
	}
	public function novopaciente()
	{
			$this->load->view('templates/headermenu');
			$this->load->view('dashboard/enfermagem/cad_paciente');
			$this->load->view('templates/footermenu');
	}
	public function cadidoso()
	{
$this->load->model("Produtos");
		$produto = array(
								"nome" => $this->input->post("nome"),
								"data" => $this->input->post("data"),
									"genero" => $this->input->post("genero"),
								"documento" => $this->input->post("documento"),
									"idade" => $this->input->post("idade"),
										"rg" => $this->input->post("rg"),
											"cpf" => $this->input->post("cpf"),
												"beneficio" => $this->input->post("beneficio"),
												"munnasc" => $this->input->post("munnasc"),
								);

		$this->Produtos->salvaidoso($produto);

		$prod =$this->Produtos->retidoso();
		$dados = array("prod"=> $prod);
		$this->load->view('templates/headermenu',$dados);
		$this->load->view('dashboard/menu',$dados);
		$this->load->view('templates/footermenu',$dados);
	}
}

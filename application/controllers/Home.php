<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data = $this->_data('Inicio');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/home', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function sobre()
	{
		$data = $this->_data('Sobre nos');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/sobre', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function empresa()
	{
		$data = $this->_data('Nossas Empresas');
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/empresas', $data);
		$this->load->view('site/partes/footer', $data);
	}

	public function contacto()
	{
		$data = $this->_data(' - Contactos');
		$data['offices'] = array(
			array(
				'nome' => 'Head Office',
				'endereco' => 'Aspire Software Solutions <br> 202, Parishram Complex,<br>
								Mithakhali Six Roads,<br> Navrangpura, Ahmedabad,<br> Gujarat, India.',
				'telefone' => '(+244) xxx xxx xxx',
				'email' => 'mail@example.com'
			)
		);
		$this->load->view('site/partes/header', $data);
		$this->load->view('site/contactos', $data);
		$this->load->view('site/partes/footer', $data);
	}

	private function _data($title = '')
	{
		$data['title'] = 'Helvan - ' . $title;
		$data['social'] = array(
			'facebook' => '',
			'twitter' => '',
			'linkedin' => '',
			'pinterest' => '',
			'google' => '',
			'instagram' => '',
			'skype' => '',
		);
		$data['contactos'] = array(
			'tel' => '(+244) xxx xxx xxx',
			'email' => 'mail@example.com',
			'morada' => 'Luanda-Angola'
		);
		return $data;
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('head');
    $this->load->view('header');
    $this->load->view('home');
    $this->load->view('footer');
	}

  public function lab()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('lab');
    $this->load->view('footer');
  }

	public function contato()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('contato');
		$this->load->view('footer');
	}

	public function club()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('club');
		$this->load->view('footer');
	}

	public function atelier()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('atelier');
		$this->load->view('footer');
	}

	public function loja(){
		$this->load->view('head');
		$this->load->view('coming_soon');
	}

	public function cosmetics()
	{
		$this->load->model('Assets');
		$data['marcas'] = $this->Assets->carregarMarcasCosmetics();
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('cosmetics',$data);
		$this->load->view('footer');
	}

	public function nails()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('nails');
		$this->load->view('footer');
	}

	public function makeup()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('makeup');
		$this->load->view('footer');
	}

	public function hair()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('hair');
		$this->load->view('footer');
	}

 public function teste()
 {
	//  $this->load->model('Assets');
	//  $data['marcas'] = $this->Assets->carregarMarcasCosmetics();
	//  $data['marcas'] = $this->Assets->separarArrays($data['marcas']);
	//  var_dump($data['marcas']);
	$this->load->view('custom_email');
 }

}

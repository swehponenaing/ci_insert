<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['inner_page']='home';
		$this->load->view('template', $data);
	}
	//about
	public function about($value='')
	{
		$data['inner_page']='about';
		$this->load->view('template', $data);
	}
	//contact
	public function contact($value='')
	{
		$data['inner_page']='contact';
		$this->load->view('template', $data);
	}
	//post
	public function post($value='')
	{
		$data['todos'] = $this->db->get('todos')->result();
		$data['inner_page']='post';
		$this->load->view('template', $data);	
	}

	public function insert(){
		$description=Null;
		$completed=Null;
		extract($_POST);
		$param['description']=$description;
		$param['completed']=$completed;
		if(isset($description))
		{
			$this->load->model('crud');
			$result=$this->crud->insert($param);
			$this->post();
		}

	}	
	
}

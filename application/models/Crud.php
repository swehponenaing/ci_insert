<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Crud extends CI_Model
{
	function __construct(){
		parent::__construct();
	}
	function post(){
		return $this->db->get('todos');	
	}
	function insert($param){
		$field=array(
			'description'=>$param['description'],
			'completed'=>$param['completed'],
		);
		$this->db->insert("todos",$field);
	}
}

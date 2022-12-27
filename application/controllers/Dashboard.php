<?php

class Dashboard extends My_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$test = array('one', 'two', 'three');
		$this->data['test_data'] = $test;
	}
}

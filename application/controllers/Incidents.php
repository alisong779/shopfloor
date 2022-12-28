<?php

class Incidents extends My_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()

	{
	}

	public function test_data()

	{


		$this->data['tests'] = 'Test Latest Incidents';
	}
}

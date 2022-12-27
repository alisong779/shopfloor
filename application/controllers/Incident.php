<?php

class Incident extends My_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}

	public function index()

	{
		$data['title'] = 'Latest Incidents';


		$this->load->view('incident/index', $data);
	}

	public function test_data()

	{

		$data['testing'] = 'Test Latest Incidents';

		$this->load->view('incident/test_data', $data);
	}
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function index()
	{
		$this->load->helper('formfields');
		$this->data['title'] = 'The Wilsons (Server)';
		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}
}

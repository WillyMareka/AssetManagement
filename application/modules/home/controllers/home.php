<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public $logged_in;

	function __construct()
    {
		parent::__construct();
        $this->load->model('home/model_home');
    }

	public function index()
	{
		$this->load->view('v_home');
	}

}

?>
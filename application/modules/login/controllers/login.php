<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller {

	public $logged_in;

	function __construct()
    {
		parent::__construct();
        $this->load->model('model_login');
    }

	public function index()
	{
		$this->load->view('login_view');
	}

}

?>
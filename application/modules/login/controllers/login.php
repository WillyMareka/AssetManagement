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
		$data['title'] = 'Asset Management | Login';
		$this->template->call_login($data);
	}

	function authenticate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hashed_password = md5($password);

		$authentication = $this->model_login->authenticate($username,$hashed_password);
		echo "<pre>";print_r($authentication[0]);die();
		if ($authentication) {
			$user_data = array(
							'user_id' => $authentication[0]['user_id'],
							'user_type' => $authentication[0]['user_type'],
							'logged_in' => TRUE
							);
		}
		else{
			$user_data = array(
							'logged_in' => FALSE
							);
		}
		$this->session->userdata($user_data);
	}

}

?>
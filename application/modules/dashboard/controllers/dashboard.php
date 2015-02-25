<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends MY_Controller {

	public $logged_in;

	function __construct()
    {
		parent::__construct();
        $this->load->model('dashboard_model');
    }

	public function hr_dashboard()
	{
		// echo "Welcome to the Dashboard";die();
		$data['content_page'] = 'dashboard/hr_dashboard';
		$data['sidebar'] = 'hr_side_bar';
		// echo "<pre>";print_r($data);die();
		$this->template->call_template($data);
		
	}

}

?>
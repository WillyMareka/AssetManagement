<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public $logged_in;

	function __construct()
    {

        
        $this->load->model('home/model_home');

        parent::__construct();

        
          
    }

	public function index()
	{
		

		
		$this->load->view('v_home',$data);
		
	}

	

	 





	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
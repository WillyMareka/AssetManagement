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

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// function authenticate()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$hashed_password = md5($password);

	// 	$authentication = $this->model_login->authenticate($username,$hashed_password);
	// 	//echo "<pre>";print_r($authentication[0]);die();
	// 	if ($authentication) {
	// 		$user_data = array(
	// 						'user_id' => $authentication[0]['user_id'],
	// 						'user_type' => $authentication[0]['user_type'],
	// 						'logged_in' => TRUE
	// 						);
	// 	}
	// 	else{
	// 		$user_data = array(
	// 						'logged_in' => FALSE
	// 						);
	// 	}
	// 	$this->session->userdata($user_data);
	// }

	function auth()
	{
		$this->load->library('form_validation');
        
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]|required|max_length[15]|required|xss_clean');
        $this->form_validation->set_rules('username', 'User Name', 'trim|min_length[3]|required|xss_clean|');
        
        if($this->form_validation->run() == FALSE){
        	$data['title'] = 'Login Validation | Login Validation';
        	$data['new_user'] = 'Didnt meet the requirements 1';
			//$this->template->call_login($data);
		    echo 'validation';
		}else{
			$username = $this->input->post('username');
			//echo $username;
			$result = $this->model_login->authentication();		
            
             //echo '<pre>';print_r($result);echo'</pre>';die;
			switch($result){

				case 'logged':
                    
                    switch($this->session->userdata('user_type')){
                        case '1':
                          //redirect(base_url().'hr');
                           echo '1';
                        break;

                        case '2':
                          //redirect(base_url().'caretaker/home');
                           echo '2';
                        break;

                        default:
                          //echo 'Not finding user type';
                            echo '3';
                        break;

                    }

				break;

				case 'incorrect_password':
		            $data['title'] = 'Asset Management | Login';
        	        $data['new_user'] = 'Entered wrong username and password';
			        //$this->template->call_login($data);
			        echo 'incorrect';
				break;

				case 'not_activated':
		            $data['title'] = 'Asset Management | Login';
        	        $data['new_user'] = 'User not activated';
			        //$this->template->call_login($data);
			        echo 'inactive';
				break;

				case 'session_fail':
		            $data['title'] = 'Asset Management | Login';
        	        $data['new_user'] = 'Session was not able to start';
			        //$this->template->call_login($data);
			        echo 'session';
				break;

				default:
                     //echo 'No case selected';
                     echo 'case';
				break;
			}	
		}
	}














}

?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '-1');

class MY_Controller extends MX_Controller
{
    public $tables, $logged_in;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->module('home');
        $this->load->module('template');
        $this->load->module('reports');
        $this->load->module('export');
        
        
        
    }

   public function showbase()
   {
    echo base_url();
   }

    


    public function uploader($file)
    {
        $path = '';
        $upload_path = 'assets/images/users/';
        $config['upload_path'] = './' . $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($file))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            foreach ($data as $key => $value) {
                $path = base_url().$upload_path.$value['file_name'];
            }
            return $path;
        }
    }


}
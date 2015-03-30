<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_login extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function authenticate($username,$password)
    {
    	$sql = "SELECT 
    				* 
    			FROM 
    				`users`
    			WHERE
    				`username` = '$username'
    			AND 
    				`password` = '$password'";

    	$res = $this->db->query($sql);
    	$res = $res->result_array();
    	
    	return $res;
    }

    function authentication(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $sql = "SELECT * FROM users WHERE username = '$username'
        AND password = '$password' LIMIT 1";




        $result = $this->db->query($sql);

        $row = $result->row();
         //echo '<pre>';print_r($result);echo'</pre>';die;
        $sql2 = "SELECT * FROM users WHERE username = '$username' AND activated = 0 ";

        $result2 = $this->db->query($sql2);
        $row2 = $result->row();

        if($result->num_rows() == 1){
           if($row2->activated){
             if ($row->password === $password) {
               $session_data = array(
                   'user_id'       => $row ->user_id, 
                   'username'      => $row ->username, 
                   'user_type'     => $row->user_type
                );

                $this -> set_session($session_data);
                return 'logged';
             } else {
               return "session_fail";
             }
           }else{
             return "not_activated";
           }
         }else{
          return "incorrect_password";
         }

         //print_r($this->session->all_userdata());

    }


    private function set_session($session_data){
      $sql = "SELECT * FROM users WHERE username = '". $session_data['username'] ."' LIMIT 1";
      $result = $this->db->query($sql);
      $row = $result->row();
       //echo "<pre>";print_r($result);die();
       //echo $session_data['ac_id'];die();
      $setting_session = array(
                   'user_id'       => $session_data['user_id'] , 
                   'username'    => $session_data['username'] ,
                   'user_type'       => $session_data['user_type'] ,
                   'logged_in'   => 1
      ); 

      $this->session->set_userdata($setting_session);

      //echo "<pre>";print_r($setting_session);die();
      
      $details = $this->session->all_userdata();
       $sql = "INSERT INTO asset_sessions (`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`,`user_id`,`username`,`user_type`,`logged_in`)
               VALUES ('".$details['session_id']."', '".$details['ip_address']."','".$details['user_agent']."', '".$details['last_activity']."', 
                       '1','".$details['user_id']."', '".$details['username']."', '".$details['user_type']."', '".$details['logged_in']."') ";

    $results = $this->db->query($sql);
      //$this->db->insert_batch('ci_sessions',$session_details);
       // $details = $this->session->all_userdata();
        
    }


   
}
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getalltables()
    {
      $table_columns = array();
      $query = $this->db->query("SHOW TABLES FROM fashion");
      $result = $query->result_array();

      foreach ($result as $key => $value) {

        $cols = array();
        $columns = $this->db->query("SHOW FIELDS FROM ".$value['Tables_in_fashion']);

      $c_result = $columns->result_array();

      foreach ($c_result as $k => $v) {
        $cols[$v['Field']] = $v;
      }

      $table_columns[$value['Tables_in_fashion']] = $cols;
      }

      

      return $table_columns;
    }



    public function checkusernameexists($username)
    {
        $query = $this->db->query("SELECT count(user_id) as users FROM users WHERE username = '" . $username . "'");
        $count = $query->row();

        if($count->users > 0)
        {
          return true;
        }
        else
        {
          return false;
        }
    }

    public function register_user($username, $utype)
    {
      $defult_password = md5('123456');
      $query = $this->db->query("INSERT INTO users VALUES(NULL, '".$username."', '".$defult_password."','".$utype."', NULL, 1)");

      if($query)
      {
        return mysql_insert_id();
      }
      else
      {
        return false;
      }
    }

   
}
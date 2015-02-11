<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function get_shirts()
  {
    $products = array();
    $this->db->limit(4);
    $this->db->order_by("prod_id", "desc");
    $query = $this->db->get_where('products', array('is_deleted' => 0, 'prod_type' => 'SHIRT'));
    $result = $query->result_array();

    if ($result) {
       
      foreach ($result as $key => $value) {

          $products[$value['prod_id']] = $value;
        
     } 

      //echo '<pre>';print_r($products);echo '</pre>';die();
      
      return $products;
    }
    
    return $products;
  }


  public function get_skirts()
  {
    $products = array();
    $this->db->limit(4);
    $this->db->order_by("prod_id", "desc");
    $query = $this->db->get_where('products', array('is_deleted' => 0, 'prod_type' => 'SKIRT'));
    $result = $query->result_array();

    if ($result) {
      foreach ($result as $key => $value) {
        $products[$value['prod_id']] = $value;
      }
      //echo '<pre>';print_r($products);echo '</pre>';die();
      
      return $products;
    }
    
    return $products;
  }

  public function get_suits()
  {
    $products = array();
    $this->db->limit(4);
    $this->db->order_by("prod_id", "desc");
    $query = $this->db->get_where('products', array('is_deleted' => 0, 'prod_type' => 'SUITS'));
    $result = $query->result_array();

    if ($result) {
      foreach ($result as $key => $value) {
        $products[$value['prod_id']] = $value;
      }
      //echo '<pre>';print_r($value);echo '</pre>';die();
      
      return $products;
    }
    
    return $products;
  }

  public function get_accessories()
  {
    $products = array();
    $this->db->limit(4);
    $this->db->order_by("prod_id", "desc");
    $query = $this->db->get_where('products', array('is_deleted' => 0, 'prod_type' => 'ACCESSORIES'));
    $result = $query->result_array();

    if ($result) {
      foreach ($result as $key => $value) {
        $products[$value['prod_id']] = $value;
      }
      //echo '<pre>';print_r($value);echo '</pre>';die();
      
      return $products;
    }
    
    return $products;
  }

    public function insert_comment(){
    	$name = $this->input->post('name');
    	$email = $this->input->post('email');
    	$mobile = $this->input->post('mobile');
    	$message = $this->input->post('message');

        $sql = "INSERT INTO comments (name,email,mobile,message) VALUES 
              ( " . $this->db->escape($name) . ",
              	" . $this->db->escape($email) . ",
              	" . $this->db->escape($mobile) . ",
              	" . $this->db->escape($message) . "
              	)";

        $result = $this->db->query($sql);


       // if($this->db->affected_rows()===1){
       // 	echo "Successfully commented. Thank you $name";
       	
       // }else{
       // 	echo "Unsuccessfully commented. No thanks to you $name";
       // }
    }

   
}
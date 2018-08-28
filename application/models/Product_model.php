<?php 
 class Product_model extends CI_Model{
     public function __construct(){
         $this->load->database();
     }
     public function get_products($customQuery= FALSE){
         if($customQuery === FALSE){
             $this->db->select('products.Name, products.SellPrice, products.Company, ProductType.Name AS ProductType');
             $this->db->from('products');
             $this->db->join('producttype','ProductType = producttype.Id');
             $query = $this->db->get();
             return $query->result_array();
         }

         $query = $this->db->get_where('products', array('slug'=>$customQuery));
         return $query->row_array();

     }
     public function get_view_all_product_info($id){
         //use for view link modal
         //use id as to where
     }
     public function add_products(){
         
     }
 }
?>

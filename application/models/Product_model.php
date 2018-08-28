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
     public function get_all_company(){
        $this->db->select('Name');

         return $this->db->get('company')->result_array();
     }
     public function get_all_product_type(){}
     
     
     
     public function add_product(){
         /*
         logic decision
         check if company and product_type that has been inserted
         is available in their respective tables
         if not
         create a new query inserting the new values
         this method is memory intssensive
         search for alternative method
         */
         
         //getting company base on user input
             $this->db->select('id');
             $this->db->from('company');
             $this->db->where('Name',$this->input->post('Company'));
         
         //line of code is working
         $company = $this->db->get()->row_array();
         
         print_r($company);
         
         die();
         
         //if sql returned empty
         // we will insert the company name
         if(empty(company)){
             //inserting the value
             $this->db->insert('customer',array('Name'=>$company));
             //setting company to a new value
             //will be containing the Id of the company
             $company=$this->db->select('Id')->get('company');
         }
         
         $data = array(
         'Name'=>$this->input->post('ProductName'),
         'Company'=>$company,
         'ProductType'=>$this->input->post('ProductType'),
         'ExpirationDate'=>$this->input->post('ExpirationDate'),
         'BoughtPrice'=>$this->input->post('BoughtPrice'),
         'SellPrice'=>$this->input->post('SellPrice'),
         'AddedBy'=>'1',
            
         );
         
         return $this->db->insert('products',$data);
     }
 }
?>

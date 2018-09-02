<?php 
 class Product_model extends CI_Model{
     public function __construct(){
         $this->load->database();
     }
     public function get_products($customQuery= FALSE){
         if($customQuery === FALSE){
             $this->db->select('products.Id AS productID,
                                products.Name,
                                company.Name AS CompanyName,
                                ProductType.Name AS ProductType,
                                products.ExpirationDate,
                                products.BoughtPrice,
                                products.SellPrice,
                                products.AddedBy,
                                products.AddedDate
                                ');
             $this->db->from('products');
             $this->db->join('producttype','ProductType = producttype.Id');
             $this->db->join('company','Company = company.Id');
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
        $this->db->select('Id AS companyId');
        $this->db->from('company');
        $this->db->where('Name',$this->input->post('Company'));
        
         $company = $this->db->get()->row_array();
         
         
         $this->db->select('Id AS productTypeId');
         $this->db->from('ProductType');
         $this->db->where('Name', $this->input->post('ProductType'));
         
         $product = $this->db->get()->row_array();
         
         //if sql returned empty
         // we will insert the company name
         if(empty($company)||$company===NULL){
             
             //inserting the value
             $this->db->insert('company',array('Name'=>$this->input->post('Company')));
             //setting company to a new value
             //will be containing the Id of the company
             $this->db->select('Id AS companyId');
             $this->db->from('company');
             $this->db->where('Name',$this->input->post('Company'));
             $company=$this->db->get()->row_array();

         }
         
         if(empty($product)||$product===NULL){
             $this->db->insert('producttype',array('Name'=>$this->input->post('ProductType')));
             
             $this->db->select('Id AS productTypeId');
             $this->db->from('producttype');
             $this->db->where('Name',$this->input->post('ProductType'));
             $product = $this->db->get()->row_array();
         }
         
        //extracting the value from company and product
         extract($company);
         extract($product);
         
         $data = array(
         'Name'=>$this->input->post('ProductName'),
         'Company'=>$companyId,
         'ProductType'=>$productTypeId,
         'ExpirationDate'=>$this->input->post('ExpirationDate'),
         'BoughtPrice'=>$this->input->post('BoughtPrice'),
         'SellPrice'=>$this->input->post('SellPrice'),
         'AddedBy'=>'1',
            
         );
         
         return $this->db->insert('products',$data);
     }

     public function get_product($Id){
              
             $this->db->select('products.Id AS productID,
                                products.Name,
                                company.Name AS CompanyName,
                                ProductType.Name AS ProductType,
                                products.ExpirationDate,
                                products.BoughtPrice,
                                products.SellPrice,
                                products.AddedBy,
                                products.AddedDate
                                ');
             $this->db->from('products');
             $this->db->join('producttype','ProductType = producttype.Id');
             $this->db->join('company','Company = company.Id');
             $this->db->where('products.Id',$Id);
             $query = $this->db->get();
             return $query->row_array();
    }
    public function update_product(){
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
        $this->db->select('Id AS companyId');
        $this->db->from('company');
        $this->db->where('Name',$this->input->post('Company'));
        
         $company = $this->db->get()->row_array();
         
         
         $this->db->select('Id AS productTypeId');
         $this->db->from('ProductType');
         $this->db->where('Name', $this->input->post('ProductType'));
         
         $product = $this->db->get()->row_array();
         
         //if sql returned empty
         // we will insert the company name
         if(empty($company)||$company===NULL){
             
             //inserting the value
             $this->db->insert('company',array('Name'=>$this->input->post('Company')));
             //setting company to a new value
             //will be containing the Id of the company
             $this->db->select('Id AS companyId');
             $this->db->from('company');
             $this->db->where('Name',$this->input->post('Company'));
             $company=$this->db->get()->row_array();

         }
         
         if(empty($product)||$product===NULL){
             $this->db->insert('producttype',array('Name'=>$this->input->post('ProductType')));
             
             $this->db->select('Id AS productTypeId');
             $this->db->from('producttype');
             $this->db->where('Name',$this->input->post('ProductType'));
             $product = $this->db->get()->row_array();
         }
         
        //extracting the value from company and product
         extract($company);
         extract($product);
        $data = array(
         'Name'=>$this->input->post('ProductName'),
         'Company'=>$companyId,
         'ProductType'=>$productTypeId,
         'ExpirationDate'=>$this->input->post('ExpirationDate'),
         'BoughtPrice'=>$this->input->post('BoughtPrice'),
         'SellPrice'=>$this->input->post('SellPrice'),
         'AddedBy'=>'1',
            
         );
         $this->db->where('Id',$this->input->post('productID'));
         return $this->db->update('products',$data);
    }

    public function delete_product(){
        $this->db->where('Id',$this->input->post('productID'));
        $this->db->delete('products');
        return true;

    }
}
?>
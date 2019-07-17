<?php
/**
 * This class is responsible for adding, updating, deleting and providing list of products 
 * from database
 * 
 *      <?php
 *      new Product_model;
 */
class Product_model extends CI_Model{
 
    /**
     * get list of all products
     *
     * @return array
     */
    public function list(){
        $result=$this->db->get('products');
        return $result->result();
    }
 
    /**
     * save provided model into database
     *
     * @return object
     */
    public function save(){
        $data = array(
                'code'  => $this->input->post('code'), 
                'name'  => $this->input->post('name'), 
                'price' => $this->input->post('price'), 
                'created_at' => date('Y-m-d h:i:s'), 
            );
        $result=$this->db->insert('products',$data);
        return $result;
    }
 
    /**
     * update existing record from database.
     *
     * @return object
     */
    public function update(){
        $code=$this->input->post('code');
        $name=$this->input->post('name');
        $price=$this->input->post('price');
 
        $this->db->set('name', $name);
        $this->db->set('price', $price);
        $this->db->where('code', $code);
        $result=$this->db->update('products');
        return $result;
    }
 
    /**
     * Delete record form database
     *
     * @return object
     */
    public function delete(){
        $code=$this->input->post('code');
        $this->db->where('code', $code);
        $result=$this->db->delete('products');
        return $result;
    }
     
}
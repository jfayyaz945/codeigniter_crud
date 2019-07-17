<?php
/**
 * Product Controller contains products CRUD functionality. It contains index, add, edit, view and 
 * delete methods.
 *
 * Following is the implementation
 * 
 *      <?php
 *      new Product;
 */
class Product extends CI_Controller{

    /**
     * Constructor of product class inherit base class constructor and load product model object.
     *
     */
    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    /**
     * Return list of products
     *
     * @return product view
     */
    public function index(){
        $this->load->view('product');
    }
 
    /**
     * Retrieve all products from model list method
     *
     * @return products list in json format
     */
    public function view(){
        $data=$this->product_model->list();
        echo json_encode($data);
    }
 
    /**
     * Add new product into database by using model method
     *
     * @return newly added product data in json format
     */
    public function add(){
        $data=$this->product_model->save();
        echo json_encode($data);
    }
 
    /**
     * Update already exixts products
     *
     * @return updated model data into json format
     */
    public function edit(){
        $data=$this->product_model->update();
        echo json_encode($data);
    }
 
    /**
     * Delete specific product
     *
     * @return deleted model data
     */
    public function delete(){
        $data=$this->product_model->delete();
        echo json_encode($data);
    }
 
}
<?php
class ProductController extends BaseController {
    private $__productModel;
    function __construct($conn)
    {
        $this->__productModel = $this->initModel("ProductModel",$conn);
    }
    public function index(){
        $id = basename($_SERVER["REQUEST_URI"]);
        $product = $this -> __productModel -> getProductById($id);
        $this->view("product",["product" => $product]);
    }
}
?>
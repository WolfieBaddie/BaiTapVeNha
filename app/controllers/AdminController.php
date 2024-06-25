<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
class AdminController extends BaseController {
    private $__adminModel;
    public function __construct($conn)
    {
        $this -> __adminModel = $this -> initModel("AdminModel", $conn);
    }
    public function index() {
        
        $product = $this -> __adminModel -> getLastestProduct();
        $news = $this -> __adminModel -> getLastestNews();
        $brand = $this -> __adminModel -> getBrand();
        $this -> view('admin', [ "product" => $product, "news" => $news, "brand" => $brand]);
    }
    public function insertproduct()
    {
        if(isset($_POST["submit"]))
        {
            $productName = $_POST["productName"];
            $productPrice = $_POST["productPrice"];
            $productBrand = $_POST["productBrand"];
            $importedAt = $_POST["importedAt"];
            $productImage = $_FILES["image"];
            var_dump($_FILES);
           $this -> __adminModel -> addproduct($productName, $productPrice,  $productBrand,$importedAt,  $productImage );
        }
        
    }
    public function adduser()
    {
        
        if(!isset($_POST["submit"]))
        {
            $userName = $_POST["userName"];
            $userPassword = $_POST["userPassword"];
            $userRole = $_POST["userRole"];
            $userActive = $_POST["userActive"];
            $this -> __adminModel -> adduser($userName, $userPassword,$userRole, $userActive);
        }
        var_dump($this -> __adminModel ->  adduser($userName, $userPassword,$userRole, $userActive));
    }

    public function addnews()
    {
        if(isset($_POST["submit"]))
        {
            $newsName = $_POST["newsName"];
            $newsDesc = $_POST["newsDesc"];
            $newsImage = $_FILES["image"];
            $postedAt = $_POST["postedAt"];
            var_dump($_FILES);
           $this -> __adminModel -> addnews($newsName,$newsDesc,$postedAt,$newsImage );
           
        }
    }
    public function addBrand()
    {
        if(isset($_POST["submit"]))
        {
            $brandName = $_POST["brandName"];
            $brandImage = $_FILES["image"];
            
           $this -> __adminModel -> addbrand($brandName, $brandImage );
           
        }
    }
    public function editproduct()
    {
        
        $id = basename($_SERVER["REQUEST_URI"]);
        $product = $this -> __adminModel -> getProductById($id);
        $this -> view("/layouts/edit-product",["product" => $product]);    
        if(isset($_POST["submit"]))
        {
            $id = $_POST["id"];
            $productName = $_POST["productName"];
            $productPrice = $_POST["productPrice"];
            $productBrand = $_POST["productBrand"];
            $importedAt = $_POST["importedAt"];
            $productImage = $_FILES["image"];
            $this -> __adminModel -> updateProduct($productName, $productPrice,  $productBrand,$importedAt,  $productImage, $id);

        }
    }
    public function editbrand()
    {
        $id = basename($_SERVER["REQUEST_URI"]);
        $brand = $this -> __adminModel -> getBrandById($id);
        $this -> view("/layouts/edit-brand",["brand" => $brand]);   
        if(isset($_POST["submit"]))
        {
            $id = $_POST["id"];
            $brandName = $_POST["brandName"];
            $this -> __adminModel -> updateBrand($brandName, $id);
        }
    }
    public function editnews()
    {
        $id = basename($_SERVER["REQUEST_URI"]);
        $news = $this -> __adminModel -> getNewsById($id);
        $this -> view("/layouts/edit-news",["news" => $news]);   
        if(isset($_POST["submit"]))
        {
            $id = $_POST["id"];
            $newsName = $_POST["newsName"];
            $newsDesc = $_POST["newsDesc"];
            $this -> __adminModel -> updateNews($newsName,$newsDesc ,$id);
        }
    }
    public function deleteproduct()
    {
        $id = basename($_SERVER["REQUEST_URI"]);
        $this -> __adminModel -> deleteProduct($id);
        $this -> view("/layouts/delete-product");
    }
    public function deletebrand()
    {
        $id = basename($_SERVER["REQUEST_URI"]);
        $this -> __adminModel -> deleteBrand($id);
        $this -> view("/layouts/delete-brand");
    }

    public function deletenews()
    {
        $id = basename($_SERVER["REQUEST_URI"]);
        $this -> __adminModel -> deleteNews($id);
        $this -> view("/layouts/delete-news");
    }
}





?>
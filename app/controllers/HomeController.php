<?php 
// controller
class HomeController extends BaseController {
    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
    }
    //action
    public function index() {
        $shop = $this -> __homeModel -> getLastestProduct();
        $customers = $this -> __homeModel -> getAllCustomers();
        $lastest_news = $this -> __homeModel -> getLastestNews();
        $news_col2 = $this -> __homeModel -> getNewsForCol2();
        $this->view("layouts/client_layout", ["content" => "home", "shop" => $shop, "customers" => $customers, "lastest_news" => $lastest_news,
    "news_col2" => $news_col2]);
    }
    //action : create ,params [$a, $b]
    public function create($a, $b) {
        
    }
}

?>
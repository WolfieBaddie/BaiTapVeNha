<?php 
class UserController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("UserModel", $conn);
    }

    public function login() {
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = $this->__model->login($username, $password);
            if(isset($user) && $user) {
                $_SESSION["user"] = $user;
                if($user["role"] == "admin") {
                    header("Location: http://localhost/BaiTapVeNha/admin/index");
                } else {
                    header("Location: http://localhost/BaiTapVeNha/home/index");
                }
            } else {
                header("Location: http://localhost/BaiTapVeNha/user/login?error=true");
            }
        } else {
            $this->view("login");
        }
    }
    public function logout() {
        if(isset($_SESSION["user"])) {
            $role = $_SESSION["user"]["role"];
            print_r($role);
            $_SESSION["user"] = null;
            if($role =="admin") {
                header("Location: http://localhost/BaiTapVeNha/user/login");
            } else {
                header("Location: http://localhost/BaiTapVeNha/home/index");
            }
        }
        header("Location: http://localhost/BaiTapVeNha/home/index");
    }
}




?>
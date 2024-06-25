<?php 
class HomeModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function getAllCustomers() {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from customer";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }

    public function getLastestNews() {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from news order by postedAt desc limit 1";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }

    
    public function getNewsForCol2() {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from news order by postedAt desc limit 3";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }
    public function getLastestProduct()
    {         try {
        if(isset($this->__conn)) {
            $sql = "select * from product order by importedAt";
            $stmt = $this->__conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            echo "not connection";
            die();
        }
    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }
    return null;  
    }

}




?>
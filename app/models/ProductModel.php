<?php
class ProductModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
        var_dump($this -> __conn);
    }
    public function getProductById($id)
{
    try {
        if(isset($this->__conn)) {
            $sql = "select * from product where productId = :id ";
            $stmt = $this->__conn->prepare($sql);
            $stmt -> bindParam(":id", $id, PDO::PARAM_STR);
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
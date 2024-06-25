<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    class AdminModel
    {
        private $__conn;
        public function __construct($conn)
        {
            $this -> __conn = $conn;
        }
        public function getAllUser(){
        try {
            if(isset($this->__conn)) {
                $sql = "select * from user";
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

        public function getAllProduct(){
         try {
        if(isset($this->__conn)) {
        $sql = "select * from product";
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


public function addproduct($productName, $productPrice,  $productBrand,$importedAt, $productImage)
{
try
{   if(isset($this -> __conn))
    {
                $sql = "INSERT INTO `product`(`productName`, `productPrice`, `productBrand`, `importedAt`, `productImage`) 
                VALUES (:productName, :productPrice, :productBrand, :importedAt, :unique_image);";

                $permited = array('jpg', 'png', 'gif');
                $file_name = $_FILES["image"]["name"];
                var_dump($file_name);
                
                $div = explode('.', $file_name);
                var_dump($div);
                $file_ext = strtolower(end($div));
                echo"<pre>";
                var_dump($file_ext);
                echo "</pre>";
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                echo"<pre>";
                var_dump($unique_image);
                echo "</pre>";
                $target_dir = "./uploads/";
                $uploaded_image = $target_dir.$unique_image;
                echo"<pre>";
                var_dump($uploaded_image);
                echo "</pre>";
                $file_temp = $_FILES['image']['tmp_name'];
                 $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":productName",$productName, PDO::PARAM_STR);
                $stmt -> bindParam(":productPrice", $productPrice, PDO::PARAM_STR);
                $stmt -> bindParam(":productBrand", $productBrand, PDO::PARAM_STR);
                $stmt -> bindParam(":importedAt", $importedAt, PDO::PARAM_STR);
                $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                move_uploaded_file($file_temp, $uploaded_image); 
                 if($productName === "" && $productPrice === "" &&$productBrand === "" && $importedAt === "" )
                {
                    $alert = "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng nhập vào các trường còn thiếu</span>";
                    return $alert;
                }
                 else
                {  
                     if(empty($file_name))
                    {
                        $alert = "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng tải ảnh lên</span>";
                        return $alert;
                    }
                    else 
                    {
                        if(in_array($file_ext, $permited) === false)
                        {
                            $alert ="<span style='color: red; font-size: 48px; text-align: center;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                            return $alert;
                        }
                        else
                        {
          
                            $stmt -> execute();
                            echo"<span style='color: green; font-family: Ferrum; font-size: 48px; display: flex; align-items: center; justify-content: center; text-align: center;'>Thêm sản phẩm thành công</span>";
                            echo "<a/ href='http://localhost/BaiTapVeNha/admin/index'>Quay lại trang chủ admin</a>";
                            exit();
                        }
                    } 
                    
                   
                }
} 
}catch(PDOException $e)
{
    echo "".$e -> getMessage();
}
return null;
        }
       
public function adduser($userName, $userPassword, $userRole, $userActive)
{
    try
    {if(isset($this -> __conn))
    {
        $sql = "insert into user(`userName`, `userPassword`, `userRole`, `userActive`) values (:userName, :userPassword, :userRole, :userActive)";
        $stmt = $this -> __conn -> prepare($sql);
        $stmt -> bindParam(":userName", $userName, PDO::PARAM_STR);
        $stmt -> bindParam(":userPassword", $userPassword, PDO::PARAM_STR);
        $stmt -> bindParam(":userRole", $userRole, PDO::PARAM_STR);
        $stmt -> bindParam(":userActive", $userActive, PDO::PARAM_STR);
        $stmt -> execute();
    }
    }catch(PDOException $e)
    {
        echo "". $e -> getMessage();
    }
    return null;
}

public function addnews($newsName, $newsDesc,$postedAt,$newsImage)
{
try
{   if(isset($this -> __conn))
    {
                $sql = "INSERT INTO `news`(`newsName`, `newsDesc`, `postedAt`,`newsImage`) 
                VALUES (:newsName, :newsDesc,:postedAt, :unique_image);";
                $postedAt = date("Y-m-d");
                $permited = array('jpg', 'png', 'gif');
                $file_name = $_FILES["image"]["name"];
                var_dump($file_name);
                
                $div = explode('.', $file_name);
                var_dump($div);
                $file_ext = strtolower(end($div));
                echo"<pre>";
                var_dump($file_ext);
                echo "</pre>";
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                echo"<pre>";
                var_dump($unique_image);
                echo "</pre>";
                $target_dir = "./uploads/";
                $uploaded_image = $target_dir.$unique_image;
                echo"<pre>";
                var_dump($uploaded_image);
                echo "</pre>";
                $file_temp = $_FILES['image']['tmp_name'];
                 $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":newsName",$newsName, PDO::PARAM_STR);
                $stmt -> bindParam(":newsDesc", $newsDesc, PDO::PARAM_STR);
                $stmt -> bindParam(":postedAt", $postedAt, PDO::PARAM_STR);
                $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                move_uploaded_file($file_temp, $uploaded_image); 
                 if($newsName === "" && $newsDesc === ""  )
                {
                    $alert = "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng nhập vào các trường còn thiếu</span>";
                    return $alert;
                }
                 else
                {  
                     if(empty($file_name))
                    {
                        $alert = "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng tải ảnh lên</span>";
                        return $alert;
                    }
                    else 
                    {
                        if(in_array($file_ext, $permited) === false)
                        {
                            $alert ="<span style='color: red; font-size: 48px; text-align: center;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                            return $alert;
                        }
                        else
                        {
          
                            $stmt -> execute();
                            echo"<span style='color: green; font-family: Ferrum; font-size: 48px; display: flex; align-items: center; justify-content: center; text-align: center;'>Thêm tin tức thành công</span>";
                            exit();
                        }
                    } 
                    
                   
                }
} 
}catch(PDOException $e)
{
    echo "".$e -> getMessage();
}
return null;
        }

public function addbrand($brandName, $brandImage)
{
try
{   if(isset($this -> __conn))
    {
                $sql = "INSERT INTO `brand`(`brandName`, `brandLogo`) 
                VALUES (:brandName, :unique_image);";
                $permited = array('jpg', 'png', 'gif', 'jfif');
                $file_name = $_FILES["image"]["name"];
                var_dump($file_name);
                $div = explode('.', $file_name);
                var_dump($div);
                $file_ext = strtolower(end($div));
                echo"<pre>";
                var_dump($file_ext);
                echo "</pre>";
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                echo"<pre>";
                var_dump($unique_image);
                echo "</pre>";
                $target_dir = "./uploads/";
                $uploaded_image = $target_dir.$unique_image;
                echo"<pre>";
                var_dump($uploaded_image);
                echo "</pre>";
                $file_temp = $_FILES['image']['tmp_name'];
                $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":brandName",$brandName, PDO::PARAM_STR);
                $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                move_uploaded_file($file_temp, $uploaded_image); 
                 if($brandName === ""  )
                {
                    $alert = "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng nhập vào các trường còn thiếu</span>";
                    return $alert;
                }
                 else
                {  
                     if(empty($file_name))
                    {
                        echo "<span style='color: red; font-family: Ferrum; font-size: 16px;'>Vui lòng tải ảnh lên</span>";
                        
                    }
                    else 
                    {
                        if(in_array($file_ext, $permited) === false)
                        {
                            echo "<span style='color: red; font-size: 48px; text-align: center;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                            
                        }
                        else
                        {
          
                            $stmt -> execute();
                            echo"<span style='color: green; font-family: Ferrum; font-size: 48px; display: flex; align-items: center; justify-content: center; text-align: center;'>Thêm thương hiệu thành công</span>";
                            echo "<a/ href='http://localhost/BaiTapVeNha/admin/index' style='text-align: center; font-size: 18px; font-family: Paris-2024; text-transform: uppercase; text-decoration: none;'>Quay lại trang chủ admin</a>";
                            exit();
                        }
                    } 
                    
                   
                }
} 
}catch(PDOException $e)
{
    echo "".$e -> getMessage();
}
return null;
        }


public function getLastestProduct()
{
    try {
        if(isset($this->__conn)) {
            $sql = "select * from product order by productID";
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

public function getBrandById($id)
{
    try {
        if(isset($this->__conn)) {
            $sql = "select * from brand where brandId = :id ";
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

public function getNewsById($id)
{
    try {
        if(isset($this->__conn)) {
            $sql = "select * from news where newsId = :id ";
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
public function getLastestNews()
    {
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

    public function getNewsForCol2()
    {
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
    public function getBrand()
    {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from brand order by brandId limit 6";
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

public function updateProduct($productName, $productPrice,  $productBrand,$importedAt,  $productImage, $id)
    {
    try{
    if(isset($this -> __conn))
    {

   
        $permited = array('jpg', 'png', 'gif');
        $file_name = $_FILES["image"]["name"];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $target_dir = "./uploads/";
        $uploaded_image = $target_dir.$unique_image;
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $max_file_size = 1024;
        
        
         if($productName === "" ||  $productPrice === "" || $productBrand === "" ||  $importedAt === "" )
        {
            $alert = "<span style='color: red; font-family: Ferrum; font-size: 18px;'>Vui lòng nhập vào các trường còn thiếu</span>";
            return $alert;
        }
         else
        {  
            if(!empty($file_name))
            {
                if($file_size_valid = $file_size > $max_file_size * 2048)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>File tải lên không được vượt quá".$file_size_valid."</span>";
                        return $alert;
                    }

                    elseif(in_array($file_ext, $permited) === false)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                        return $alert;
                    }
                    $sql = "UPDATE `product` 
                    set
                    `productName` = :productName,
                    `productPrice` = :productPrice,
                    `productBrand` = :productBrand,
                    `importedAt` = :importedAt,
                    `productImage` = :unique_image
                     WHERE productId = :id;"; 
                    
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":productName",$productName, PDO::PARAM_STR);
                    $stmt -> bindParam(":productPrice", $productPrice, PDO::PARAM_STR);
                    $stmt -> bindParam(":productBrand", $productBrand, PDO::PARAM_STR);
                    $stmt -> bindParam(":importedAt", $importedAt, PDO::PARAM_STR);
                    $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                    $result = $stmt -> execute();
                   
            }
            else
            {
                $sql = "UPDATE `product` 
                    set `productName` = :productName,
                    `productPrice` = :productPrice,
                    `productBrand` = :productBrand,
                    `importedAt` = :importedAt
                     WHERE productId = :id;"; 
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":productName",$productName, PDO::PARAM_STR);
                    $stmt -> bindParam(":productPrice", $productPrice, PDO::PARAM_STR);
                    $stmt -> bindParam(":productBrand", $productBrand, PDO::PARAM_STR);
                    $stmt -> bindParam(":importedAt", $importedAt, PDO::PARAM_STR);
                    $result = $stmt -> execute();
                    
                  
            }
            if($result)
            {
                echo "<span style='color: green; font-size: 18px; font-family: Paris-2024;'>Cập nhật thông tin sản phẩm thành công</span>";
                
            }
            else
            {
                echo "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Cập nhật thông tin sản phẩm không thành công</span>";
                
            }
        }
    }
    }
    catch(PDOException $e)
    {
        echo "". $e->getMessage();
    }return null;
    }
public function updateBrand($brandName, $id)
    {
    try{
    if(isset($this -> __conn))
    {
        $permited = array('jpg', 'png', 'gif');
        $file_name = $_FILES["image"]["name"];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $target_dir = "./uploads/";
        $uploaded_image = $target_dir.$unique_image;
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $max_file_size = 1024;
         if($brandName === "")
        {
            $alert = "<span style='color: red; font-family: Ferrum; font-size: 18px;'>Vui lòng nhập vào các trường còn thiếu</span>";
            return $alert;
        }
         else
        {  
            if(!empty($file_name))
            {
                if($file_size_valid = $file_size > $max_file_size * 2048)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>File tải lên không được vượt quá".$file_size_valid."</span>";
                        return $alert;
                    }

                    elseif(in_array($file_ext, $permited) === false)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                        return $alert;
                    }
                    $sql = "UPDATE `brand` 
                    set
                    `brandName ` = :brandName,
                    `brandLogo` = :unique_image
                     WHERE brandId = :id;"; 
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":brandName",$brandName, PDO::PARAM_STR);
                    $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                    $result = $stmt -> execute();
                   
            }
            else
            {
                    $sql = "UPDATE `brand` 
                    set `brandName` = :brandName
                     WHERE brandId = :id;"; 
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":brandName",$brandName, PDO::PARAM_STR);

                    $result = $stmt -> execute();
                    
                  
            }
            if($result)
            {
                echo "<span style='color: green; font-size: 18px; font-family: Paris-2024;'>Cập nhật thông tin thương hiệu thành công</span>";
                echo "<a/ href='http://localhost/BaiTapVeNha/admin/index'>Quay lại trang chủ admin</a>";
                
            }
            else
            {
                echo "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Cập nhật thông tin thương hiệu không thành công</span>";
                
            }
        }
    }
    }
    catch(PDOException $e)
    {
        echo "". $e->getMessage();
    }return null;
    }

    public function updateNews($newsName, $newsDesc,$id)
    {
    try{
    if(isset($this -> __conn))
    {
        $permited = array('jpg', 'png', 'gif');
        $file_name = $_FILES["image"]["name"];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $target_dir = "./uploads/";
        $uploaded_image = $target_dir.$unique_image;
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $max_file_size = 1024;
         if($newsName === "" || $newsDesc === "")
        {
            $alert = "<span style='color: red; font-family: Ferrum; font-size: 18px;'>Vui lòng nhập vào các trường còn thiếu</span>";
            return $alert;
        }
         else
        {  
            if(!empty($file_name))
            {
                if($file_size_valid = $file_size > $max_file_size * 2048)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>File tải lên không được vượt quá".$file_size_valid."</span>";
                        return $alert;
                    }

                    elseif(in_array($file_ext, $permited) === false)
                    {
                        $alert = "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Bạn chỉ có thể tải lên các file".implode('.', $permited)."</span>";
                        return $alert;
                    }
                    $sql = "UPDATE `news` 
                    set
                    `newsName ` = :newsName,
                    `newsDesc` = :newsDesc,
                    `newsImage` = :unique_image
                     WHERE newsId = :id;"; 
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":newsName",$newsName, PDO::PARAM_STR);
                    $stmt -> bindParam(":newsDesc",$newsDesc, PDO::PARAM_STR);
                    $stmt -> bindParam(":unique_image", $unique_image, PDO::PARAM_STR);
                    $result = $stmt -> execute();
            }
            else
            {
                $sql = "UPDATE `news` 
                    set `newsName` = :newsName,
                    `newsDesc` = :newsDesc
                     WHERE newsId = :id;"; 
                    move_uploaded_file($file_temp, $uploaded_image);     
                    $stmt = $this -> __conn -> prepare($sql);
                    $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
                    $stmt -> bindParam(":newsName",$newsName, PDO::PARAM_STR);
                    $stmt -> bindParam(":newsDesc",$newsDesc, PDO::PARAM_STR);
                    $result = $stmt -> execute();
                    
                  
            }
            if($result)
            {
                echo "<span style='color: green; font-size: 18px; font-family: Paris-2024;'>Cập nhật tin tức thành công</span>";
                
            }
            else
            {
                echo "<span style='color: red; font-size: 18px; font-family: Paris-2024;'>Cập nhật tin tức không thành công</span>";
                
            }
        }
    }
    }
    catch(PDOException $e)
    {
        echo "". $e->getMessage();
    }return null;
    }   
    
    public function deleteProduct($id)
    {
        try
        {
            if(isset($this -> __conn))
            {
                $sql = "DELETE FROM product where productId = :id";
                $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":id", $id, PDO::PARAM_STR);
                $result = $stmt -> execute();
                
                if($result)
                {
                    echo "<span style='color: green; font-size: 18px; font-family: Paris-2024'>Xóa sản phẩm thành công</span>";
                }
                else
                {
                    echo "<span style='color: red; font-size: 18px; font-family: Paris-2024'>Xóa sản phẩm không thành công</span>";
                }
                return $result;
            }   
        }
        catch(PDOException $e)
        {
            echo "".$e -> getMessage();
        }
    }

    public function deleteBrand($id)
    {
        try
        {
            if(isset($this -> __conn))
            {
                $sql = "DELETE FROM brand where brandId = :id";
                $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":id", $id, PDO::PARAM_STR);
                $result = $stmt -> execute();
                
                if($result)
                {
                    echo "<span style='color: green; font-size: 18px; font-family: Paris-2024'>Xóa thương hiệu thành công</span>";
                }
                else
                {
                    echo "<span style='color: red; font-size: 18px; font-family: Paris-2024'>Xóa thương hiệu không thành công</span>";
                }
                return $result;
            }   
        }
        catch(PDOException $e)
        {
            echo "".$e -> getMessage();
        }
    }

    public function deleteNews($id)
    {
        try
        {
            if(isset($this -> __conn))
            {
                $sql = "DELETE FROM news where newsId = :id";
                $stmt = $this -> __conn -> prepare($sql);
                $stmt -> bindParam(":id", $id, PDO::PARAM_STR);
                $result = $stmt -> execute();
                
                if($result)
                {
                    echo "<span style='color: green; font-size: 18px; font-family: Paris-2024'>Xóa tin tức thành công</span>";
                }
                else
                {
                    echo "<span style='color: red; font-size: 18px; font-family: Paris-2024'>Xóa tin tức không thành công</span>";
                }
                return $result;
            }   
        }
        catch(PDOException $e)
        {
            echo "".$e -> getMessage();
        }
    }
}
?>
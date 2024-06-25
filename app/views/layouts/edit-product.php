
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/BaiTapVeNha/app/asset/css/upload.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<?php $this -> view("./layouts/navbar");?>


    <div class="parent">
    
    <div class="container1">
    <h1>Edit Product</h1>
    <form method="POST" class="formSubmit" enctype="multipart/form-data" action="http://localhost/BaiTapVeNha/admin/editproduct">
    <!-- Form fields -->
<?php 

$productItems = $data["product"];
foreach($productItems as $productItem)
{
?>
    <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $productItem["productImage"]?>" style="width: 50%; height: auto;">
    <input type="hidden" value="<?php echo $productItem["productId"]?>" name="id"/>
    <input type="text" name="productName" placeholder="Enter Product Name" value="<?php echo $productItem["productName"]?>" />
    <input type="text" name="productPrice" placeholder="Enter Product Price" value="<?php echo $productItem["productPrice"]?>"/>
    <input type="text" name="productBrand" placeholder="Enter Product Brand" value="<?php echo $productItem["productBrand"]?>"/>
    <input type="text" name="importedAt" placeholder="Enter Imported Date" value="<?php echo $productItem["importedAt"]?>"/>
    <input type="file" name="image" />
    <button type="submit" name="submit">Submit</button>
<?php
}
?>
</form>
    </div>
    </div>

</body>
</html>
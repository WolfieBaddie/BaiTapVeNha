
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/BaiTapVeNha/app/asset/css/upload.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    
    <div class="parent">
    <div class="container1">
    <?php $brandItems = $data["brand"];
            foreach($brandItems as $brandItem)
            {
    ?>
    <form method="POST" class="formSubmit" enctype="multipart/form-data" action="http://localhost/BaiTapVeNha/admin/editbrand">
    <!-- Form fields -->
     <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $brandItem["brandLogo"]?> " style="object-fit: cover; width: 50%; height: auto;"/>
     <input type="hidden" value="<?php echo $brandItem["brandId"]?>" name="id"/>
    <input type="text" name="brandName" placeholder="Enter Brand Name" value="<?php echo $brandItem["brandName"]?>"/>
    <input type="file" name="image" />
    <button type="submit" name="submit">Submit</button>
    <?php  
                }
    ?>
</form>
    
    </div>
    </div>
    <?php if (isset($data["addproduct"])) : ?>
    <div><?php echo $data["addproduct"]; ?></div>
<?php endif; ?>
</body>
</html>

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
    <form method="POST" class="formSubmit" enctype="multipart/form-data" action="http://localhost/BaiTapVeNha/admin/addbrand">
    <!-- Form fields -->
    <input type="text" name="brandName" placeholder="Enter Brand Name" />
    <input type="file" name="image" />
    <button type="submit" name="submit">Submit</button>
</form>
    
    </div>
    </div>
    <?php if (isset($data["addproduct"])) : ?>
    <div><?php echo $data["addproduct"]; ?></div>
<?php endif; ?>
</body>
</html>
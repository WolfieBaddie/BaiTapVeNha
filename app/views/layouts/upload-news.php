
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
    <form method="POST" class="formSubmit" enctype="multipart/form-data" action="http://localhost/BaiTapVeNha/admin/addnews">
    <!-- Form fields -->
    <input type="text" name="newsName" placeholder="Enter News Title" />
    <input type="text" name="newsDesc" placeholder="Enter News Desc" />
    <input type="date" name="postedAt" />
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
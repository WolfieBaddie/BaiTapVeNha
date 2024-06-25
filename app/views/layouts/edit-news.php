
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
        <?php $newsItems = $data["news"];
            foreach($newsItems as $newsItem)
            {
        ?>
    <form method="POST" class="formSubmit" enctype="multipart/form-data" action="http://localhost/BaiTapVeNha/admin/editnews">
    <!-- Form fields -->
     <input type="hidden" name="id" value="<?php echo $newsItem["newsId"]?>"/>
    <input type="text" name="newsName" placeholder="Enter News Title" value="<?php echo $newsItem["newsName"]?>"/>
    <input type="text" name="newsDesc" placeholder="Enter News Desc"  value="<?php echo $newsItem["newsDesc"]?>"/>
    <input type="file" name="image" />
    <button type="submit" name="submit">Submit</button>
    <?php                 
            }?>
</form>
    </div>
    </div>
</body>
</html>
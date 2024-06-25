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
    <div class="container">
    <form method="POST" class="formSubmit" action="http://localhost/BaiTapVeNha/admin/adduser">
        <label for="User Name">Username</label>
        <input type="text" name="userName" placeholder="Enter User Name" />
        <label for="User Password">UserPassword</label>
        <input type="text" name="userPassword" placeholder="Enter User Password" />
        <label for="User Role">User Role</label>
        <input type="text" name="userRole" placeholder="Enter User Role" />
        <label for="User Active">User Active</label>
        <input type="number" name="userActive" placeholder="Enter User Active" />
        <div class="submit">
    <button value="submit" style="color: #fff;"> Submit
    </div>
    </form>
    
    </div>
    </div>
    <?php if (isset($data["addproduct"])) : ?>
    <div><?php echo $data["addproduct"]; ?></div>
<?php endif; ?>
</body>
</html>
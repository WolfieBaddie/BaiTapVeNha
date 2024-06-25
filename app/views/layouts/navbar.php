<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/BaiTapVeNha/app/asset/css/menu.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

            <ul>
            <?php 
            if(isset($_SESSION["user"])): ?>
        
    <div class="container">
    <p style="font-family: 'Ferrum'; font-size: 32px; font-weight: bold; text-transform: uppercase; float: left !important;">Hello <?=$_SESSION["user"]["userName"]?></p>
        <nav>
       <?php if($_SESSION["user"]["userRole"] === "admin"){
        echo "<li><a href='http://localhost/BaiTapVeNha/admin/index' class='rolling-text' style='text-transform: uppercase;'>Admin</a></li>";        
       };
       ?>
        <li><a href="http://localhost/BaiTapVeNha/home/index" class="rolling-text">HOME</a></li>
        <li><a href="" class="rolling-text">PROJECTS</a></li>
        <li><a href="" class="rolling-text">ABOUT</a></li>
        <li><a href="http://localhost/BaiTapVeNha/app/views/layouts/contact.php" class="rolling-text">CONTACT</a></li>
        <li><a style = "font-family: Ferrum; text-decoration: none; text-transform: uppercase;" href="http://localhost/BaiTapVeNha/user/logout" class="rolling-text">Logout</a></li>
    <?php else : ?>
        <li><a class="rolling-text" style = "font-family: Ferrum; text-decoration: none; text-transform: uppercase;" href="http://localhost/BaiTapVeNha/user/login">Login</a></li>
    <?php endif; ?>
    </ul>
        </nav>
    </div>
    <script>
        let elements = document.querySelectorAll(".rolling-text");

        elements.forEach((element) => {
            let innerText = element.innerText;
            element.innerHTML = "";

            let textContainer = document.createElement("div");
            textContainer.classList.add("block");

            for(let letter of innerText)
            {
                let span = document.createElement("span");
                span.innerText = letter.trim() === "" ? "\xa0" : letter;
                span.classList.add("letter");
                textContainer.appendChild(span);
            }

            element.appendChild(textContainer);
            element.appendChild(textContainer.cloneNode(true));
        });

        elements.forEach((element ) => {
            element.addEventListener("mouseover", () => {
                element.classList.remove("play");
            });
        });
    </script>
</body>
</html>
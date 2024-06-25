<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="blog-section">
            <div class="title">
                <h2>News</h2>
                <p>
                Welcome to the AutoHub News Hub!
                Your one-stop shop for all the latest automotive news, reviews, and insights.
                In the ever-evolving world of automobiles, staying ahead of the curve is essential. Whether you're a seasoned car enthusiast or a first-time buyer, our News Hub is here to keep you informed and entertained.
                </p>
            </div>
            <div class="blog-col">
            <div class="cards-1">
                <?php $lastestNewsItems = $data["lastest_news"];
                    foreach($lastestNewsItems as $lastestNewsItem)
                    {
                ?>
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $lastestNewsItem["newsImage"]?>" style="width: 50%; height: auto;"/>
                    </div>
                    <div class="content">
                        <h4 style="font-size: 64px; font-family: Paris-2024; font-style: italic;"><?php echo $lastestNewsItem["newsName"]?></h4>
                        <p style="font-size: 48px;"><?php echo $lastestNewsItem["newsDesc"]?></p>
                        <a href ="">Read More</a>
                    </div>
                    <div class="posted-date">
                        <p>Posted on Aug 7, 2023</p>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="cards-2">
                <?php $newsCol2Items = $data["news_col2"];
                    foreach($newsCol2Items as $newsCol2Item)
                    {
                ?>
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $newsCol2Item["newsImage"]?>"/>
                    </div>
                    <div class="content">
                        <h4><?php echo $newsCol2Item["newsName"]?></h4>
                        <p ><?php echo $newsCol2Item["newsDesc"]?></p>
                        <a href ="">Read More</a>
                    </div>
                    <div class="posted-date">
                        <p>Posted on Aug 7, 2023</p>
                    </div>
                </div>
                <?php }?>
            </div>
            </div>
    </div>
    <div class="container-shop">
        <div class="shop-section">
            <div class="title">
                <h2>Newest Cars Available</h2>
                <p>
Here are some titles for the shop section of an automobile website, depending on the specific focus of your shop:
                </p>
            </div>

            <div class="cards">
            <?php if(isset($data) && is_array($data))
            {   $shopItems = $data["shop"];
                foreach($shopItems as $shopItem){
           ?>
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $shopItem["productImage"]?>" style="width: 90%"/>
                    </div>
                    <div class="content">
                        <h4><?php echo $shopItem["productName"]?></h4>
                        <p><?php echo $shopItem["productPrice"]?>$</p>
                        <a href ="http://localhost/BaiTapVeNha/product/index/<?php echo $shopItem["productId"]?>">Order Now</a>
                    </div>
                    <div class="posted-date">
                        <p>Imported On:<?php echo $shopItem["importedAt"]?></p>
            </div>
        </div>
        <?php
         }
        }?>
    </div>

        </div>
        </div>

        <div class="container">
        <div class="delivery-section">
            <div class="title">
                <h2>DELIVERY</h2>
              
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/app/asset/images/carmeet.jpg"/>
                    </div>
                    <div class="content">
                        <h4>Title One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In inventore praesentium cumque enim nam voluptatem voluptas ipsum numquam sequi consequatur magni quae reiciendis, obcaecati mollitia dolor architecto libero totam officia.</p>
                        <a href ="">Read More</a>
                    </div>
                    <div class="posted-date">
                        <p>Posted on Aug 7, 2023</p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="about-section">
            <div class="title">
                <h2>Customer Review</h2>
                <p>
                   
                </p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/app/asset/images/cuongdola.jpg"/>
                    </div>
                    <div class="content">
                        <h4>Title One</h4>
                        <p>For two decades, our automobile company has been at the forefront of innovation, excellence, and reliability in the automotive industry. 
                            Since our inception twenty years ago, we've strived relentlessly to exceed expectations and set new standards for quality and performance. 
                            Our commitment to cutting-edge technology, sustainable practices, and customer satisfaction has been unwavering throughout our journey.
                          
                               As we celebrate two decades of success, we remain dedicated to pushing boundaries, shaping the future of mobility, and driving towards a brighter tomorrow.</p>
                        <a href ="">Read More</a>
                    </div>
                    <div class="posted-date">
                        <p>Posted on Aug 7, 2023</p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>
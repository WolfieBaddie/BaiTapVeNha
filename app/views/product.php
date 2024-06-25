<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="http://localhost/BaiTapVeNha/app/asset/css/otherstyle.css">
</head>
<body>
    <?php $this -> view("layouts/navbar");?>
    <?php $productItems = $data["product"];
            foreach($productItems as $productItem)
            {
    ?>
    <div class="page-content">
        <div class="col product-img">
            <div class="product-img-wrapper">
                <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $productItem["productImage"]?>" alt="" >
                
            </div>
        </div>
        <div class="col product-copy">
            <div class="product-details">
                <p>Ferrari – a name that resonates with speed, luxury, and the pinnacle of automotive engineering. Since its inception in 1939 by the visionary Enzo Ferrari, the marque has stood as an enduring symbol of Italian passion and automotive excellence. With a heritage steeped in racing glory, Ferrari has consistently pushed the boundaries of innovation, crafting iconic sports cars and supercars that captivate enthusiasts and thrill seekers alike. Beyond its reputation on the racetrack, Ferrari represents an unparalleled fusion of artistry and performance, where each vehicle embodies the spirit of its creators and ignites the imagination of all who encounter it. In this introduction, we delve into the illustrious history, the relentless pursuit of perfection, and the enduring legacy of Ferrari, an emblem of automotive greatness revered across the globe.</p>
                <p data-text="<?php echo $productItem["productName"]?>" style="font-size: 48px; text-transform: uppercase;"><?php echo $productItem["productName"]?></p>
                <p><?php echo $productItem["productDesc"]?></p>
            
</div>

                <br>
                <div class="product-details-1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id adipisci unde eligendi deserunt velit corrupti earum in. Quas doloremque esse deserunt iste ex cumque quasi ea similique ad veniam!</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laudantium hic obcaecati expedita voluptatum blanditiis. Reprehenderit, explicabo fuga! Magni delectus ipsum necessitatibus, autem esse similique in velit. Quam, sunt culpa.</p>
                <br>
                <p>$450,000</p>
                </div>
            <div class="product-vars">
                <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $productItem["productImage"]?>" alt=""/>
                <img src="http://localhost/BaiTapVeNha/app/asset/images/mau-xe-ferrari-488-avorio.png" alt="">
                <img src="http://localhost/BaiTapVeNha/app/asset/images/mau-xe-ferrari-488-blu-abu-dhabi.png" alt="">
                <img src="http://localhost/BaiTapVeNha/app/asset/images//mau-xe-ferrari-488-nero-ds-1250.png" alt="">
                <img src="http://localhost/BaiTapVeNha/app/asset/images/mau-xe-ferrari-488-bianco-avus.png" alt="">
                
            </div>
            <?php 
}?>
            <button class="color">
                select your color<i class="ph-bold ph-arrow-right"></i>
            </button>

            <div class="other-products">
                <div class="product">
                    <h1>Other Product</h1>
                    <img src="http://localhost/BaiTapVeNha/app/asset/images/anh-dai-dieb-porsche-911-carrera-s-tinbanxe.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil odio doloribus libero nobis voluptates provident laborum iure modi suscipit, error expedita quia itaque cum, pariatur culpa, fugiat laboriosam exercitationem.</p>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="http://localhost/BaiTapVeNha/app/asset/js/main.js"></script>
</body>
</html>
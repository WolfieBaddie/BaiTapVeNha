<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="http://localhost/BaiTapVeNha/app/asset/css/admin.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<?php $product = $data["product"];?>
<?php $this -> view("layouts/navbar")?>

    <div class="container">
    <div class="col-1">
        <div class="news-header" style="display: flex; justify-content: center; text-align: center;">
        <p style=" color: #fff; background-color: rgba(34,49,63); width: 450px; height: auto; font-size: 48px; font-family: SilkaMono; font-weight: bold;
        border: 0px solide #fff; border-radius: 30px;">NEWS SECTION</p>
        </div>
        <div class="news-section">
            </br>
            <p style="font-size: 32px; font-family: SilkaMono; font-weight: bold; text-transform: uppercase; text-align: center; color: #fff;">Lastest New</p>
            <div class="posted-at">
                
            </div>
            <div class="cards">
                <?php $newsItems = $data["news"];
                    foreach($newsItems as $newsItem){
                ?>
                <div class="card">
                <p style="font-size: 32px; text-transform: uppercase; color: #fff; font-family: Paris-2024">Posted On: <?php echo $newsItem["postedAt"];?></p>
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $newsItem['newsImage']?>"/>
                    </div>
                    <div class="content">
                        <h4><?php echo $newsItem["newsName"]?></h4>
                        <p><?php echo $newsItem["newsDesc"];?></p>
                    </div>
                    
                    <a href="http://localhost/BaiTapVeNha/admin/editnews/<?php echo $newsItem['newsId']?>"><button>Edit</button></a>
                    <a href="http://localhost/BaiTapVeNha/admin/deletenews/<?php echo $newsItem["newsId"]?>"onclick = "return confirm('Bạn có muốn xóa tin tức này không?')"><button>Delete</button></a>
                    <div class="view-more">
                 <button><a>View More</a></button>
                 </div>
                </div>
                <?php
                }
                ?>
                <div class="add">
                <a href="http://localhost/BaiTapVeNha/app/views/layouts/upload-news.php" ><button>Add</button></a>
            </div>
            </div>
           
        </div>
        <div class="news-header" style="display: flex; justify-content: center; text-align: center;">
        <p style=" color: #fff; background-color: rgba(34,49,63); width: 450px; height: auto; font-size: 48px; font-family: SilkaMono; font-weight: bold;
        border: 0px solide #fff; border-radius: 30px;">PRODUCTS SECTION</p>
        </div>
        <div class="products">
         
        <div class="cards">
        <?php $productItems = $data["product"];
            foreach($productItems as $productItem)
            {
            ?>
                <div class="card">
                <p style="font-family: Ferrum; font-size: 16px; color: #fff">Imported At: <?php echo $productItem["importedAt"]?></p>
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $productItem['productImage']?>"/>
                    </div>
                    <div class="content">
                        <h4><?php echo $productItem["productName"]?></h4>
                        <p style="color: green"><?php echo $productItem["productPrice"]?>$</p>
                        <p><?php echo $productItem["productBrand"]?></p>
                    </div>
                    <a href="http://localhost/BaiTapVeNha/admin/editproduct/<?php echo $productItem['productId']?>"><button>Edit</button></a>
                    <a href="http://localhost/BaiTapVeNha/admin/deleteproduct/<?php echo $productItem["productId"]?>" onclick = "return confirm('Bạn có muốn xóa sản phẩm này không?')"><button>Delete</button></a>
            </div>
            <?php }?>
            </div>
            
            <div class="add">
            <a href="http://localhost/BaiTapVeNha/app/views/layouts/upload-product.php"><button >Add</button></a>
            </div>
               
     </div>  
</div>   
     <div class="col-2">
     <div class="news-header" style="display: flex; justify-content: center; text-align: center;">
        <p style=" color: #fff; background-color: rgba(34,49,63); width: 450px; height: auto; font-size: 48px; font-family: SilkaMono; font-weight: bold;
        border: 0px solide #fff; border-radius: 30px; text-transform: uppercase;">Stastistics</p>
        </div>
        <div class="statistics">
        <div class="cards">
                <div class="card">
                    <div class="content">
                    <div class="table-responsive">
                    <table >
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                        </table>
                    </div>
                    </div>
                    <div class="view" >
                    <button><a>View More</a></button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="news-header" style="display: flex; justify-content: center; text-align: center;">
        <p style=" color: #fff; background-color: rgba(34,49,63); width: 450px; height: auto; font-size: 48px; font-family: SilkaMono; font-weight: bold;
        border: 0px solide #fff; border-radius: 30px; text-transform: uppercase;">Brand</p>
        </div>
        <div class="brand">
            <div class="cards">
                <?php
                $brandItems = $data["brand"];
                foreach($brandItems as $brandItem)
                {
                ?>
                <div class="card">
                    <div class="image-section">
                        <img src="http://localhost/BaiTapVeNha/uploads/<?php echo $brandItem['brandLogo']?>"/>
                    </div>
                    <div class="content">
                        <h4><?php echo $brandItem ["brandName"]?></h4>
                    </div>
                    <div class="button-1">
                    <a href="http://localhost/BaiTapVeNha/admin/editbrand/<?php echo $brandItem["brandId"]?>"><button>Edit</button></a>
                    <a href="http://localhost/BaiTapveNha/admin/deletebrand/<?php echo $brandItem["brandId"]?>"  onclick = "return confirm('Bạn có muốn xóa thương hiệu này không?')"><button>Delete</button></a>
                </div>
                </div>
                <?php
                   }
                ?>
            </div>
            <div class="button-2">
            <a href="http://localhost/BaiTapVeNha/app/views/layouts/upload-brand.php"><button>Add</button></a>
        </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
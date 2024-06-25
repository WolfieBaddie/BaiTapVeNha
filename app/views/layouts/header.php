<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="http://localhost/BaiTapVeNha/app/asset/css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="text-slider-wrapper">
        <div class="text-slider">
            <div class="text-slide"><h1>A blessing for Aespa<br/>Winter</h1></div>
            <div class="text-slide"><h1>Aespa Winter<br/>in Gucci Show</h1></div>
            <div class="text-slide"><h1>Long hair Winter vs<br/>Short hair Winter</h1></div>
            <div class="text-slide"><h1>Street girl <br/>Winter</h1></div>
            <div class="text-slide"><h1>Aespa Winter in MLB <br/>Show</h1></div>
        </div>
    </div>

    <div class="slider-control">
        <div class="prev" type="button"><button><ion-icon name="arrow-back"></ion-icon></button></div>
        <div class="next" type="button"><button><ion-icon name="arrow-forward"></ion-icon></button></div>
    </div>

    <div class="blocks">
        <div class="block-1"></div>
        <div class="block-2"></div>
        <div class="block-3"></div>
    </div>

    <div class="overlay"></div>

    <div class="image-slider">
        <div class="image-slide" id="one" style="background: url(http://localhost/BaiTapVeNha/app/asset/images/Winter3.jpg) no-repeat 50% 50%; background-size: cover;"></div>
        <div class="image-slide" id="two" style="background: url(http://localhost/BaiTapVeNha/app/asset/images/Winter4.jpeg) no-repeat 50% 50%; background-size: cover;"></div>
        <div class="image-slide" id="three" style="background: url(http://localhost/BaiTapVeNha/app/asset/images/Winter6.jpg) no-repeat 50% 50%; background-size: cover;"></div>
        <div class="image-slide" id="four" style="background: url(http://localhost/BaiTapVeNha/app/asset/images/Winter1.jpg) no-repeat 50% 50%; background-size: cover;"></div>
        <div class="image-slide" id="five" style="background: url(http://localhost/BaiTapVeNha/app/asset/images/Winter2.jpg) no-repeat 50% 50%; background-size: cover;"></div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  


<script>
    $(document).ready(function(){
    var slickPrimary =
    {
        autoplay: true,
        autoplaySpeed: 2400,
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 1800,
        cssEase: 'cubic-bezier(.05, 0, .08, .99)',
        asNavFor: '.text-slider',
        centerMode: true,
        height: 0,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    };

    var slickSecondary =
    {
        autoplay: true,
        autoplaySpeed: 2400,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1800,
        
        cssEase: 'cubic-bezier(.05, 0, .08, .99)',
        asNavFor: '.image-slider',
        centerMode: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    };


$('.image-slider').slick(slickPrimary);
$('.text-slider').slick(slickSecondary);

});
</script>
</body>
</html>
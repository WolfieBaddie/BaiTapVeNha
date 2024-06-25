<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<title>Document</title>
</head>
<body>
<?php 
        $this -> view("./layouts/navbar");
        $this -> view("./layouts/header");
        $this -> view($data["content"], $data);
        $this -> view("./layouts/footer");
    ?>


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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
</body>
</html>
<?php

//error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="../public/assets/">
    <link rel="icon" href="img/<?php echo $tab_icon;?>">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $(window).on('load', function() {
            $('.preloader').addClass('complete').delay(1000).fadeOut(1000);
            $('.loader').slideUp(1000);
            $('.logo>img').click(function() {
            window.open('http://localhost/coolstar', '_blank');

        });
        });
        
        function slideShow() {
                $("#slide-bg>img").first().appendTo('#slide-bg').fadeOut(1500);
                $("#slide-bg>img").first().fadeIn(2500);    
                setTimeout(slideShow, 6000);
            }    

        

    </script>
    
    <title> <?php echo $title;?></title> 
</head>
<body onLoad="slideShow();">
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <section id="app-home">
        <header>
            <div class="logo">
                <img src="img/logo.png" alt="coolstar_logo" title="coolstar_logo">
                <img src="img/logo.png" alt="coolstar_logo" title="coolstar_logo">
            </div>
            <div class="menu">
                <div class="burger-toggle">&#9776</div>
                <nav>
                    <ul>
                        <!-- MAKE HOME TO APPEAR ONLY WHEN BEING ON A DIFFERENT PAGE THAN HOME -->
                        <li>Home</li>
                        <li>Gallery</li>
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- IDEEA FROM http://jsfiddle.net/p6ac5u27/19/ -->
        <section id="slide-bg">
            <img src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/34061927_2041950232730797_5181677003794808832_n.jpg?_nc_cat=0&oh=73a3e7a57e2b43ea324aa88796262cb6&oe=5C1150B6">
            <img src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/34051764_2042929152632905_5655939541865857024_n.jpg?_nc_cat=0&oh=63969a65c4a8999ffb417666bda295c4&oe=5C043553">
            <img src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/38888290_2110185869240566_3043079793454088192_n.jpg?_nc_cat=0&oh=3a708142c2b82a54589374b52d2d2d73&oe=5C3A80BC" alt="">
            <img src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/36376252_2064303530495467_4901805888131563520_n.jpg?_nc_cat=0&oh=138c5055501f83c818a0e3c3b491592c&oe=5C0088B6" alt="">
            <img src="https://scontent.fotp3-2.fna.fbcdn.net/v/t1.0-9/31945352_2030372083888612_7053055402111401984_n.jpg?_nc_cat=0&oh=e0b3ad65655fc6f3658a82e82ccf9738&oe=5C0B6317" alt="">
        </section>

        <section id="content">

        </section>

    </section>

</body>

<script>
$(document).ready(function() {
            $('.burger-toggle').on("click",function() {
                $("nav").toggleClass("active");
            });
        });
</script>
</html>
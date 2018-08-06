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
            //$('.loader').addClass('end');
            $('.loader').slideUp(1000);
        })
    </script>
    
    <title> <?php echo $title;?></title>
</head>
<body>
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <section id="app">
        <header>
            <div class="container">
                <div class="logo">
                    <img src="img/logo.png" alt="Because i am cool and also a star" title="Because i am cool and also a star">
                </div>
                <div class="wrapper">
                    <div class="b1"></div>
                    <div class="b2"></div>
                    <div class="b3"></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="../gallery">Gallery</a></li>
                        <li><a href="../?test=23">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
</body>
</html>
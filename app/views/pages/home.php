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
            
        </header>
    </section>

</body>
</html>
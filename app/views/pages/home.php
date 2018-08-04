<?php


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
            $('.preloader').addClass('complete');
            $('.loader').addClass('end');
            $('iframe').addClass('opac');
        })
    </script>
    
    <title> <?php echo $title;?></title>
</head>
<body>
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <h1>Loaded</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/aUvfzHHTKJU?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QekbCAR3eF0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</body>
</html>
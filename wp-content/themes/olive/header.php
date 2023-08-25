<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

  <!-- links the header.php to the frontpage file -->
    <?php
    wp_head();
    ?>

</head>
<body>
    <section id="header">
        <div id="top-bar">
            <div id="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>               
                 <i class="fa-brands fa-facebook"></i>
            </div>
            <div id="logo">
                <img src="https://preview.colorlib.com/theme/cakeshop/assets/img/logo/logo.png.webp">
            </div>
            <div id="contact">
                <a Call href="#" class="button">Call Us: +10 783 346 4378</a>

            </div>

        </div>
        <div class="main-menu line">
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id"" class"">%3$s</ul>'
                    

                    )

                );

                ?>






                <ul id="navigation">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">CAKES</a>
                    </li>
                    <li>
                        <a href="#">ABOUT</a>
                    </li>
                    <li>
                        <a href="#" >BLOG</a>
                    </li>
                    <li>
                        <a href="#">CONTACT</a>
                    </li>
                </ul>
                <div class="line">

                </div>
            </nav>


        </div>

        <header class="container">
        <div class="caption">
            <h1 class="caption"><?php the_title(); ?></h1>
        </div>
    </header>
</section>
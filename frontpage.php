<?php
/*

template name: Frontpage

*/
include('header.php');
?>

    <body>

        <!-- BTC Address: <?php echo $btc; ?> -->
        <!-- ETH + ERC20 Address: <?php echo $eth; ?> -->
        <!-- XLM Address: <?php echo $xlm; ?> -->
        <!-- NANO Address: <?php echo $nano; ?> -->

        <div class="wrapper">

            <div class="wrapper-inner">

                <div class="name">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/white_1.png">
                </div>

                <?php /* <div class="under-text">
                <h3>welcome.</h3>

            </div>*/?>

                <ul class="social">

                    <li><a class="social-item" id="facebook" href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="social-item" id="linkedin" href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="social-item" id="github" href="<?php echo $github; ?>" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a class="social-item" id="instagram" href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="social-item" id="goodreads" href="<?php echo $goodreads; ?>" target="_blank"><i class="fab fa-goodreads-g"></i></a></li>

                    <li class="email-link-outer">
                        <a class="email-link" target="_blank" href="mailto:brandan.mcdevitt@gmail.com">brandan.mcdevitt@gmail.com</a>
                    </li>

                </ul>

            </div>

        </div>

    </body>
    <?php 
include('footer.php');
?>

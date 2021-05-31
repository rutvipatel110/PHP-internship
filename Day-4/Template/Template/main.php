<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/scheme-4.css" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <?php
        
        include './header.php';
        
        ?>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            
            <!-- section close -->

            <?php
            
            include './home.php';
            
            ?>

            <!-- section begin -->
            <?php
            
            include './aboutMe.php';
            
            ?>
            <!-- section close -->



            <!-- section begin -->
            
            <?php
            
            include './contact.php';
            
            ?>


            


        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2021 - Edit by Me
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        
        <div id="preloader">
            <div class="s1">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/typed-custom.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>
<!DOCTYPE HTML>
<!--
     Joaquin b.
-->
<html>
    <head>
        <title>La Farola</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $("a[rel^='prettyPhoto']").prettyPhoto({
                    allow_resize: true,
                    default_width: 1000,
                    default_height: 1000, });
            });
        </script>
    </head>
    <body>

        <!-- Header -->
        <div id="header"  >
            <div class="bg_pattern">

                <div class="container">

                    <!-- Logo -->
                    <div id="logo">
                        <h1><a href="#">La Farola</a></h1>
                        <span>Bar y restaurante</span>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li ><a href="index.php">Home</a></li>
                            <li class="active"><a href="Menu.php">Menu</a></li>
                            <li ><a href="contacto.php">Contacto</a></li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!-- Main -->
        <div id="main">
            <div class="container">
                <div class="row">



                    <!-- Content -->

                    <section>
                        <header>
                            <h2>Nuestro menu</h2>
                        </header>
                        <p>
                            <a rel="prettyPhoto"  href="images/folleto-delivery1.jpg" class="image full">
                                <img class="border" src="images/folleto-delivery1.jpg" alt="Nuestro menu">
                            </a>
                        </p>
                    </section>

                    <!-- /Content -->

                </div>

            </div>
        </div>
        <!-- Main -->

        <!-- Footer -->
        <?php
        require '/../../app/view/templates/footer.php';
        ?>
    </body>
</html>
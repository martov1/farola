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
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
        <?php
        require '/../app/view/templates/header.php';
        ?>
        <!-- Header -->

        <!-- Main -->
        <div id="main">
            <div class="container">
                <div class="row">

                    <!-- Sidebar -->
                    <div id="sidebar" class="4u">
                        <section>
                            <header>
                                <h2>Gravida praesent</h2>
                                <span class="byline">Praesent lacus congue rutrum</span>
                            </header>
                            <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Maecenas luctus lectus at sapien. Consectetuer adipiscing elit.</p>
                            <ul class="default">
                                <li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
                                <li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
                                <li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
                                <li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
                                <li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
                                <li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
                            </ul>
                        </section>
                    </div>
                    <!-- Sidebar -->

                    <!-- Content -->
                    <div id="content" class="8u skel-cell-important">
                        <section>
                            <header>
                                <h2>Left Sidebar</h2>
                                <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent</span>
                            </header>
                            <p><a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a></p>
                            <p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
                        </section>
                    </div>
                    <!-- /Content -->

                </div>

            </div>
        </div>
        <!-- Main -->

        <!-- Footer -->
      <?php 
        require '../app/view/templates/footer.php';
        ?>
    </body>
</html>
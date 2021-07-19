<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>La Boucherie du Village</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="style/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="style/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    
    <!-- Site CSS -->
    <link rel="stylesheet" href="style/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="style/css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="style/css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="style/images/LOGO-BOUCHERIE-DU-VILLAGE2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Accueil</a></li>
                                    <li><a href="#about">A propos</a></li>
                                    <li><a href="#gallery">Gallerie</a></li>
                                    <li><a href="#blog">Articles</a></li>
                                    <li><a href="#reservation">Réservation</a></li>
                                    <li><a href="login.php">Connexion</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Besoin d'un  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Boucher ?:Charcutier ?:Traiteur ?" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>La Boucherie du Village</h2>
                            <p>Votre artisan boucher vous invite à Saint-Zacharie dans sa boutique</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Réservez votre viande aujourd'hui</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> A propos de nous </h2>
                        <h3>Votre boucher avec 15 années d'expérience...</h3>
                        <p> Ouvert en 2019, la Boucherie du village.. </p>

                        <p> Votre boucher de 15 ans d’expérience vous accueille dans votre magasin pour vous offrir de la viande de qualité.
                            Nous sommes affiliés aux organismes comme Le Label Rouge, selectionnons des bêtes de concours dans le but de vous livrer le plus de saveurs dans votre assiette.
                            
                        </p>

                        <p> </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="style/images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="style/images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- end special-menu -->

    <!-- end menu -->


    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Galerie Photo	
					</h2>
                    </div>
                    <div class="gal-container clearfix">
                        <?php
                            
                            $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
                            $sth = $dbh->prepare("SELECT * FROM photo_accueil");
                            $sth->execute();
                            $result = $sth->fetchAll();

                            foreach ($result as $key => $value) {
                                echo("
                                <div class='col-md-4 col-sm-6 co-xs-12 gal-item'>
                                <div class='box'>
                                    <a href='#' data-toggle='modal' data-target='#".$value['id']."'>
                                        <img src='".$value['photo']."' alt='' />
                                    </a>
                                    <div class='modal fade' id='".$value['id']."' tabindex='-1' role='dialog'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
                                                <div class='modal-body'>
                                                    <img src='".$value['photo']."' alt='' />
                                                </div>
                                                <div class='col-md-12 description'>
                                                    <h4>".$value['titre']."</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>");
                            }

                        ?>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
					Nos Articles
                    </h2>
                

                    <div class="blog-box clearfix">
                    <?php

                        $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
                        $sth = $dbh->prepare("SELECT * FROM article ORDER BY ID DESC LIMIT 4");
                        $sth->execute();
                        $result = $sth->fetchAll();

                        foreach ($result as $key => $value) {
                            echo(
                            "<div class='wow fadeIn' data-wow-duration='1s' data-wow-delay='0.1s'>
                                <div class='col-md-6 col-sm-6'>
                                    <div class='blog-block'>
                                        <div class='blog-img-box'>
                                            <img src='".$value['photo']."' alt='' />
                                            <div class='overlay'>
                                            </div>
                                        </div>
                                        <div class='blog-dit'>
                                            <p>".$value['date']."</p>
                                            <h2>".$value['titre']."</h2>
                                            <h4>".$value['description']."</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>"
                            );
                        }

                    ?>
                    
                    </div>
                    <!-- end blog-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->
    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-5">
                        
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                La banque en temps reel	
					        </h2>
                        </div>
                        <div class="border-container">
                        <h4 class="form-title">Il vous est possible de réserver à l'instant présent une part de viande</h4>
                        <p>Un formulaire de réservation est disponible ci-dessous.</p>

                        </div>

                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						        Reservez une part specifique	
					        </h2>
                        </div>
                        <h4 class="form-title">Formulaire de Réservation d'une part de viande spécifique</h4>
                        <p>Merci d'inclure toutes les informations demandées, pour toute commande merci de nous appeler.</p>
                        <form method="post" class="reservations-box" name="reserv" action="admin/reservations_management.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Nom" required="required" data-error="Nom de famille requis">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="Adresse Mail" required="required" data-error="E-Mail requis">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="N° de téléphone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="parts" id="parts" class="selectpicker">
                                        <option selected disabled>Nombre de parts</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="pref" id="pref" class="selectpicker">
                                        <option selected disabled>Viande</option>
                                        <option>Boeuf</option>
                                        <option>Jambon</option>
                                        <option>Jambon cru</option>
                                        <option>Agneau</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" placeholder="Heure de collecte EXEMPLE: 17:30" required="required" data-error="Heure de collecte nécessaire." />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="btn btn-outline-danger fs-2" type="submit" name="reserv" value="Envoyer Réservation">Envoyer Réservation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img class="img-fluid" src="style/images/ENSEIGNE-BOUCHERIE-DU-VILLAGE-600.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>A propos</h3>
                                <p>Votre boucher de 15 ans d'expérience vous accueille dans sa boucherie située à Saint-Zacharie.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Nous contacter</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>56 Rue Jean Jaurès, 83640 Saint-Zacharie</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
                                        04 42 72 90 33 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">laboucherieduvilag.83@gmail.com</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Heures d'ouvertures</h3>
                                <ul>
                                    <li>
                                        <p>Mardi - Vendredi </p>
                                        <span> 9h00 - 19h30 </span>
                                    </li>
                                    <li>
                                        <p>Samedi - Dimanche</p>
                                        <span>  10h00 - 19h00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>
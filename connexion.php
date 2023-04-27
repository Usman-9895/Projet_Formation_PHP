<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
                   <!-- Fontawesome -->
            <link rel="stylesheet" href="fontawesome/css/all.css">
            <script src="https://kit.fontawesome.com/f7c15d9226.js" crossorigin="anonymous"></script>
            <title>Connexion</title>
        </head>
        <body>

        <div class="bg">
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-white fixed-top" id="navbar">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="150px"  alt="banlieu emploi"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="menu">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item page-scroll">
              <a class="nav-link text-success" href="index.php"><i class="fas fa-home"></i> ACCUEIL <span class="sr-only"></span></a>
            </li>
            <li class="nav-item page-scroll">
              <a class="nav-link text-success" href="index.php"><i class="fas fa-newspaper"></i> ARTICLES</a>
            </li>
            <li class="nav-item page-scroll">
              <a class="nav-link text-success" href="index.php"><i class="fab fa-usps"></i> SERVICES</a>
            </li>
            <li class="nav-item page-scroll">
                    <a class="nav-link text-success" href="index.php"><i class="fas fa-address-book"></i> CONTACTS</a>
            </li>
            <li class="nav-item page-scroll">
                    <a class="nav-link text-success" href="inscription.php"><i class="fas fa-user-plus"></i> INSCRIPTION</a>
            </li>
            <li class="nav-item page-scroll">
                    <a class="nav-link text-success" href="connexion.php"><i class="fas fa-lock"></i> CONNEXION</a>
            </li>
          </ul>
         
        </div>
      </nav>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion_traitement.php" method="post">
                <h2 class="text-center text-success">Connexion <i class="fas fa-lock"></i></h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Connexion</button>
                </div>   
            </form>
            <h6 class="text-center">J'ai pas encore de compte m'<a href="inscription.php" class="text-success">inscrire</a></h6>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 120px  auto;
               
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>

              <!-- services -->
 <section id="services" class="bg-cloud text-dark">
    <div class="container padding-150 text-center">

        <h2 class="font-60 text-success">Services</h2>

        <hr><br>

        <div class="row">
            <div class="col">
            <i class="far fa-car-building fa-5x text-success"></i>
                <p>Banlieu Emploi vous assiste dans vos recherches d'emploi.</p>
            </div>

            <div class="col">
            <i class=""></i>
                <i class="fas fa-university fa-5x text-success" aria-hidden="true"></i>
                <p>Gestion de demande d'orientation dans les établissements publique et privé sénégalais.</p>
            </div>

             <div class="col">
             
                <i class="far fa-folder-open fa-5x text-success" aria-hidden="true"></i>
                <p>Il gére le traitement de vos dossiers et transmet vos cv aux entreprises appoprier </p>
            </div>

            <div class="col">
                <i class="fa fa-desktop fa-5x text-success" aria-hidden="true"></i>
                <p>Banlieu Emploi vous propose des cours en ligne avec des formateurs qui vous guiderons vers vos objectifs quelque soit votre niveau d'étude.</p>
            </div>

        </div>
    </div>
</section>


<section id="showcase">
    <h2 class="sr-only">Carousel/Gallerie</h2>
     <!-- carousel -->
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/slid1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slid2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slid3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


        <section id="contact">
        <div class="container padding-150">
            <!-- social media -->
            <div class="row text-center">
      
                <div class="col-md-12">

                    <h2 class="font-60 text-success">Enter en contact !</h2>
                     <hr><br>

                    <ul class="list-inline">
                        <li  class="list-inline-item"><a class="tw" href="#"></a></li>
                        <li  class="list-inline-item"><a target="_blank" class="fb"  href="https://web.facebook.com/ousmane.mbacke.509/"></a></li>
                        <li  class="list-inline-item"><a target="_blank" class="in" href="https://www.instagram.com/ragnar_lodbrok_98/"></a></li>
                        <li  class="list-inline-item"><a target="_blank" class="ytube"  href="https://www.youtube.com/channel/UCZt2ZbUH7yrWJYD1_gtdGNg"></a></li>
                    </ul>

                </div>
            
            </div>
            <style>
        /*social media icons - CSS animation */
section#contact a {
    display: inline-block;
    width: 128px;
    height: 128px;
    transition: all .5s;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
}

a.fb {
    background: url(img/social_media.png) -256px top;
}

a.tw {
    background: url(img/social_media.png)  -512px top;
}

a.in {
    background: url(img/social_media.png) -384px top;
}

a.ytube {
    background: url(img/social_media.png) -640px top;
}

section#contact li:hover a.fb {
    background: url(img/social_media.png) -256px bottom;
}

section#contact li:hover a.tw {
    background: url(img/social_media.png) -512px bottom;
}

section#contact li:hover a.ytube {
    background: url(img/social_media.png) -640px bottom;
}

section#contact li:hover a.in {
    background: url(img/social_media.png) -384px bottom;
}
</style>
            <!-- FIN social media -->

            <br><hr><br>

            <!-- form -->

            <div class="row justify-content-md-center">

                <div class="col-md-8">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
                        </div>
                        
                        <div class="form-group">
                             <label for="message">Message</label>
                             <textarea class="form-control" id="message" rows="2"></textarea>
                        </div>

                        <div class="d-flex justify-content-center"> 
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                
                    </form>
                </div>

            </div>

            
        </div>
    
</section>

        <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Juillet 2021 MIR 2 | IACOM PIKINE</p>
    <p> <i class="fas fa-hand-spock "></i> Ousmane Mbacké Dieng </p> 
  </footer>
        <!--JS-->
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        </body>
</html>
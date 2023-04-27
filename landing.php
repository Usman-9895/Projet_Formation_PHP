<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
  </head>
  <body>



        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>

            
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid"> 
  <a class="navbar-brand" href="#"><img src="img/logo.png" width="150px"  alt="banlieu emploi"></a>
    <a class="navbar-brand" href="#"> <h3 class="p-5">Bonjour <?php echo $_SESSION['user']; ?> ! <br> Heureux de vous revoir...</h3>  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MENU
          </a>
          <ul class="dropdown-menu dropdown-menu-success" aria-labelledby="navbarsuccessDropdownMenuLink">
            <li><a href="formulaire.php" class="dropdown-item">Création de dossier <i class="far fa-edit"></i></a></li>
            <li><a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Consulter l'état de votre dossier <i class="fas fa-folder"></i> </a></li>
            <li><a class="dropdown-item" href="#"  data-toggle="modal" data-bs-target="#change_password">Changer mon mot de passe <i class="fas fa-key"></i></a></li>
            <li><a class="dropdown-item" href="#"  data-toggle="modal" data-bs-target="#change_password">Forum de discution</a></li>
            <li><a class="dropdown-item" href="deconnexion.php">Déconnexion <i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Modal -->
  <div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                

                
<!-- statut dossier -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Statut de mon dossier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Salut <?php echo $_SESSION['user']; ?> votre dossier est en cours de traitement! Nous vous prions de bien voiloir patienter une email de validation vous sera envoiyé.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>        

 <!-- article -->
<section id="portfolio" class=" text-cloud">

<div class="container padding-150">
    <div class="row text-center">
        <div class="col-md-12">
        <hr><br>
            <h2 class="font-60 text-success">Articles</h2>

            

            <div class="row">

                <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <img class="img-fluid" src="img/art1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Le Sénégal annonce 350 milliards FCFA pour l’emploi des jeunes et des femmes</h5>
                    <p class="card-text">Réagissant aux violentes manifestations qui se sont déroulées la semaine dernière à Dakar et à l'intérieur du pays, le chef de l'Etat sénégalais dans une adresse à la nation, lundi passé...</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
                </div> 
                </div>

                <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <img class="img-fluid" src="img/art2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Emploi des jeunes diplômés et clientélisme politique au Sénégal</h5>
                    <p class="card-text">L’emploi des jeunes diplômés, problème aussi vieux que l’indépendance du pays intervient dans tous les gouvernements que le Sénégal a connus...</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <img class="img-fluid" src="img/art3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BAD: 54 milliards débloqués pour l’emploi des jeunes du Sénégal</h5>
                    <p class="card-text">Une convention de financement pour la promotion de l’insertion des jeunes ruraux a été signée à travers le projet Agri-Jeunes, avec le Conseil national de concertation des ruraux (CNCR) et le Conseil...</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
                </div>
                </div>

            </div>

        </div>

    </div>

</div>
</section>


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

<section id="contact">

<div class="container padding-150">
    
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
                    <button type="submit" class="btn btn-default">Envoyer</button>
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
  <!-- FIN social media -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

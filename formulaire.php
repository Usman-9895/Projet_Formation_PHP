<?php
require_once 'config.php'; // On inclu la connexion à la bdd
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      form button{
        margin: 50px;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

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
                    <a class="nav-link text-success" href="index.php"><i class="fas fa-address-book"></i>  CONTACTS</a>
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
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="mon_logo.png" alt=""  >
    </div>
  
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 text-success">Constituer votre dossier en remplissant ce formulaire.<br>Vous pouvez suivre le statut de ce dernier via votre espace membre.</h4>
        <form action="formulaire.php" method="post" class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-4">
          <label for="firstName" class="form-label">CIN</label>
              <p> <input type="text"  name="cin" placeholder="Numéro CIN *"></p>
          </div>
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Nom</label>
              <p><input type="text" name="nom" placeholder="nom *"></p>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Prénom</label>
              <p><input type="text" name="prenom" placeholder="prenom *"></p>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Date de naissance </label>
              <p><input type="text" name="datnaiss" placeholder="date de naissance *"></p>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Lieu de naissance</label>
              <p><input type="text" name="lieunaiss" placeholder="lieu de naissance *"></p>
            </div>

            <h4 class="mb-3">Genre</h4>
          <div class="my-3">
            <div class="form-check">
            <input type="radio" value="Homme" name="sex"  checked>
              <label class="form-check-label" for="credit">Homme</label>
            </div>
            <div class="form-check">
            <input type="radio" value="Femme" name="sex" >
              <label class="form-check-label" for="debit">Femme</label>
            </div>
          </div>

          <div class="col-md-5">
           <label for="country" class="form-label">Région</label>
            <select name="reg" class="form-select" id="country" required>
            <option value="">-- Votre Région --</option>
            <option value="Dakar">Dakar</option>
            <option value="Diourbel">Diourbel</option>
            <option value="Fatick">Fatick</option>
            <option value="Kaolack">Kaolack</option>
            <option value="Kolda">Kolda</option>
            <option value="Louga">Louga</option>
            <option value="Matam">Matam</option>
            <option value="Saint-Louis">Saint-Louis</option>
            <option value="Tambacounda">Tambacounda</option>
            <option value="Thiès">Thiès</option>
            <option value="Ziguinchor">Ziguinchor</option>
            <option value="Kaffrine">Kaffrine</option>
            <option value="Kédougou">Kédougou</option>
            <option value="Sédhiou">Sédhiou</option>
              </select>
            </div>

            <div class="col-md-5">
              <label for="state" class="form-label">Département</label>
              <select name="dep" class="form-select"  required>
                <option value="">-- Votre Département --</option>
                  <option value="Pikine">Pikine</option>
                  <option value="Rufisque">Rufisque</option>
                  <option value="Bambey">Bambey</option>
                  <option value="Foundiougne">Foundiougne</option>
                  <option value="Gossas">Gossas</option>
                  <option value="Nioro du Rip">Nioro du Rip</option>
                  <option value="Guinguinéo">Guinguinéo</option>
                  <option value="Vélingara">Vélingara</option>
                  <option value="Médina Yoro Foulah">Médina Yoro Foulah</option>
                  <option value="Linguère">Linguère</option>
                  <option value="Kanel">Kanel</option>
                  <option value="Podor">Podor</option>
                  <option value="Bakel">Bakel</option>
                  <option value="Koumpentoum">Koumpentoum</option>
                  <option value="Tivaouane">Tivaouane</option>
                  <option value="Bignogna">Bignogna</option>
                  <option value="Oussouye">Oussouye</option>
                  <option value="Birkilane">Birkilane</option>
                  <option value="Kounghel">Kounghel</option>
                  <option value="Salemata">Salemata</option>
                  <option value="Saraya">Saraya</option>
                  <option value="Bounkiling">Bounkiling</option>
                  <option value="Goudomp">Goudomp</option>
              </select>
            </div>

            <div class="col-md-5">
              <label  class="form-label">Numéro de téléphone</label>
              <input type="text" name="tel"  class="form-control" placeholder="Téléphone *" required>
            </div>

            <div class="col-5">
              <label  class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" name="mail" class="form-control"  placeholder="Email *">
            </div>

            <div class="col-md-5">
           <label for="country" class="form-label">Demande</label>
            <select name="ch" class="form-select" id="country" required>
            <option value="">-- Vous Cherchez --</option>
            <option value="Dakar">Emploi</option>
            <option value="Diourbel">Stage</option>
            <option value="Fatick">Formation</option>
              </select>
            </div>

            <div class="col-md-5">
              <label for="demande" class="form-label">Diplôme</label>
              <input type="text" name="dip" class="form-control"  placeholder="Diplôme *">
            </div>
            <div class="col-md-12">
              <label for="demande" class="form-label">Domaine étudier</label>
              <input type="text" name="etude" class="form-control"  placeholder="Votre domaine *">
            </div>
          <button class="w-25 btn btn-primary btn-lg" type="submit">Valider</button>
          <button class="w-25 btn btn-danger  btn-lg" type="reset">Annuler</button>
        </form>

      <style>
        label{
          color: green;
        }
      </style>

        <?php
    if(!empty($_POST['cin']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['datnaiss']) && !empty($_POST['lieunaiss']) && !empty($_POST['sex']) && !empty($_POST['reg']) && !empty($_POST['dep']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['ch']) && !empty($_POST['dip']) && !empty($_POST['etude']))
    { 
        $cin = htmlspecialchars($_POST['cin']);
        $nom = htmlspecialchars($_POST['nom']);
        $pnom = htmlspecialchars($_POST['prenom']);
        $dat = htmlspecialchars($_POST['datnaiss']);
        $lieu = htmlspecialchars($_POST['lieunaiss']);
        $genre = htmlspecialchars($_POST['sex']);
        $reg = htmlspecialchars($_POST['reg']);
        $dep = htmlspecialchars($_POST['dep']);
        $tel = htmlspecialchars($_POST['tel']);
        $mail = htmlspecialchars($_POST['mail']);
        $bsoin = htmlspecialchars($_POST['ch']);
        $dip = htmlspecialchars($_POST['dip']);
        $etude = htmlspecialchars($_POST['etude']);

        //Insertion dans la base de donnée
      $query = "INSERT INTO dossier(cin,nom,prenom,datenaiss,lieunaiss,genre,region,departement,numtel,email,besoin,diplome,etude) VALUES ('$cin','$nom','$pnom','$dat','$lieu','$genre','$reg','$dep','$tel','$mail','$bsoin','$dip','$etude')";
      $result=$bdd->query($query);
    }
  ?>
     </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Juillet 2021 MIR 2 | IACOM PIKINE</p>
    <p> <i class="fas fa-hand-spock "></i> Ousmane Mbacké Dieng </p> 
  </footer>
</div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="form-validation.js"></script>
      <script src="bootstrap.js"></script>
  </body>
</html>

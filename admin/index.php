<?php
include_once "header.php"; /*Barre de navigation*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="admin.css">
    <title>Administrateur</title>
</head>
<body>
    <h1 id="t1">  Espace Administrateur ! </h1>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 id="t2">Poster un article !</h1>
        </div>
    </div>
    <form action="index.php" method="post">
    <div class="row">
        <div class="col-md-6">
        <input type="text" name="titre" placeholder="Titre *" value="<?php if(isset($_POST["titre"])) echo $_POST["titre"] ?>"> 
        </div>
        <div class="col-md-6">
        <input type="file" name="file">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <textarea name="contenu" placeholder="Corps de l'article *"><?php if(isset($_POST["contenu"])) echo $_POST["contenu"] ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <input type="submit" value="Poster!">
        </div>
    </div>
    </form>
  </div>

 

</body>
</html>
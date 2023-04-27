<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="admin.css">
    <title>Header</title>
</head>
<body>
<!--Barre de navigation-->
<!--
<div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
           <nav>
           <label class="titre"><a href="index.php"> Banlieu_Emploi - Admin  </a></label>
        <ul>
            <li><a href="membres.php" class="active">Listes des inscrits  <i class="fas fa-list-ul"></i></a></li>
            <li><a href="sup.php">Supprimer des membres  <i class="fas fa-trash-alt"></i></a></li>
        </ul>
    </nav>
           </div>
       </div>
   </div>
   <style>
       i{
    margin-left: 15px;
    font-size: 20px;
    }
    label{
        font-size: 20;
    }
    nav ul li{
        font-size : 20px;
    }
   </style>
-->
<!--Barre de navigation Fin-->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
 <label class="titre"><a  href="index.php"> Banlieu_Emploi - Admin  </a></label>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <a aria-current="page" href="membres.php" >Listes des inscrits  <i class="fas fa-list-ul"></i></a>
        </li>
        <li class="nav-item">
         <a href="sup.php">Supprimer des membres  <i class="fas fa-trash-alt"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
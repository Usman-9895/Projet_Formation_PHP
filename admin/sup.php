<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="admin.css">
    <title>Supprimer des membres</title>
</head>
<body>
<?php
include_once "header.php"; /*Barre de navigation*/
?>


<?php
    
    $conn=mysqli_connect('localhost','root','','banlieu_emploi');
    $req = "select* from dossier";
    $result = mysqli_query($conn,$req);
    $tab = mysqli_fetch_all($result);
    $tablee = "<table>
        <thead>
            <tr>
                <th colspan=13>Liste des membres inscrits</th>
            </tr>
            <tr>
                <th>N° CIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Lieu de naissance</th>
                <th>Genre</th>
                <th>Région</th>
                <th>Département</th>
                <th>N° Téléphone</th>
                <th>E-mail</th>
                <th>Demande</th>
                <th>Diplôme</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>";
        foreach($tab as $elt) {
            $tablee = $tablee."<tbody>
                <tr>
                    <td>$elt[0]</td>
                    <td>$elt[1]</td>
                    <td>$elt[2]</td>
                    <td>$elt[3]</td>
                    <td>$elt[4]</td>
                    <td>$elt[5]</td>
                    <td>$elt[6]</td>
                    <td>$elt[7]</td>
                    <td>$elt[8]</td>
                    <td>$elt[9]</td>
                    <td>$elt[10]</td>
                    <td>$elt[11]</td>
                    <td>$elt[12]</td>
                </tr>
            </tbody>";
        }
        $tablee=$tablee.  
    "</table>";
    echo $tablee;
?>
<!--CSS-->
<style>
        table{
    width: 98%;
    border-collapse: collapse;
    margin: 30px 10px;
    }
    thead{
        color: #fff;
    }
    th,td{
        border: 2px solid #134f7c;
        color: #000;
    }
    img{
        width: 100%;
    }
    tr{
        text-align: center;
    }
    </style>



<div class="container">
    <div class="row">
        <!--div class="col-md-12">
            <h1>Suppréssion d'un membre</h1>
        </div-->
    </div>
    <form action="sup.php" method="POST">
    <div class="row">
    <div class="col-md-6">
        <input type="number" placeholder="Entrer le N° CIN" name="cin">
    </div>
    <div class="row">
        <div class="col-md-6">
        <label class="btn"><input type="submit" value="Supprimer"></label>
        </div>
        <div class="col-md-6">
        <label class="btn"><input type="reset" value="Annuler"></label>
        </div>
    </div>
</form>

<?php 
   if(!empty($_POST['cin']))
   {
    $conn=mysqli_connect('localhost','root','','banlieu_emploi');
    $cin= htmlspecialchars($_POST['cin']);
     //Insertion dans la base de donnée
    $req = "delete from dossier where cin='$cin' ";
    $result = mysqli_query($conn,$req);
   }
?>
     </div>
  </div>
</div>
<style>
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
}

    body{
    font-family: montserrat;
    background: #e3e6e9;
}
    input[type="number"]{
    height:50px;
    border: 2px solid #134f7c;
    width: 300px;
    padding: 20px;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.btn input[type="submit"]{
    height:25px;
    width: 166px;
    border: 2px solid #134f7c;
    padding: 20px;
    position: absolute;
    bottom: 20%;
    right: 45%;
    transform: translate(-50%,-50%);
    text-align: center;
    color: white;
    font-size: 1em;
}
.btn input[type="reset"]{
    width: 166px;
    border: 2px solid #134f7c;
    padding: 20px;
    position: absolute;
    bottom: 20%;
    left: 58%;
    transform: translate(-50%,-50%);
    text-align: center;
    background: #134f7c;
    height:25px;
    border-radius: 5px;
    color: white;
    font-size: 1em;
}
h1{
    margin: 30px;
}
</style>

</body>
</html>
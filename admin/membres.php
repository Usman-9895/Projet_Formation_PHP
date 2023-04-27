<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Liste Membres</title>
</head>
<body>
<?php
    include_once "header.php"; /*Barre de navigation*/
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
</body>
</html>
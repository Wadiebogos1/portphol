<?php
$NumIns = $_POST["numIns"];
$Prenom_nom = $_POST["nomPrenom"];
$Ville = $_POST["ville"];
$DateNaissance = $_POST["dateNaissance"];
$Sexe = $_POST["sexe"];
$Loiseirs = $_POST["loisirs"];
$Informations_complementaires = $_POST["informationsComplementaires"];

echo "Numéro d’inscription : $NumIns <br>";
echo "Nom et prénom : $Prenom_nom <br>";
echo "Ville : $Ville <br>";
echo "Année ou date de naissance : $DateNaissance <br>";
echo "Sexe : $Sexe <br>";
echo "Loisirs : $Loiseirs <br>";
echo "Informations complémentaires : $Informations_complementaires <br>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Numéro d’inscription</th>
        <th>Nom et prénom</th>
        <th>Ville</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Loisirs</th>
        <th>Informations complémentaires</th>
      </tr>";

echo "<tr>
        <td>$NumIns</td>
        <td>$Prenom_nom</td>
        <td>$Ville</td>
        <td>$DateNaissance</td>
        <td>$Sexe</td>
        <td>$Loiseirs</td>
        <td>$Informations_complementaires</td>
      </tr>";
echo "</table>";
?>

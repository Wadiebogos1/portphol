<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="api/inscription">Go to API</a>
    <form action="api/inscription" method="post">
        <table>
        <tr>
            <td>Numéro d’inscription :</td>
            <td><input type="text" name="numIns"></td>
        </tr>
        <tr>
            <td>Nom et prénom :</td>
            <td><input type="text" name="nomPrenom"></td>
        </tr>
        <tr>
            <td>Ville :</td>
            <td><input type="text" name="ville"></td>
        </tr>
        <tr>
            <td>Année ou date de naissance :</td>
            <td><input type="text" name="dateNaissance"></td>
        </tr>
        <tr>
            <td>Sexe :</td>
            <td><input type="radio" name="sexe" value="masculin"> Masculin</td>
            <td><input type="radio" name="sexe" value="féminin"> Féminin</td>
        </tr>
        <tr>
            <td>Loisirs :</td>
            <td><input type="text" name="loisirs"></td>
        </tr>
        <tr>
            <td>Informations complémentaires  :</td>
            <td><input type="text" name="infosComplementaires"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Envoyer">
            </td>
        </tr>
    </table>
    </form>

</body>
</html>
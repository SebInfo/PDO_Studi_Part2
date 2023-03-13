<html>
  <head>
    <title>PHP fetch_num</title>
  </head>
  <body>
    <h1>Lister les acteurs</h1>
    <?php
        require_once 'login.php';
        $req="SELECT nom, prenom FROM acteur";
        $result = $bdd->query($req);

        // On affiche les résultats si pas d'erreur
        if ($result === false) die("erreur requête !");

        while($unActeur = $result->fetch(PDO::FETCH_NUM)) {
            echo "<pre>";
            print_r($unActeur);
            echo "</pre>";
        }
    ?>
  </body>
</html>
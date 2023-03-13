<html>
  <head>
    <title>PHP Requete avec while et mise en forme</title>
  </head>
  <body>
    <h1>Lister les acteurs</h1>
    <?php
        require_once 'login.php';
        try {
            $bdd = new PDO($dsn, $user, $pass, $opt);
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getMessage();
        }
        $req="SELECT nom, prenom FROM acteur";
        $result = $bdd->query($req);

        // On affiche les résultats si pas d'erreur
        if ($result === false) die("erreur requête !");
        $acteurs = $result->fetchAll();
        echo "<pre>";
        print_r($acteurs);
        echo "</pre>";

        foreach($acteurs as $unActeur)
        {
            echo $unActeur['nom']." ";
            echo $unActeur['prenom'];
            echo "<br />";
        }
    ?>
  </body>
</html>
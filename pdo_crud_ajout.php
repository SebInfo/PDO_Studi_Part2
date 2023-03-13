<html>
  <head>
    <title>PHP CRUD Ajout</title>
  </head>
  <body>
    <h1>Ajout d'un acteur</h1>
    <?php
    require_once 'login.php';
    $req="INSERT INTO acteur (idActeur,nom,prenom) VALUES ('7','Delon','Alain')";
    try {
        $count = $bdd->exec($req);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    var_dump ($count);

    $req="INSERT INTO acteur (idActeur,nom,prenom) VALUES ('8','Deloin','Alain')";
    try {
        $requete= $bdd->query($req);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    echo $requete->rowCount();
    ?>
  </body>
</html>
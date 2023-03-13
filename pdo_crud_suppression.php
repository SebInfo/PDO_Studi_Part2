<html>
  <head>
    <title>PHP CRUD Suppression</title>
  </head>
  <body>
    <h1>Suppression d'un acteur ou plusieurs acteurs</h1>
    <?php
    require_once 'login.php';
    $req="DELETE FROM acteur WHERE prenom = 'ALAIN';";
    try {
        $count = $bdd->exec($req);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    var_dump ($count);
    ?>
  </body>
</html>
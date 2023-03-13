<html>
  <head>
    <title>PHP CRUD Modification</title>
  <body>
    <h1>Modification d'un ou de plusieurs acteurs</h1>
    <?php
    require_once 'login.php';
    $req="UPDATE acteur set nom = UPPER(nom) WHERE prenom = 'Alain';";
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
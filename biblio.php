<!-- Une page pour le site
BDD à connecter, script insertion -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Ma bibliothèque</h1>
  </header>
  <nav></nav>
  <?php
  /*
  Code afin de vérifier si on est connecté à la BDD
  */
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=tp;', 'root', 'root');
    } 
    catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
  ?>
  <?php
    //$reponse= $bdd->query('INSERT INTO auteur values ("Victor Hugo")');
    
  ?>
  <?php
    $reponse = $bdd->query('SELECT nom,prenom FROM personne');

    while ($donnees = $reponse->fetch())
    {
      	echo $donnees['nom'].' ' . $donnees['prenom'].'<br />';
    }

$reponse->closeCursor();

?>
    
</body>

</html>
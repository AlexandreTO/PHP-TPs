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
  <nav>
    <ul class="barrenav">
      <li>Tous les livres </li>
      <li>Par auteur </li>
      <li>Par année </li>
      <li>Nouveau livre </li>    
    </ul>
  </nav>
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
    $reponse = $bdd->query('SELECT nom,prenom,titre FROM personne,livre,auteur where personne.id = auteur.idPersonne and livre.isbn = auteur.idLivre');


    while ($donnees = $reponse->fetch())
    {
      	echo $donnees['nom'].' ' . $donnees['prenom'].' a écrit '.$donnees['titre'].'<br /><br />';
    }

$reponse->closeCursor();

?>
 <img id="chroniques" src="chronique.jpg" alt="Couverture du livre, chroniques du bout du monde" >
 <img id="clans" src="clan.jpg" alt="Couverture du livre, la guerre des clans" >
 <img src="" alt="Couverture du livre, la part de l'autre " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 

</body>

</html>
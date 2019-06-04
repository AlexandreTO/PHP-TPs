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
<main>
 <img class="rightimg" src="chronique.jpg" alt="Couverture du livre, chroniques du bout du monde" >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="rightimg" src="clan.jpg" alt="Couverture du livre, la guerre des clans" >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="rightimg" src="bannis.jpg" alt="Couverture du livre, les bannis et les proscrits" >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="rightimg" src="ca.jpg" alt="Couverture du livre, ça " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="rightimg" src="cid.jpg" alt="Couverture du livre, le cid " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img id="epouvanteur" src="epouvanteur.jpg" alt="Couverture du livre, L'épouvanteur " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="rightimg" src="miserables.jpg" alt="Couverture du livre,les miserables " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="leftimg" src="negres.jpg" alt="Couverture du livre, Les dix petits negres " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="leftimg" src="overlord.jpg" alt="Couverture du livre, overlord " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="leftimg" src="part.jpg" alt="Couverture du livre, La part de l'autre " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="leftimg" src="silmarillion.jpg" alt="Couverture du livre, Le silmarillion " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
 <img class="leftimg" src="walking.jpg" alt="Couverture du livre, The walking dead " >
 <p>Ecrit par</p>
 <p>Edité par</p>
 <p>Parut le </p>
</main>

<footer>
  <p>mention obligatoire</p>
  <p>mention obligatoire</p>
  <p>mention obligatoire</p>
</footer>
</body>

</html>
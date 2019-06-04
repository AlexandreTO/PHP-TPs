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
      $bdd = new PDO('mysql:host=localhost;dbname=tp;', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } 
    catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
  ?>
  <!-- 
  La fonction query -> prepare(requete) permet de préparer une requête avec une variable qu'on peut demander d'où le ? dans la requete ci dessous
    execute(array($isbn)) execute la requete avec la variable entrée en paramètre dans array qui est ici $isbn
    La boucle while permet de récupérer les variables qu'on va appeller lors des "echo" (affichage en php)

 -->
  <?php
  $req = $bdd -> prepare('SELECT * FROM personne,livre,auteur,editeur where personne.id = auteur.idPersonne and livre.isbn = auteur.idLivre and editeur.id = livre.editeur and isbn = ?');
  $isbn = "9782745935830";
  $req -> execute(array($isbn));
  while ($donnees = $req->fetch())
  {
    echo' <img id="chroniques" src="chronique.jpg" alt="Couverture du livre, chroniques du bout du monde" >  ';
    echo '<h5>'.$donnees['titre'] .'</h5>';
    echo 'Ecrit par '.$donnees['prenom'].' '.$donnees['nom'];
    echo '<br/>';
    echo 'Edite par '.$donnees['libelle'];
    echo '<br/>';
    echo 'Paru en '.$donnees['annee'];
  }


  $req ->closeCursor(); // TOUJOURS FERMER LE CURSEUR A LA FIN D'UNE REQUETE SQL EN PHP
  ?>

  <!--  <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " >
 <img src="" alt="Couverture du livre, " > -->

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
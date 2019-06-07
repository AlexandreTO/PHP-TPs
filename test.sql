INSERT INTO Role (libelle)
VALUES 
('Ecrivain'),
('Illustrateur'),
('Traducteur'),
('Preface');

INSERT INTO personne (nom, prenom )
VALUES 
('Stewart','Paul'),
('Hunter','Erin'),
('Schmitt','Eric-Emmanuel'),
('Kirkman','Robert'),
('Delaney','Josehp'),
('Tolkien','J.R.R'),
('Clemens','James'),
('オーバーロード Ōbārōdo', 'n/c'),
('Hugo','Victor'),
('King','Stephen'),
('Christie','Agatha'),
('Corneille','Pierre');


INSERT INTO editeur (libelle)
VALUES 
('Milan Eds'),
('Pocket Jeunesse'),
('Librairie Generale Francaise'),
('Delcourt'),
('Bayard Jeunesse'),
('Allen & Unwin'),
('Del Rey Books'),
('Enterbrain'),
('Livre de poche'),
('Biblio college'),
('Belfond'),
('Flammarion'),
('Librio'), 
('Larousse');

INSERT INTO langue (libelle)
VALUES
('Francais'),
('Anglais'),
('Espagnol'),
('Japonnais'),
('Italien'), 
('Allemand');

INSERT INTO genre (libelle) 
VALUES
('Comics'),
('Science-fiction'),
('Thriller'),
('Fantastique'),
('Policier'),
('Tragi-comedie'),
('Epique'),
('Drame historique'), 
('Light novel'), 
('Fiction'),
('Roman'),
('Fantasy');

INSERT INTO livre (isbn, titre, editeur, annee, genre, langue, nbpages)
VALUES 
('9782745935830', 'Chroniques du bout du monde : La malédiction du luminard',1,2006,4,1,600),
('9782253155379','La part de l’autre',3,2003,10,1,503),
('9782756009124','The Walking Dead',4,2007,3,1,100),
('9780001054660','Le Silmarillion',6,1977,4,1,600),
('9780316272278','Overlord',8,2012,9,1,600),
('9782070409228','Les misérables',9,1862,8,1,750),
('978-2010009105','Dix petits nègres',9,1940,9,1,600),
('9782811200404', ' Les bannis et les proscrits ',7,1898 ,11,2,432),
('9788762601383', ' L’apprenti épouvanteur ',5,2004,12,2,275),
('9782266168656', ' La guerre des clans : Retour à l’état sauvage ',2,2007,11,2,300),
('9788370620042', 'Le Cid',10,1637 ,6,1,192),
('9780525566274', 'Ça',9,1862 ,3,2,1138);


INSERT INTO auteur (idPersonne, idLivre, idRole)
VALUES
(1,"9782745935830",1),
(2,"9782266168656",1),
(3,"9782253155379",1),
(4,"9782756009124",1),
(5,"9788762601383",1),
(6,"9780001054660",1),
(7,"9782811200404",1),
(8,"9780316272278",1),
(9,"9782070409228",1),
(10,"9780525566274",1)
(11,"978-2010009105",1),
(12,"9788370620042",1);

Correction BTS Blanc SLAM


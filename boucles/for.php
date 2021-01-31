<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';

$num = count($couleurs); // J'effectue le count en dehors de la boucle for pour éviter que php ne doive recalculer à chaque itération le nombre d'éléments du tableau
for ($i = 0; $i < $num; ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1

$num = count($couleurs);
for ($i = $num - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
$num = count($couleurs);
for ($i = 0; $i < $num; ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);

echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);

echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$count = count($mois);
for ($i = 0; $i < $count; $i++) {
    echo $mois[$i]."<br>";
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = $count - 1; $i >= 0; --$i) {
    echo $mois[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
);

echo '10.Les eleves du college : <br>';
//ajoutez votre code ici
foreach ($college as $classe => $value) {
    echo $classe." : <br><br>";
    foreach($value as $nomsEleves){
        foreach($nomsEleves as $nom => $prenom){
            echo $nom." : ".$prenom."<br>";
        }
        echo "<br>";
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
$college['Troisième']= array(
        array('Nom' => 'Escalier', 'Prenom' => 'Gertrude'),
        array('Nom' => 'Lavabo', 'Prenom' => 'Maurice'),
        array('Nom' => 'Herbe', 'Prenom' => 'Leo'),
    );

foreach ($college as $classe => $value) {
    echo $classe." : <br><br>";
    foreach($value as $nomsEleves){
        foreach($nomsEleves as $nom => $prenom){
            echo $nom." : ".$prenom."<br>";
        }
        echo "<br>";
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $index) {
    foreach ($index as $propriete => $valeur) {
        if(is_array($valeur)){
            echo "acteurs : ";
            foreach($valeur as $index2){
                echo $index2.", ";
            }
            echo "<br><br>";
        }
        else{
            echo $propriete . " : " . $valeur . "<br>";
        }
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
array_push($videotheque,
    array(
        'nom' => 'Spider-Man Homecoming',
        'date' => 2017,
        'realisateur' => 'Jon Watts',
        'acteurs' => array(
            "Tom Holland", "Michael Keaton","Robert Downey Jr.", "Marisa Tomei", "Zendaya"),
        'Résumé' => "À la suite de sa participation à l'affrontement entre Iron Man et Captain America, Peter Parker, 
un jeune lycéen fréquentant le lycée de Midtown, continue à se servir de ses pouvoirs sous le masque
de Spider-Man pour lutter contre la criminalité qui ronge la ville de New York, tout en essayant de
trouver un équilibre entre sa vie de lycéen, son amour secret pour Liz, son ami Ned Leeds, et sa carrière
de super-héros masqué. Mais avec la venue d'un nouveau super-vilain nommé le Vautour équipé d'un exosquelette, 
Peter doit faire ses preuves en affrontant ce dernier pour prouver à Tony Stark qu'il peut être un atout pour l'équipe des Avengers."
    ),
    array(
        'nom' => 'Avengers Endgame',
        'date' => 2019,
        'realisateur' => "Joe Russo",
        'acteurs' => array(
            "Robert Downey Jr.", "Chris Evans", "Chris Hemsworth", "Scarlett Johansson", "Jeremy Renner", "Mark Ruffalo", "Josh Brolin", "Karen Gillan"),
        'Résumé' => "Le Titan Thanos ayant réussi à s'approprier les six Pierres d'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif 
        de pulvériser la moitié de la population de l'Univers d'un claquement de doigts. Les quelques Avengers et Gardiens de
         la Galaxie ayant survécu, Steve Rogers, Thor, Natasha Romanoff, Tony Stark, Carol Danvers, Clint Barton, Bruce Banner,
          James Rhodes, Nébula et Rocket espèrent réparer le méfait de Thanos. Ils le retrouvent mais il s'avère que ce dernier
           a détruit les pierres et Thor le décapite. Cinq ans plus tard, alors que chacun essaie de continuer sa vie et
            d'oublier les nombreuses pertes dramatiques, Scott Lang, alias Ant-Man, parvient à s'échapper de la Dimension
             subatomique où il était coincé depuis la disparition du Docteur Hank Pym, de sa femme Janet Van Dyne et de sa fille 
             Hope Van Dyne. Lang propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs 
             alliés et coéquipiers : récupérer les Pierres d'Infinité dans le passé grâce au royaume quantique. Pour ce faire, à 
             l'aide des connaissances scientifiques de Bruce Banner et de Tony Stark, ils vont se scinder en plusieurs groupes pour 
             partir chercher les gemmes dans diverses époques passées…"
    ),
    array(
        'nom' => 'BabySitting',
        'date' => 2014,
        'realisateur' => 'Philippe Lacheau',
        'acteurs' => array(
            "Philippe Lacheau", "Vincent Desagnat", "Enzo Tomasini", "Tarek Boudali", "Gérard Jugnot"),
        'Résumé' => "Franck, agent d'accueil aux éditions Schaudel, souhaite devenir dessinateur de bande dessinée.
         Alors lorsque son patron lui propose de lire une ébauche à condition qu'il garde son fils ce soir, Franck 
         ne peut pas refuser. Le problème, c'est qu'il s'agit du jour de son anniversaire et ses amis ne comptent pas
          laisser tomber la fête qu'ils avaient préparée."
    )
);

foreach ($videotheque as $index) {
    foreach ($index as $propriete => $valeur) {
        if(is_array($valeur)){
            echo "acteurs : ";
            foreach($valeur as $index2){
                echo $index2.", ";
            }
            echo "<br><br>";
        }
        else{
            echo $propriete . " : " . $valeur . "<br>";
        }
        echo "<br>";
    }
}
echo '<br><br>';

<h1>POO Gestion de cinéma</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});
 
// REALISATEURS //
$realisateur1 = new Realisateur("Lucas", "George", "Homme", "1944-05-04" );
$realisateur2 = new Realisateur("Scott", "Ridley", "Homme", "1937-11-30");
$realisateur3 = new Realisateur("Reeves", "Matt", "Homme", "1966-04-27");

// ACTEURS //
$acteur1 = new Acteur("Ford", "Harrison", "Homme", "1942-07-13");
$acteur2 = new Acteur("Mark", "Hamill", "Homme", "1951-09-25");
$acteur3 = new Acteur("Michael", "Kaeton", "Homme", "1951-09-05");
$acteur4 = new Acteur("Val", "Kilmer", "Homme", "1959-12-31");
$acteur5 = new Acteur("George", "Clooney", "Homme", "1961-05-06");

// GENRE //
$genre1 = new Genre("SF");

// FILMS //
$film1 = new Film("Star Wars Episode IV", 1977, 121 , "L'univers est tombé sous la coupe du malveillant Empire galactique. La princesse Leia Organa, qui les combat avec l'aide de quelques rares rebelles, s'empare des plans d'une station spatiale, «L'Etoile de la mort», nouvelle arme suprême de l'Empire.", $realisateur1, $genre1);
$film2 = new Film("Blade Runner", 1982, 117, "2019, Los Angeles. La Terre est surpeuplée et l'humanité est partie coloniser l'espace. Les nouveaux colons sont assistés de Replicants, androïdes que rien ne peut distinguer de l'être humain. Conçus comme de nouveaux esclaves, certains parmi les plus évolués s'affranchissent de leurs chaînes et s'enfuient. Rick Deckard, un ancien Blade Runner, catégorie spéciale de policiers chargés de 'retirer' ces replicants, accepte une nouvelle mission consistant à retrouver quatre de ces individus qui viennent de regagner la Terre après avoir volé une navette spatiale. Ces replicants sont des Nexus 6, derniers nés de la technologie développée par la Tyrell Corporation.", $realisateur2, $genre1);
$film3 = new Film("The Batman", 2022, 177, "Deux années à arpenter les rues en tant que Batman et à insuffler la peur chez les criminels ont mené Bruce Wayne au coeur des ténèbres de Gotham City. Avec seulement quelques alliés de confiance - Alfred Pennyworth, le lieutenant James Gordon - parmi le réseau corrompu de fonctionnaires et de personnalités de la ville, le justicier solitaire s'est imposé comme la seule incarnation de la vengeance parmi ses concitoyens. Lorsqu'un tueur s'en prend à l'élite de Gotham par une série de machinations sadiques, une piste d'indices cryptiques envoie le plus grand détective du monde sur une enquête dans la pègre, où il rencontre des personnages tels que Selina Kyle, alias Catwoman, Oswald Cobblepot, alias le Pingouin, Carmine Falcone et Edward Nashton, alias l’Homme-Mystère. Alors que les preuves s’accumulent et que l'ampleur des plans du coupable devient clair, Batman doit forger de nouvelles relations, démasquer le coupable et rétablir un semblant de justice au milieu de l'abus de pouvoir et de corruption sévissant à Gotham City depuis longtemps.", $realisateur3, $genre1);

// ROLES //
$role1 = new Role("Luke Skywalker");
$role2 = new Role("Han Solo");
$role3 = new Role("Batman");

// CASTINGS //
$casting1 = new Casting($acteur1, $role1, $film1);
$casting2 = new Casting($acteur2, $role2, $film1);



// echo $realisateur1."<br>";
// echo $acteur1."<br>";
// echo $film1."<br>";

echo $realisateur1->afficherFilmographie();
echo $genre1->afficherFilms();
echo $acteur1->afficherFilmographie();
echo $film1->afficherCasting();
echo $acteur1->afficherRole();
echo $role1->afficherActeur();
<?php 
/* 

// LES VARIABLES 

$ageDuVisiteur = 20;
echo 'Le visiteur a '.$ageDuVisiteur.' ans.';

$prix = 2.5;
$quantite = 10;

$total = $prix + $quantite; 

echo 'cela coute'.$total.'$'; */
/* 
$age = 18;
$adulte;

// LES CONDITIONS 

if($age >= 18){
$adulte = true;
} else {
$adulte = false;
}

if($adulte == true){
  echo 'tu peu accedé au site'; 
} else {
  echo'désolé tu est trop jeune';
} */
/* 
$adulte = true;
$nom = 'Bernard';

if($adulte AND $nom == 'Bernard'){
} */
/* 
$age = 18; 

switch($age){
  case 4: 
  echo'tu a 4 ans';
  break;
  case 16: 
  echo'tu a 16 ans';
  case 18: 
  echo'tu est majeur'; 
} */

// LES BOUCLES 

/* $repetitions = 0; 
while($repetitions < 1000){
  echo'<p>Je ne doit pas copier sur mon voisin.'.$repetitions.'</p>';     
  $repetitions++;
}
for($repetitions = 0; $repetitions < 10; $repetitions++){
  echo'<p>Je ne doit pas copier sur mon voisin.'.$repetitions.'</p>';     
} */


// LES TABLEAU 
/* $prenom[0] = 'Mathieu';
$prenom[1] = 'Marie';
$prenom[2] = 'Robert';  */

/* $prenom = array('Mathieu','Marie', 'Robert'); 
echo print_r($prenom); */

/* 
$prenoms = array('Mathieu','Marie', 'Robert'); 
$persons = array(
  'nom' => 'Marie', 
  'prenom' => 'Robert', 
  'age' => 10);


print_r($person);

for($numero = 0; $numero < 3; $numero++)
{
 echo '<p>'.$prenom[$numero].'</p>';
}
foreach($persons as $libelle => $detail)
{
 echo '<p>'.$libelle.' = '.$detail.'</p>';
}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}


$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}


$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position; */

// LES FONCTIONS

/* $phrase = 'Bonjour je suis une phrase un peu plus longue.';
$nombreDeCaractres = strlen($phrase);
$phraseMelangee = str_shuffle($phrase);
echo 'Il y a '.$nombreDeCaractres.' caractéres dans cette phrase. ';
echo $phraseMelangee;
echo date('m');  */

/* function direBonjour($nom)
{
echo'<p>Bonjour '.$nom.', ça va ?</p>';
}
direBonjour('Marie');
direBonjour('Mathieu');
direBonjour('Jobs'); */
?>

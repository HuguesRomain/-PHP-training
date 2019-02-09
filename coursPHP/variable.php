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

$repetitions = 0; 
/* while($repetitions < 1000){
  echo'<p>Je ne doit pas copier sur mon voisin.'.$repetitions.'</p>';     
  $repetitions++;
} */
for($repetitions = 0; $repetitions < 10; $repetitions++){
  echo'<p>Je ne doit pas copier sur mon voisin.'.$repetitions.'</p>';     
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>
  <?php if (isset($_GET['nom']) AND isset($_GET['prenom']))
  {
    echo 'Bonjour' .' '. $_GET['prenom'].' '.$_GET['nom'];
  }
  else
  {
    echo 'Pas de nom ou prénom défini'; 
  } ?>
  </p>
</body>
</html>
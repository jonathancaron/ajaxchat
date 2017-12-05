<?php
$dsn = 'mysql:dbname=ajax;host=127.0.0.1';
$user = 'root';
$password = 'user';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

if(!empty($_POST['nom']) && !empty($_POST['message'])){
  echo "ok1";
  $nom = $_POST['nom'];
  $message = $_POST['message'];
  try{
    $query = $dbh->prepare("INSERT INTO tablee(nom,message) VALUES ('$nom','$message')");
    $query->execute();
  } catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();
  }
  echo "ok2";
}
else{
  echo "error : empty name or message";
}


?>

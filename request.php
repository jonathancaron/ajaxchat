<?php
$dsn = 'mysql:dbname=ajax;host=127.0.0.1';
$user = 'root';
$password = 'user';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$tab = array();

$recupmsg = $dbh->prepare("SELECT * FROM tablee ORDER BY id DESC");
$recupmsg->execute();

while ($all = $recupmsg->fetch()) {
  $tab[] = $all;
}

foreach ($tab as $message) {
  ?>
  <h4><?php echo $message['nom'] ?></h4>
  <p><?php echo $message['message'] ?></p>
  <hr/>
  <?php
}

 ?>

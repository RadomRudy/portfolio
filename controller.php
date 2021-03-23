<?php
// Vérifie qu'il provient d'un formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //identifiants mysql
  $host = "localhost";
  $username = "radom";
  $password = "kimboÇÈÉ\"&";
  $database = "Portfolio";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  if (!isset($name)) {
    die("S'il vous plaît entrez votre nom");
  }
  if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("S'il vous plaît entrez votre adresse e-mail");
  }
  //Ouvrir une nouvelle connexion au serveur MySQL
  $mysqli = new mysqli($host, $username, $password, $database);

  //Afficher toute erreur de connexion
  if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

  //préparer la requête d'insertion SQL
  $statement = $mysqli->prepare("INSERT INTO users (name, email, phone, message) VALUES(?, ?, ?, ?)");
  //Associer les valeurs et exécuter la requête d'insertion
  $statement->bind_param('ssss', $name, $email, $phone, $message);

  if ($statement->execute()) {
    print "Salut " . $name . "!, Un email vous a été envoyé a " . $email;
  } else {
    print $mysqli->error;
  }
}

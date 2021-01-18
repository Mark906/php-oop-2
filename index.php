<?php

require 'User.php';

$user = new User ("Marco","Caputo",21);

try {
  $user->setNickname("markoka");
} catch (Exception $e) {
  echo 'Errore | Messaggio =' . $e->getMessage();
}

$user->setPassword("ciao123");

echo '<p>Nome: ' . $user->getName() . '<p>';

echo '<p>Cognome: ' . $user->getLastname() . '<p>';

echo '<p>Età: '. $user->getAge() . '<p>';

echo '<p>Nickname: '. $user->getNickname() . '<p>';

echo '<p>Password: '. $user->getPassword . '<p>';

var_dump($user);
 ?>

<?php

require "connection.php";

class Signup extends Connection 
{

  public function sign_up_now($name, $password, $tel, $email)
  {

    $sql = $this->pdo->prepare("INSERT INTO signin (username,password,tel,email) VALUE (:u, :p, :t, :e)");

    $sql->bindValue(":u", $name);
    $sql->bindValue(":p", md5($password));
    $sql->bindValue(":t", $tel);
    $sql->bindValue(":e", $email);

    $sql->execute();

    return true;
  }
}

$s = new Signup;

if (isset($_POST["username"])) {

  $username = addslashes($_POST["username"]);
  $pass = addslashes($_POST["pass"]);
  $telefone = addslashes($_POST["tel"]);
  $e_mail = addslashes($_POST["e_mail"]);

  if (!empty($username) and !empty($pass) and !empty($telefone) and !empty($e_mail)) {
      $s->connect('nasa', 'localhost', 'root', '');
      if ($s->sign_up_now($username, $pass, $telefone, $e_mail)) {
        header("location: login.php");
      }
  } else {
      echo "<script> alert('Error') </script>";
  }
}
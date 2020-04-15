<?php

require "connection.php";

class Login extends Connection
{

    public function l_in($user, $pass)
    {
        $sql = $this->pdo->prepare("SELECT id_user FROM signin WHERE username = :u AND password = :p");

        $sql->bindValue(":u", $user);
        $sql->bindValue(":p", md5($pass));

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $data['id_user'];

            return true;
        } else {
            return false;
        }
    }
}

$l = new Login;

if (isset($_POST["user"])) {

    $username = addslashes($_POST["user"]);
    $password = addslashes($_POST["pass"]);

    if (!empty($username) and !empty($password)) {
        $l->connect('nasa', 'localhost', 'root', '');
        if ($l->l_in($username, $password)) {
            header("location: php/welcome.php");
        }
    } else {
        echo "<script> alert('Error') </script>";
    }
}

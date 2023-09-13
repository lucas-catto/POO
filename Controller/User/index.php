<?php

    require_once "./../../config.php";
    require_once "./../../Model/User.php";

    if (isset($_POST["submit"])) {

        $user = new User();

        $name  = isset($_POST["name"])  ? $_POST["name"]  : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";

        if ($name != "" || $email != "") {

            $user->setName($name);
            $user->setEmail($email);

            $sql = $pdo->prepare("INSERT INTO User VALUES (NULL,?,?)");
            $sql->execute(array($name, $email));

        }


    }

?>
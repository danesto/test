<?php

include_once '../../config/connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $active = 0;

    $result = $conn->prepare("INSERT INTO comments(id,name,email,text,active) VALUES(NULL,:name,:email,:text,:active)");

    $result->bindParam(":name", $name);
    $result->bindParam(":email", $email);
    $result->bindParam(":text", $text);
    $result->bindParam(":active", $active);

    $result->execute();


    header('Location: /');

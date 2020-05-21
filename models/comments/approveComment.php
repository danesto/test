<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . '/' . 'config/connection.php';
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $active = 1;
    
    $query="UPDATE comments SET name=:name, email=:email, text=:text, active=:active WHERE id=$id";

    $stmt=$conn->prepare($query);
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":text",$text);
    $stmt->bindParam(":active",$active);

    $stmt->execute();

    header('Location: /admin/');

?>
<?php
if(isset($_POST['button'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];
    echo $comment;
}
?>
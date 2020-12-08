<?php
include("libs/db.php");
if (isset($_POST['submit'])) {
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $insertMsgQuery = "INSERT INTO `contact_us` (`feedback_id`, `f_name`, `l_name`, `email`, `message`) VALUES (NULL, '$fName', '$lName', '$email', '$message')";

    $dataBase->query($insertMsgQuery);
    header("Location: index.php?messageSent");
}

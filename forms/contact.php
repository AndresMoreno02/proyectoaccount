<?php
  if (isset($_POST['sumit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $mailTo = "valderramaandres34@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have a message" .$name ".\n\n" .$message;

    mail($mailTo, $name, $txt; $headers);

    header("Location")
  }

  $
?>

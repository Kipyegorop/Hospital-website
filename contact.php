<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "kipyegobrian339@gmail.com";
    $subject = "New Message from Rayna's Haven Medical Facility";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
      echo "Message sent successfully!";
    } else {
      echo "Error sending message. Please try again.";
    }
  }
?>
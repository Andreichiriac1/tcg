<?php
  include 'config.php';
  $title = $_POST["title"];
  $text = $_POST["text"];
  $id = $_POST["id"];

  $update = "UPDATE `blog` SET `title` = '$title' , `text` = '$text' WHERE `id` = '$id'";

  $query = mysqli_query($connect, $update);
  header("location: dashboard.php");
?>
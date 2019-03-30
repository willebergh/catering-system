<?php
  error_reporting(E_ERROR | E_PARSE);
  $dbServername = $_POST['dbServername'];
  $dbUsername = $_POST['dbUsername'];
  $dbPassword = $_POST['dbPassword'];

  $conn = new mysqli($dbServername, $dbUsername, $dbPassword);
  if ($conn->connect_error) {
    echo "
      <div class=\"alert alert-danger\" role=\"alert\">
      $conn->connect_error
      </div>";
  } else {
    echo "ok";
  }
?>

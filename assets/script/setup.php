<?php

  // If step 2 posts, run step 2 script
  if ($_POST['step'] == "step2") {
    error_reporting(E_ERROR | E_PARSE);
    $dbServername = $_POST['dbServername'];
    $dbUsername = $_POST['dbUsername'];
    $dbPassword = $_POST['dbPassword'];

    $dbh_fileLocation = "../includes/config.php";
    $dbh_content = "<?php\n\t\$dbServername = \"{$dbServername}\";\n\t\$dbUsername = \"{$dbUsername}\";\n\t\$dbPassword = \"{$dbPassword}\";";

    $connServer = new mysqli($dbServername, $dbUsername, $dbPassword);
    if ($connServer->connect_error) {
      echo "$connServer->connect_error";
    } else if(!file_exists($dbh_fileLocation)) {
      file_put_contents($dbh_fileLocation, $dbh_content);
      echo "ok";
    }
  }

  // If step 3 posts, run step 3 script
  if ($_POST['step'] == "step3") {
    if ($_POST['createDB'] == "true") {

      include_once "../includes/config.php";

      $connServer = new mysqli($dbServername, $dbUsername, $dbPassword);
      $slqCreateDB = "CREATE DATABASE catering_system";

      if ($connServer->connect_error) {
        echo "$connServer->connect_error";
      } else if ($connServer->query($slqCreateDB)) {
        echo "dbCreated";
      } else {
        echo "Something went wrong";
      }
    }
  }
?>

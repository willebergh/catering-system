<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setup</title>
  </head>
  <body>
    <form action="./setup.php" method="post">
      <button type="submit" name="button">Start Setup</button>
    </form>
  </body>
</html>

<?php
  if (isset($_POST['button'])) {
    include_once "./config.php";

    $connDatabase = new mysqli($servername, $username, $password);
    $createDatabase = "CREATE DATABASE $dbname";

    if ($connDatabase->connect_error) {
      die("Connection Faild: " . $connDatabase->connect_error);
    }
    if ($connDatabase->query($createDatabase) === true) {
      $createDatabase_error = "0";
      echo "Database $dbname successfully created.</br>";

      $connTable = new mysqli($servername, $username, $password, $dbname);
      $createOrderTable = "CREATE TABLE orders (
        uuid varchar(255) NOT NULL PRIMARY KEY,
        name varchar(255) NOT NULL,
        phoneNr VARCHAR(255) NOT NULL,
        email varchar(255) NOT NULL,
        address varchar(255) NOT NULL,
        description TEXT NOT NULL,
        `order` TEXT NOT NULL
      );";
      $createUserTable = "CREATE TABLE users (
        uuid varchar(255) NOT NULL PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
      );";

      if ($connTable->connect_error) {
        die("Connection Faild: " . $connTable->connect_error);
      }
      if ($connTable->query($createOrderTable)) {
        $createOrderTable_error = "0";
        echo "The orders tabel was successfully created.</br>";
      } else {
        $createOrderTable_error = "1";
        echo "There was an error trying to create table orders.</br>";
      }

      if ($connTable->query($createUserTable)) {
        $createUserTable_error = "0";
        echo "The users tabel was successfully created.</br>";
      } else {
        $createUserTable_error = "1";
        echo "There was an error trying to create table orders.</br>";
      }

    } else {
      $createDatabase_error = "1";
      echo "There was an error trying to create database $dbname";
    }

    if ($createDatabase_error == "0") {
      echo "Database Created. </br>";
    } else if (empty($createOrderTable_error) & empty($createUserTable_error)) {
      echo "Database error ";
    } else if ($createOrderTable_error == "0" & $createUserTable_error == "0") {
      echo "Tables Created";
    }
  }

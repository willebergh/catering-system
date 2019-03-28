<?php
  if (isset($_POST['button'])) {
    include_once "../../config.php";

    $connDatabase = new mysqli($servername, $username, $password);
    $createDatabase = "CREATE DATABASE $dbname";
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

    if ($connDatabase->connect_error) {
      header("Location: ../../setup.php?status&conndb=1");
      die;
    }
    if ($connDatabase->query($createDatabase) === true) {
      $db = "ok";
    } else {
      $db = "1";
    }

    if ($connTable->connect_error) {
      header("Location: ../../setup.php?status&connwdb=2");
      die;
    }
    if ($connTable->query($createOrderTable)) {
      $tbOrder = "ok";
    } else {
      $tbOrder = "1";
    }

    if ($connTable->query($createUserTable)) {
      $tbUser = "ok";
    } else {
      $tbUser = "1";
    }

  header("Location: ../../setup.php?status&db=$db&tbOrder=$tbOrder&tbUser=$tbUser");
  }

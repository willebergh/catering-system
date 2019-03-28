<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setup</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/main.css">
  </head>
  <body>

    <div class="setup-container">

      <div class="setup setup-header">
        <h1>Catering-System Setup</h1>
      </div>

      <div class="setup setup-sidebar">
        <ul>
          <li>Welcome</li>
          <li>1. Database Server Creds.</li>
          <li>2. Create Database and Tables</li>
          <li>3. Setup Admin account</li>
          <li>4. All Done. Login.</li>
        </ul>
      </div>

      <div class="setup setup-step step-0">
        <h1>Welcome to catering-system</h1>
        <p>During the setup we are going to:</p>
        <ol>
          <li>Create a database</li>
          <li>Create all tables in the database</li>
          <li>Setup an admin account</li>
          <li>Thats it.</li>
        </ol>
        <a href="./assets/script/setup-script.php">Let's do it!</a>
      </div>

      <div class="setup setup-step step-1">
        <p>Please provide server credentials</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="servername" placeholder="Servername">
          <input type="text" name="username" placeholder="Username">
          <input type="text" name="password" placeholder="Password">
          <button type="submit" name="button">Next</button>
        </form>
      </div>

      <div class="setup setup-step step-2">
        <p>We are now going to create a database called catering_system</br>
        and in that database, we are going to create two tables called, orders and users</p>
        <a href="#">Next</a>
      </div>

      <div class="setup setup-step setp-3">
        <p>Please register an admin account</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="username" placeholder="Username">
          <input type="text" name="email" placeholder="E-mail">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="password_repeat" placeholder="Repeat password">
          <button type="submit" name="button">Next</button>
        </form>
      </div>

  </div>
  </body>
</html>

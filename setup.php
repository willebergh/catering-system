<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Catering-System | Setup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./assets/js/setup.js"></script>
  </head>
  <body onload="resetProgress()">
    <div id="php"></div>

    <div class="container" style="margin-top: 10%; max-width: 600px;">

      <div class="row align-items-center">
        <div class="col border rounded p-3 m-2">
          <div class="container">
            <h3>Catering-System Setup</h3>
            <p>Progress:</p>
            <div class="progress">
              <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col border rounded p-3 m-2" style="height: 50vh;">

          <div id="step1" class="container">
            <h4>Step 1</h4>
            <h4>Welcome to catering-system</h1>
            <p>During the setup we are going to:</p>
            <p>Create a database</br>
              Create all tables in the database</br>
              Setup an admin account</br>
              Thats it.</p>
            <button class="btn btn-primary" style="position:absolute;bottom:16px;right:16px;" type="button" name="button" onclick="showStep2()">Let's do it!</button>
          </div>

          <div id="step2" class="container">
            <h4>Step 2</h4>
            <p>Please provide server credentials</p>
            <form style="width: 50%;margin:0 auto;" class="setup-form" action="./assets/script/setup-script.php" method="post">
              <div class="form-group">
                <input class="form-control" type="text" name="servername" placeholder="Servername">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="password" placeholder="Password">
              </div>
            </form>
            <button class="btn btn-primary" style="position:absolute;bottom:16px;right:16px;" type="button" name="button" onclick="showStep3()">Next</button>
          </div>

          <div id="step3" class="container">
            <h4>Step 3</h4>
            <p>We are now going to create a database called catering_system</br>
            and in that database, we are going to create two tables called, orders and users</p>
            <button class="btn btn-primary" style="position:absolute;bottom:16px;right:16px;" type="button" name="button" onclick="showStep4()">Next</button>
          </div>

          <div id="step4" class="container">
            <h4>Step 4</h4>
            <p>Please register an admin account</p>
            <form style="width: 50%;margin:0 auto;" action="index.html" method="post">
              <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password_repeat" placeholder="Repeat password">
              </div>
            </form>
            <button class="btn btn-primary" style="position:absolute;bottom:16px;right:16px;" type="button" name="button" onclick="showStep5()">Next</button>
          </div>

          <div id="step5" class="container">
            <h4>All done!</h4>
            <p>To access the dashboard please login at <code>/catering-system/login.php</code> or down below.</p>
            <button class="btn btn-primary" style="position:absolute;bottom:16px;right:16px;" type="button" name="button">Login</button>
          </div>

        </div>
      </div>

    </div>

  </body>
</html>

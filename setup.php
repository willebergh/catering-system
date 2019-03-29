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
    <script type="text/javascript">
      function showStep1() {
        document.getElementById('liStep1').className += " active";
        document.getElementById('liStep2').classList.remove("active");
        document.getElementById('liStep3').classList.remove("active");
        document.getElementById('liStep4').classList.remove("active");
        document.getElementById('liStep5').classList.remove("active");

        document.getElementById('aStep1').className += " text-white";
        document.getElementById('aStep2').classList.remove("text-white");
        document.getElementById('aStep3').classList.remove("text-white");
        document.getElementById('aStep4').classList.remove("text-white");
        document.getElementById('aStep5').classList.remove("text-white");

        document.getElementById('setupStep1').style.display = "block";
        document.getElementById("setupStep2").style.display = "none";
        document.getElementById('setupStep3').style.display = "none";
        document.getElementById("setupStep4").style.display = "none";
        document.getElementById("setupStep5").style.display = "none";
      }
      function showStep2() {
        document.getElementById('liStep1').className += " active";
        document.getElementById('liStep2').className += " active";
        document.getElementById('liStep3').classList.remove("active");
        document.getElementById('liStep4').classList.remove("active");
        document.getElementById('liStep5').classList.remove("active");

        document.getElementById('aStep1').className += " text-white";
        document.getElementById('aStep2').className += " text-white";
        document.getElementById('aStep3').classList.remove("text-white");
        document.getElementById('aStep4').classList.remove("text-white");
        document.getElementById('aStep5').classList.remove("text-white");

        document.getElementById('setupStep1').style.display = "none";
        document.getElementById("setupStep2").style.display = "block";
        document.getElementById('setupStep3').style.display = "none";
        document.getElementById("setupStep4").style.display = "none";
        document.getElementById("setupStep5").style.display = "none";
      }
      function showStep3() {
        document.getElementById('liStep1').className += " active";
        document.getElementById('liStep2').className += " active";
        document.getElementById('liStep3').className += " active";
        document.getElementById('liStep4').classList.remove("active");
        document.getElementById('liStep5').classList.remove("active");

        document.getElementById('aStep1').className += " text-white";
        document.getElementById('aStep2').className += " text-white";
        document.getElementById('aStep3').className += " text-white";
        document.getElementById('aStep4').classList.remove("text-white");
        document.getElementById('aStep5').classList.remove("text-white");

        document.getElementById('setupStep1').style.display = "none";
        document.getElementById("setupStep2").style.display = "none";
        document.getElementById('setupStep3').style.display = "block";
        document.getElementById("setupStep4").style.display = "none";
        document.getElementById("setupStep5").style.display = "none";
      }
      function showStep4() {
        document.getElementById('liStep1').className += " active";
        document.getElementById('liStep2').className += " active";
        document.getElementById('liStep3').className += " active";
        document.getElementById('liStep4').className += " active";
        document.getElementById('liStep5').classList.remove("active");

        document.getElementById('aStep1').className += " text-white";
        document.getElementById('aStep2').className += " text-white";
        document.getElementById('aStep3').className += " text-white";
        document.getElementById('aStep4').className += " text-white";
        document.getElementById('aStep5').classList.remove("text-white");

        document.getElementById('setupStep1').style.display = "none";
        document.getElementById("setupStep2").style.display = "none";
        document.getElementById('setupStep3').style.display = "none";
        document.getElementById("setupStep4").style.display = "block";
        document.getElementById("setupStep5").style.display = "none";
      }
      function showStep5() {
        document.getElementById('liStep1').className += " active";
        document.getElementById('liStep2').className += " active";
        document.getElementById('liStep3').className += " active";
        document.getElementById('liStep4').className += " active";
        document.getElementById('liStep5').className += " active";

        document.getElementById('aStep1').className += " text-white";
        document.getElementById('aStep2').className += " text-white";
        document.getElementById('aStep3').className += " text-white";
        document.getElementById('aStep4').className += " text-white";
        document.getElementById('aStep5').className += " text-white";

        document.getElementById('setupStep1').style.display = "none";
        document.getElementById("setupStep2").style.display = "none";
        document.getElementById('setupStep3').style.display = "none";
        document.getElementById("setupStep4").style.display = "none";
        document.getElementById("setupStep5").style.display = "block";
      }

    </script>
  </head>
  <body>
    <div class="setup-container">

      <div class="setup-header container">
        <h1>Catering-System Setup</h1>
      </div>

      <div class="setup-sidebar">
        <ul class="list-group">
          <li id="liStep1" class="list-group-item m-2 p-2 active"><a id="aStep1" class="text-white" href="javascript:void(0)" onclick="showStep1()">Welcome</a></li>
          <li id="liStep2" class="list-group-item m-2 p-2"><a id="aStep2" href="javascript:void(0)" onclick="showStep2()">Database Server Creds</a></li>
          <li id="liStep3" class="list-group-item m-2 p-2"><a id="aStep3" href="javascript:void(0)" onclick="showStep3()">Create Database and Tables</a></li>
          <li id="liStep4" class="list-group-item m-2 p-2"><a id="aStep4" href="javascript:void(0)" onclick="showStep4()">Setup Admin account</a></li>
          <li id="liStep5" class="list-group-item m-2 p-2"><a id="aStep5" href="javascript:void(0)" onclick="showStep5()">All Done. Login</a></li>
        </ul>
      </div>

      <div id="setupStep1" class="setup-step border rounded p-3 m-2">
        <div class="container">
          <h4>Welcome to catering-system</h1>
          <p>During the setup we are going to:</p>
          <p>Create a database</br>
            Create all tables in the database</br>
            Setup an admin account</br>
            Thats it.</p>
          <a class="btn btn-primary float-right" href="./assets/script/setup-script.php">Let's do it!</a>
        </div>
      </div>

      <div id="setupStep2" class="setup-step border rounded p-3 m-2 hide">
        <div class="container">
          <p>Please provide server credentials</p>
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="servername" placeholder="Servername">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="password" placeholder="Password">
            </div>
            <button class="btn btn-primary float-right" type="submit" name="button">Next</button>
          </form>
        </div>
      </div>

      <div id="setupStep3" class="setup-step border rounded p-3 m-2 hide">
        <div class="container">
          <p>We are now going to create a database called catering_system</br>
          and in that database, we are going to create two tables called, orders and users</p>
          <a class="btn btn-primary float-right" href="#">Next</a>
        </div>
      </div>

      <div id="setupStep4" class="setup-step border rounded p-3 m-2 hide">
        <div class="container">
          <p>Please register an admin account</p>
          <form class="" action="index.html" method="post">
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
            <button class="btn btn-primary float-right" type="submit" name="button">Next</button>
          </form>
        </div>
      </div>

      <div id="setupStep5" class="setup-step border rounded p-3 m-2 hide">
        <div class="container">
          <h4>All done!</h4>
          <p>To access the dashboard please login at <code>/catering-system/login.php</code> or down below.</p>
          <a class="btn btn-primary float-right" href="#">Login</a>
        </div>
      </div>

    </div>
  </body>
</html>

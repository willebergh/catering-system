function resetProgress() {
  var step1 = document.getElementById("step1");
  var step2 = document.getElementById("step2");
  var step3 = document.getElementById("step3");
  var step4 = document.getElementById("step4");
  var step5 = document.getElementById("step5");

  step1.style.display = "block";
  step2.style.display = "none";
  step3.style.display = "none";
  step4.style.display = "none";
  step5.style.display = "none";
}
function showStep2() {
  var step1 = document.getElementById("step1");
  var step2 = document.getElementById("step2");
  var progressBar = document.getElementById("progressBar");

  step1.style.display = "none";
  step2.style.display = "block";
  progressBar.style.width = "25%";
}
function showStep3() {
  var step2 = document.getElementById("step2");
  var step3 = document.getElementById("step3");
  var progressBar = document.getElementById("progressBar");

  step2.style.display = "none";
  step3.style.display = "block";
  progressBar.style.width = "50%";
}
function showStep4() {
  var step3 = document.getElementById("step3");
  var step4 = document.getElementById("step4");
  var progressBar = document.getElementById("progressBar");

  step3.style.display = "none";
  step4.style.display = "block";
  progressBar.style.width = "75%";
}
function showStep5() {
  var step4 = document.getElementById("step4");
  var step5 = document.getElementById("step5");
  var progressBar = document.getElementById("progressBar");

  step4.style.display = "none";
  step5.style.display = "block";
  progressBar.style.width = "100%";
}


function checkDatabaseCreds() {
    var step = "step2";

    var dbServername = $("#dbServername").val();
    var dbUsername = $("#dbUsername").val();
    var dbPassword = $("#dbPassword").val();

    var resultGreen = $('#step2ResultGreen');
    var resultRed = $('#step2ResultRed');

    var btnNext = $("#step2BtnNext");
    var btnConnect = $("#step2BtnConnect");
    var btnConnectLoading = $("#step2BtnConnectLoading");

    btnConnect.toggleClass("d-none");
    btnConnectLoading.toggleClass("d-none")

    $.post("./assets/script/setup.php", { step: step, dbServername: dbServername, dbUsername: dbUsername, dbPassword: dbPassword },
    function(data) {
	     if (data == "ok") {
         resultRed.addClass("d-none")
         resultGreen.removeClass("d-none");
         resultGreen.html("Connected");

         btnConnect.toggleClass("d-none");
         btnConnectLoading.toggleClass("d-none");

         btnNext.removeClass("btn-secondary");
         btnNext.addClass("btn-primary");
         document.getElementById("step2BtnNext").removeAttribute("disabled");

       } else {
         resultGreen.addClass("d-none");
         resultRed.removeClass("d-none");
         resultRed.html(data);

         btnConnect.toggleClass("d-none");
         btnConnectLoading.toggleClass("d-none");
       }
    });
}


function createDatabaseAndTables() {
  var step = "step3";
  var createDB = "true";

  var resultGreen = $('#step3ResultGreen');
  var resultRed = $('#step3ResultRed');

  var btnNext = $("#step3BtnNext");
  var btnCreate = $("#step3BtnCreate");
  var btnCreateLoading = $("#step3BtnCreateLoading");

  btnCreate.toggleClass("d-none");
  btnCreateLoading.toggleClass("d-none");

  $.post("./assets/script/setup.php", {step: step, createDB: createDB},
  function(data) {
    if (data == "dbCreated") {
      resultRed.addClass("d-none")
      resultGreen.removeClass("d-none");
      resultGreen.html("Created");

      btnCreate.toggleClass("d-none");
      btnCreateLoading.toggleClass("d-none");

      btnNext.removeClass("btn-secondary");
      btnNext.addClass("btn-primary");
      document.getElementById("step3BtnNext").removeAttribute("disabled");

    } else {
      resultGreen.addClass("d-none");
      resultRed.removeClass("d-none");
      resultRed.html(data);

      btnCreate.toggleClass("d-none");
      btnCreateLoading.toggleClass("d-none");
    }
  });
}

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

function showStep1_1() {
  var showStep1 = $("#showStep1").val();
  $.post("submit.php", { showStep1: showStep1 },
  function(data) {
 $('#php').html(data);
  });

  console.log("works");
}

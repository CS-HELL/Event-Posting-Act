// Script for login.php
// Madriaga
$(document).ready(function () {

  $("#regFormButton").click(function () {
    var blur = document.getElementById("blur");
    blur.classList.toggle('active');
    var popup = document.getElementById("popup");
    popup.classList.toggle('active');
  });

  $("#loginFormButton").click(function () {
    var blur = document.getElementById("blur");
    blur.classList.toggle('active');
    var popup = document.getElementById("popup");
    popup.classList.toggle('active');
  });

  $("#loginbutton").click(function () {
    var username = $("#username").val();
    var password = $("#password").val();

    $.post("php/loginHandler.php", {
        username: username,
        password: password
      })
      .done(function (data) {
        switch (data) {
          case "Success": // If loginHandler echoes success do this:
            window.location = "index.php";
            break;
          case "Denied": // If loginHandler echoes denied do this:
            $("#loginmessage").text("Invalid Username or Password!");
            $("#loginbutton").show();
            break;

          case "Blank Credentials": // If loginHandler echoes blank credentials do this:
            $("#loginmessage").text("Fields can't be blank!");
            $("#loginbutton").show();
            break;
        }
      });
  });

});
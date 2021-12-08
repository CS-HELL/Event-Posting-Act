// Script for login.php
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


// NOT YET WORKING
// $("#register").click(function() {
//   var firstname = $("#r-first-name").val();
//   var lastname = $("#r-last-name").val();
//   var username = $("#r-username").val();
//   var password = $("#r-password").val();
//   var img_name = $("#r-image").val();
//   var img_size = $("#r-image").val();
//   var tmp_name = $("#r-image").val();
//   var error = $("#r-image").val();

//   $.post("php/registrationHandler.php", 
//   { firstname:firstname, lastname:lastname, username:username, password:password, 
//     img_name:img_name, img_size:img_size, tmp_name:tmp_name, error:error })
//     .done(function (data) {
//       switch (data) {
//         case "success":
//           window.location = "index.php";
//           break;
//         case "largefile":
//           $("#regmessage").text("File is too large!");
//           $("#register").show();
//           break;

//         case "invalidext":
//           $("#regmessage").text("Invalid file!");
//           $("#register").show();
//           break;

//         case "unknownerror":
//           $("#regmessage").text("An Error has occurred!");
//           $("#register").show();
//           break;
//         case "error":
//           $("#regmessage").text("Error Error!");
//           $("#register").show();
//           break;
//       }
//     });

// })
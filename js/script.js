var pathToPfps = "img/uploadedpfp/"

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

// Script for index.php
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  $.ajax({
    type: "GET",
    url: "php/postsHandler.php",
    dataType: "html",
    success: function (data) {

      var post = JSON.parse(data);

      // Key is the Number of post generated (not to be confused with the number of posts from the database)
      // Value is the values of key ex. Key 0: "post_id":"1","post_author_id":"1" <== is the value
      $.each(post, function (key, value) {
        // Compress the data from the database with the path to the image
        var img_path = pathToPfps + value.Profile_Pic;
        const content =
          `
        <div class="[ panel panel-default ] panel-post">
          <div class="panel-heading">
            <img class="[ img-circle pull-left ]" src="${img_path}" alt="" />
            <h3>${value.Username}</h3>
            <h5><span>${value.post_datetime}</span> </h5>
          </div>
        <div class="panel-body">
          <p><b>$${value.post_title}</b></p>
          <p>${value.post_content}</p>
        </div>
        <div class="panel-footer">
          <button type="button" class="[ btn btn-default ]"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
          <button type="button" class="[ btn btn-default ]">Comment</button>
        </div>
        </div>
        `;
        // Generate a single post each iteration
        document.getElementById("mid-content").innerHTML += content;
      });
    }
  });

  // Generate Posts from data echoed by postsHandler
  $.ajax({
    type: "GET",
    url: "php/profileHandler.php",
    dataType: "html",
    success: function (data) {

      var currentUser = JSON.parse(data);

      var img_path2 = pathToPfps + currentUser.Profile_Pic;

      const content =
        `
        <center>
          <img src="${img_path2}"><br><br>
          <h3>${currentUser.Username}</h3>
          <span></span>
        </center>
        <br>
        <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-pen-alt"></i><span>Post Now</span></a>
        <a href="#"><i class="fa fa-pied-piper-square"></i><span>My Posts</span></a>
        <a href="#"><i class="fa fa-dungeon"></i><span>Manage Events</span></a>
        `;
      // Generate a single post each iteration
      document.getElementById("sidebar-left").innerHTML = content;
    }
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
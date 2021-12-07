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

    $.post("php/loginHandler.php", { username: username, password: password })
      .done(function (data) {
        switch (data) {
          case "Success":
            window.location="index.php";
            break;

          case "Denied":
            $("#loginmessage").text("Invalid Username or Password!");
            $("#loginbutton").show();
            break;

          case "Blank Credentials":
            $("#loginmessage").text("Fields can't be blank!");
            $("#loginbutton").show();
            break;
        }
      });
  });
  

});


$(document).ready(function () {
  // Load Data for Index
  $("#mid-content").load("php/postsHandler.php");
  $("#sidebar-left").load("php/indexHandler.php");

});

// function scrollto(div) {
//     $('html,body').animate({
//       scrollTop: $("#"+div).offset().top
//     },'slow');
//   };

//   $(document).ready(function() {
//     $('#posts-container').hide();

//     $.getJSON('../posts.json', function(post) {

//       let diffc = 1;
//       let posts = [];
//       posts = post;
//       post.reverse();

//       const dynamic = document.querySelector('#posts-container');

//       for (var i = 0; i < post.length; i++){

//         var fetch = document.querySelector('#posts-container').innerHTML;

//         dynamic.innerHTML = `
//           <div class="post po-${diffc}">
//             <section>
//               <div class="details-section"><span class="date">${posts[i].date}</span></div>
//               <p>${posts[i].post_p}</p>
//             </section>
//           </div>` + fetch;

//           if(diffc == 1){
//             diffc = 2;
//           } else{
//             diffc = 1;
//           }
//       }
//     })

//     $('#subheader').click(function() {
//       if($('#posts-container').is(':visible')){
//         $('#posts-container').hide(1000);
//       } else {
//         $('#posts-container').show(1000);
//       }

//     })

//   });







//   $(document).ready(function() {
//     $("#login").on('click', function() {
//       var username = $("#username").val();
//       var password = $("#username").val();







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
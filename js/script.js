$(document).ready(function () {

  $("#loginbutton").click(function () {
    //$("#loginstatus").html("<img src='img/blines.gif'>");

    var username = $("#username").val();
    var password = $("#password").val();

    $.post("php/loginHandler.php", { username: username, password: password })
      .done(function (data) {
        switch (data) {
          case "Success":
            window.location = "index.php";
            break;
          case "Denied":
            $("#loginmessage").text("Invalid Username or Password!");
            $("#loginbutton").show();
            break;
          case "Blank Credentials":
            $("#loginmessage").text("Fields can't be blank!");
            $("#loginbutton").show();
        }
      });
  });
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


//       $.ajax({
//         url: 'php/login.php',
//         method: 'POST',
//         data: {
//           login: 1,
//           usernamePHP: username,
//           passwordPHP: password
//         },
//         success: function (response) {

//         },
//         dataType: 'text'

//       });
//     });
//   });




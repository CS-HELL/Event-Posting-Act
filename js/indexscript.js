var pathToPfps = "img/uploadedpfp/"

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
            <p><b>${value.post_title}</b></p>
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
          <a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;<span>Home</span></a>
          <a href="#"><i class="fa fa-pen-alt fa-fw" aria-hidden="true"></i>&nbsp;<span>Post Now</span></a>
          <a href="#"><i class="fa fa-pied-piper-square fa-fw" aria-hidden="true"></i>&nbsp;<span>My Posts</span></a>
          <a href="#"><i class="fa fa-dungeon fa-fw" aria-hidden="true"></i>&nbsp;<span>Manage Events</span></a>
          `;
        // Generate profile information
        document.getElementById("sidebar-left").innerHTML = content;
      }
    });
  
  });
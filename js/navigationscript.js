var pathToPfps = "img/uploadedpfp/"

// Universal Script for left-right navigation
$(document).ready(function () {
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
          <div class="links-container">
          <a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;<span>Home</span></a>
          <a href="#"><i class="fa fa-pen-alt fa-fw" aria-hidden="true"></i>&nbsp;<span>Post Now</span></a>
          <a href="#"><i class="fa fa-pied-piper-square fa-fw" aria-hidden="true"></i>&nbsp;<span>My Posts</span></a>
          <a href="eventpage.php"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp;<span>Events</span></a>
          <a href="#"><i class="fa fa-dungeon fa-fw" aria-hidden="true"></i>&nbsp;<span>Events I am in</span></a>
          </div>
          `;
        // Generate profile information
        $("#sidebar-left").append(content);
      }
    });
  
  });
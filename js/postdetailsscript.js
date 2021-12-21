var pathToPfps = "img/uploadedpfp/"

// Script for index.php
// Andres
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  const urlString = window.location.search;
  const urlParams = new URLSearchParams(urlString);
  const urlPost_ID = urlParams.get('post_id');
  console.log(urlPost_ID)
  getPostData(urlPost_ID);

});

/**
 * This function is responsible for communicating with the php server 
 * and to dynamically insert elements to the page.
 * 
 * The post_id is the id of the post that is retrieved from the url.
 * @param {*} post_id 
 */
function getPostData(post_id) {
  $.ajax({
    url: "php/postsHandler.php",
    method: "GET",
    dataType: "text",
    data: {
      RetrieveSinglePost: post_id
    }, success: function (data) {
      var post = JSON.parse(data);

      var img_path = pathToPfps + post.Profile_Pic;
      const content =
        `
          <div class="[ panel panel-default ] panel-post">
            <div class="panel-heading">
              <img class="[ img-circle pull-left ]" src="${img_path}" alt="" />
              <h3>${post.Username}</h3>
              <h5><span>${post.post_datetime}</span> </h5>
            </div>
          <div class="panel-body">
            <p><b>${post.post_title}</b></p>
            <p>${post.post_content}</p>
          </div>
          <div class="panel-footer">
          </div>
          </div>
          `;
      $("#mid-content").append(content);
    }
  });
}
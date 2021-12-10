var pathToPfps = "img/uploadedpfp/"

// Script for index.php
$(document).ready(function () {
    // Generate Posts from data echoed by postsHandler
    // Generate Posts from data echoed by postsHandler
    const urlString = window.location.search;
    const urlParams = new URLSearchParams(urlString);
    const urlPost_ID = urlParams.get('post_id');
    console.log(urlPost_ID)
    getPostData(urlPost_ID);
    
            // $.each(post, function (key, value) {
            //   // Compress the data from the database with the path to the image
});


function getPostData(post_id) {
    $.ajax({
        url: "php/postHandler.php",
        method: "POST",
        dataType: "text",
        data: {
            url:post_id
        }, success: function (data) {
            var post = JSON.parse(data);

            // Key is the Number of post generated (not to be confused with the number of posts from the database)
            // Value is the values of key ex. Key 0: "post_id":"1","post_author_id":"1" <== is the value

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
            <button type="button" class="[ btn btn-default ]" id="like-button"><i class="fa fa-thumbs-up fa-1x like" aria-hidden="true"></i></button>
            <button type="button" class="[ btn btn-default ]" id="comment-button">Comment</button>
          </div>
          </div>
          `;
            // Generate a single post each iteration
            //document.getElementById("mid-content").innerHTML = content;
            $("#mid-content").append(content);
        }
    });
}
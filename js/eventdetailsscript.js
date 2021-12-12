var pathToPfps = "img/uploadedpfp/";
var pathToeventBanners = "img/uploadedeventbanner/";

// Script for index.php
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  const urlString = window.location.search;
  const urlParams = new URLSearchParams(urlString);
  const urleventPost_ID = urlParams.get('event_post_id');
  console.log(urleventPost_ID)
  getPostData(urleventPost_ID);

});

/**
 * This function is responsible for communicating with the php server 
 * and to dynamically insert elements to the page.
 * 
 * The post_id is the id of the post that is retrieved from the url.
 * @param {*} post_id 
 */
function getPostData(event_post_id) {
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
        event_post_url_id: event_post_id
    }, success: function (data) {
      var eventPost = JSON.parse(data);

      $("#eventStart").append(eventPost.event_start_date_time);
      $("#eventEnd").append(eventPost.event_start_date_time);

      $("#event-pic").attr("src", pathToeventBanners+eventPost.event_banner_image);

      $("#eventAuthor").append(eventPost.Username);
      $("#eventDetails").append(eventPost.event_description);
    }
  });
}
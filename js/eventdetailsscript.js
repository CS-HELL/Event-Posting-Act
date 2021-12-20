var pathToPfps = "img/uploadedpfp/";
var pathToeventBanners = "img/uploadedeventbanner/";

// Script for index.php
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  const urlString = window.location.search;
  const urlParams = new URLSearchParams(urlString);
  const eventPost_ID = urlParams.get('event_post_id');
  getPostData(eventPost_ID);

});

/**
 * This function is responsible for communicating with the php server 
 * and to dynamically insert elements to the page.
 * 
 * The post_id is the id of the post that is retrieved from the url.
 * @param {*} post_id 
 */
function getPostData(eventPost_ID) {
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      eventPost_ID: eventPost_ID
    }, success: function (data) {
      var eventPost = JSON.parse(data);

      $("#eventStart").append(eventPost.event_start_date_time);
      $("#eventEnd").append(eventPost.event_end_date_time);

      $("#event-pic").attr("src", pathToeventBanners+eventPost.event_banner_image);

      $("#eventAuthor").append(eventPost.Username);
      $("#eventDetails").append(eventPost.event_description);
    }
  });
}
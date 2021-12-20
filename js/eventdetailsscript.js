var pathToPfps = "img/uploadedpfp/";
var pathToeventBanners = "img/uploadedeventbanner/";
var username = "";
var participants = [];

// Script for index.php
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  const urlString = window.location.search;
  const urlParams = new URLSearchParams(urlString);
  const eventPost_ID = urlParams.get('event_post_id');

  getUserData();
  getPostData(eventPost_ID);

  // setInterval(function () {
     getParticipants(eventPost_ID);
     currentUserIsParticipant(eventPost_ID);
  // }, 1000);

  $("#verifyjoin").click(function () {
    $.ajax({
      url: "php/eventsHandler.php",
      method: "POST",
      dataType: "text",
      data: {
        joinEvent: eventPost_ID
      }, success: function (data) {
         document.location.reload(true);
      }
    });
  })

  $("#verifyunjoin").click(function () {
    $.ajax({
      url: "php/eventsHandler.php",
      method: "POST",
      dataType: "text",
      data: {
        unjoinEvent: eventPost_ID
      }, success: function (data) {
        document.location.reload(true);
      }
    });
  })



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
      getEventPost: eventPost_ID
    }, success: function (data) {
      var eventPost = JSON.parse(data);

      $("#eventStart").append(eventPost.event_start_date_time);
      $("#eventEnd").append(eventPost.event_end_date_time);

      $("#event-pic").attr("src", pathToeventBanners + eventPost.event_banner_image);

      $("#eventAuthor").append(eventPost.event_author);
      $("#eventDetails").append(eventPost.event_description);

      //$("#cardrounded").append('');
    }
  });
}

function getParticipants(eventPost_ID) {
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      getParticipants: eventPost_ID
    }, success: function (data) {
      var eventPost = JSON.parse(data);
      let isParticipant = false;

      $.each(eventPost, function (key, value) {

        participants.push(value.participant);

        const content =
          `
          <p style="overflow-wrap: break-word;" id="imagever">${value.participant}</p>
          `;

        // Generate a single participant each iteration
        $("#modal-body").append(content)
      })

      



      // var valjoin = document.getElementById("validatejoin");
      // var valunjoin = document.getElementById("validateunjoin");

      // console.log(participants.includes(username))

      // if (participants.includes(username)) {
      //   valjoin.disabled = true;
      //   valunjoin.disabled = false;
      // } 
      
    }
  });
}


function getUserData() {
  $.ajax({
    type: "GET",
    url: "php/profileHandler.php",
    dataType: "html",
    success: function (data) {
      var currentUser = JSON.parse(data);
      username = currentUser.Username;
    }
  });
}


function currentUserIsParticipant(eventPost_ID) {
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      isParticipant: eventPost_ID
    }, success: function (data) {
      console.log(data);
      switch(data) {
        case "yes" : 
        $("#cardrounded").append('<button id="validateunjoin" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#validateUnjoinModal">Unjoin</button>"');
        break;

        case "no" : 
        $("#cardrounded").append('<button id="validatejoin" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#validateJoinModal">Join</button>"');
        break;
      }

    }
  });
}

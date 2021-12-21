var pathToPfps = "img/uploadedpfp/";
var pathToeventBanners = "img/uploadedeventbanner/";

const urlHostname = window.location.hostname;
const urlProtocol = window.location.protocol;
const path = urlProtocol+"//"+urlHostname+"/ApesStronk/updatepostevents.php?event_post_id=";

var username = "";
var post_id = "";
var isCancelled = false;
var participants = [];

// Script for index.php
$(document).ready(function () {
  // Generate Posts from data echoed by postsHandler
  const urlString = window.location.search;
  const urlParams = new URLSearchParams(urlString);
  const eventPost_ID = urlParams.get('event_post_id');

  getUserData();

  getPostData(eventPost_ID);

  getParticipants(eventPost_ID);
  currentUserIsParticipant(eventPost_ID);

  IsEventCancelled(eventPost_ID);
  
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
  $("#verifycancel").click(function () {
    $.ajax({
      url: "php/canceleventsHandler.php",
      method: "POST",
      dataType: "text",
      data: {
        cancel: eventPost_ID
      }, success: function (data) {
         window.location = "eventpage.php";
      }
    });
  })
  $("#verifyrecover").click(function () {
    recoverEvent(eventPost_ID);
  })
  $("#verifydelete").click(function () {
    deleteEvent(eventPost_ID);
  })


});

/**
 * This function is responsible for communicating with the php server 
 * and to dynamically insert elements to the page.
 * 
 * The post_id is the id of the post that is retrieved from the url.
 * @param {*} post_id 
 * Madriaga
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
      post_id = eventPost.event_post_id;

      $("#eventStart").append(eventPost.event_start_date_time);
      $("#eventEnd").append(eventPost.event_end_date_time);

      $("#event-pic").attr("src", pathToeventBanners + eventPost.event_banner_image);

      $("#eventAuthor").append(eventPost.event_author);
      $("#eventDetails").append(eventPost.event_description);

      

    }
  });
}

// Madriaga
function getParticipants(eventPost_ID) {
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      getParticipants: eventPost_ID
    }, success: function (data) {
      var eventPost = JSON.parse(data);

      $.each(eventPost, function (key, value) {

        participants.push(value.participant);

        const content =
          `
          <p style="overflow-wrap: break-word;" id="imagever">${value.participant}</p>
          `;

        // Generate a single participant each iteration
        $("#modal-body").append(content)
      })
      
    }
  });
}


// Madriaga
function getUserData() {
  $.ajax({
    type: "GET",
    url: "php/profileHandler.php",
    dataType: "html",
    success: function (data) {
      var currentUser = JSON.parse(data);
      username = currentUser.Username;

      if (currentUser.Account_Type == "ADMIN" || currentUser.Account_Type == "ORGANIZER") {
        const content = 
        `
        <button id="editeventbutton" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]"><a style="text-decoration:none; color: black;" href=${path}${post_id}>Edit Event</a></button>
        <br>
        `;
        $("#cardrounded").append(content);
      }
    }
  });
}


// Madriaga
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

// Napeek - Ferrer
function IsEventCancelled(eventPost_ID){
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      isCancelled: eventPost_ID
    }, success: function (data) {
      console.log(data);
      switch(data) {
        case "yes" : 
        $("#cardrounded").append('<button id="deleteeventbutton" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#deletemodal">Delete Event</button>"');
        $("#cardrounded").append('<button id="recovereventbutton" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#recovermodal">Recover Event</button>"');
        $("#participants").hide();
        $("#validatejoin").hide();
        $("#validateunjoin").hide();
        break;

        case "no" : 
        $("#cardrounded").append('<button id="canceleventbutton" style="background: rgb(182, 182, 182);" type="button" class="[ btn btn-default ]" data-toggle="modal" data-target="#cancelmodal">Cancel Event</button>"');
        break;
      }

    }
  });
}

// Napeek - Ferrer
function deleteEvent(eventPost_ID){
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      deleteEvent: eventPost_ID
    }, success: function () {
      window.location = "eventPage.php";
    }
  });
}

// Napeek - Ferrer
function recoverEvent(eventPost_ID){
  $.ajax({
    url: "php/eventsHandler.php",
    method: "POST",
    dataType: "text",
    data: {
      recoverEvent: eventPost_ID
    }, success: function (data) {
      console.log(data);
      switch(data) {
        case "success" : 
        window.location = "eventPage.php";
        break;
      }

    }
  });
}
var pathToeventBanners = "img/uploadedeventbanner/";

const urlHostname = window.location.hostname;
const urlProtocol = window.location.protocol;
const path = urlProtocol+"//"+urlHostname+"/ApesStronk/eventdetails.php?event_post_id=";

const urlString = window.location.search;
const urlParams = new URLSearchParams(urlString);
const eventPost_ID = urlParams.get('event_post_id');

// Format for date picker.
// Flatpickr is used.
flatpickr("input[type=datetime-local]", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:ss",
})

$(document).ready(function () {

  

  getPostData(eventPost_ID);

  $("#validate").click(function () {
        var eventtitle = $("#eventtitle").val();
        var eventlocation = $("#eventlocation").val();
        var eventstart = $("#eventstartdatetime").val();
        var eventend = $("#eventenddatetime").val();
        var eventdetails = $("#eventdetails").val();

        document.getElementById("titlever").innerHTML = eventtitle;
        document.getElementById("locationver").innerHTML = eventlocation;
        document.getElementById("startver").innerHTML = eventstart;
        document.getElementById("endver").innerHTML = eventend;
        document.getElementById("detver").innerHTML = eventdetails;
    })

})

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
  
        $("#eventtitle").val(eventPost.event_title);
        $("#eventlocation").val(eventPost.event_location);

        $("#eventstartdatetime").val(eventPost.event_start_date_time);
        $("#eventenddatetime").val(eventPost.event_end_date_time);
        $("#eventdetails").val(eventPost.event_description);
  

  
      }
    });
  }


  // Submit Event
    $("#submitbutton").click(function (e) {
        e.preventDefault();

        var eventtitle = $("#eventtitle").val();
        var eventlocation = $("#eventlocation").val();
        var eventstart = $("#eventstartdatetime").val();
        var eventend = $("#eventenddatetime").val();
        var eventdetails = $("#eventdetails").val();

        var form_data = new FormData();
        form_data.append("eventtitle", eventtitle);
        form_data.append("eventlocation", eventlocation);
        form_data.append("eventstart", eventstart);
        form_data.append("eventend", eventend);
        form_data.append("eventdetails", eventdetails);
        form_data.append("eventPost_ID", eventPost_ID);

        $.ajax({
            method: "POST",
            url: "php/updatepostHandler.php",
            data: form_data,
            dataType: "text",
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                switch (response) {
                    case "success": // If insertpostHandler echoes success do this:
                        window.location.href = "eventpage.php";
                        break;
                    case "Error": // If insertpostHandler echoes denied do this:
                        $("#statusmessage").text("Error");
                        break;
                    case "Blank Credentials": // If insertpostHandler echoes blank credentials do this:
                        $("#loginmessage").text("Fields can't be blank!");
                        break;
                }
            }
        })
    })
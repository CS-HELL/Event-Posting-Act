var pathToeventBanners = "img/uploadedeventbanner/";

const urlHostname = window.location.hostname;
const urlProtocol = window.location.protocol;
const path = urlProtocol+"//"+urlHostname+"/ApesStronk/eventdetails.php?event_post_id=";

$("#eventpage").ready(function () {

    getEvents("ongoingEventsDetails", "ongoing-events-row");
    getEvents("upcomingEventsDetails", "upcoming-events-row");
    getEvents("participatedEventsDetails", "participated-events-row");
    getEvents("cancelledEventsDetails", "cancelled-events-row");
})


/**
 * This function is used to get events from the database and update the event banner with the new event banner.
 * @param {*} event
 * @param {*} parentID 
 */
function getEvents(eventStatus, parentID) {
    $.ajax({
        url: "php/eventsHandler.php",
        method: "GET",
        dataType: "text",
        data: {
            retrieveEventPosts: eventStatus
        }, success: function (data) {
            console.log(data);
            var event = JSON.parse(data);

            // Key is the Number of post generated (not to be confused with the number of posts from the database)
            // Value is the values of key ex. Key 0: "post_id":"1","post_author_id":"1" <== is the value
            $.each(event, function (key, value) {
                var banner_path = pathToeventBanners + value.event_banner_image;
                var date = value.event_start_date_time.split(/[- :]/);

                var month = new Date(Date.UTC(date[0], date[1] - 1, date[2], date[3], date[4], date[5]));
                let shortMonth = month.toLocaleString('en-us', { month: 'short' });
                let day = month.getDate();

                const content =
                    `
                    <div class="col-md-4 on-hover">
                    <div class="">
                        <a href="${path}${value.event_post_id}"><img class="card-img-top" src="${banner_path}" alt="wrappixel kit"></a>
                        <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">${shortMonth}<span class="d-block">${day}</span></div>
                        <h5 class="font-weight-medium mt-3"><a href="${path}${value.event_post_id}" class="text-decoration-none link">${value.event_title}</p>
                        <a href="${path}${value.event_post_id}" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
                    </div>
                    </div>
                    `;

                // Generate a single event each iteration
                document.getElementById(parentID).innerHTML += content;
            })

        }
    });
}



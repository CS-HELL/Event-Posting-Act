var pathToeventBanners = "img/uploadedeventbanner/"

$(document).ready(function() {

    getEvents("ongoingEvents", "ongoing-events-row");

    getEvents("upcomingEvents", "upcoming-events-row");
})




 function getEvents(event, parentID){
    $.ajax({
        url: "php/eventsHandler.php",
        method: "POST",
        dataType: "text",
        data: {
            event:event
        }, success: function (data) {
            console.log(data);
            var event = JSON.parse(data);

            // Key is the Number of post generated (not to be confused with the number of posts from the database)
            // Value is the values of key ex. Key 0: "post_id":"1","post_author_id":"1" <== is the value
            $.each(event, function (key, value) {
                var banner_path = pathToeventBanners + value.event_banner_image;
                var date = value.event_start_date_time.split(/[- :]/);

                var month = new Date(Date.UTC(date[0], date[1]-1, date[2], date[3], date[4], date[5]));
                let shortMonth = month.toLocaleString('en-us', { month: 'short' });
                let day = month.getDate();
        
                const content =
                    `
            <div class="col-md-4 on-hover">
            <div class="">
                <a href="#"><img class="card-img-top" src="${banner_path}" alt="wrappixel kit"></a>
                <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">${shortMonth}<span class="d-block">${day}</span></div>
                <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">${value.event_title}</p>
                <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
              </div>
            </div>
      `;
                // Generate a single post each iteration
                document.getElementById(parentID).innerHTML += content;
                //$("#ongoing-events-row").appendChild(content);
            })

        }
    });
}
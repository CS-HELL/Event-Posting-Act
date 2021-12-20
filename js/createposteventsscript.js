flatpickr("input[type=datetime-local]", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:ss",
})

$(document).ready(function () {

    $("#submitbutton").click(function (e) {
        e.preventDefault();

        var eventtitle = $("#eventtitle").val();
        var eventlocation = $("#eventlocation").val();
        var eventstart = $("#eventstartdatetime").val();
        var eventend = $("#eventenddatetime").val();
        var eventdetails = $("#eventdetails").val();
        var eventimage = $("#image").prop("files")[0];

        var form_data = new FormData();
        form_data.append("eventtitle", eventtitle);
        form_data.append("eventlocation", eventlocation);
        form_data.append("eventstart", eventstart);
        form_data.append("eventend", eventend);
        form_data.append("eventdetails", eventdetails);
        form_data.append("image", eventimage);

        $.ajax({
            method: "POST",
            url: "php/insertpostHandler.php",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                switch (response) {
                    case "Success": // If loginHandler echoes success do this:
                        $("#statusmessage").text("Inserted Successfully");
                        break;
                    case "Error": // If loginHandler echoes denied do this:
                        $("#statusmessage").text("Error");
                        break;
                    case "Blank Credentials": // If loginHandler echoes blank credentials do this:
                        $("#loginmessage").text("Fields can't be blank!");
                        break;
                }
            }})
    })



})
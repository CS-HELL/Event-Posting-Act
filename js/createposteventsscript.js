flatpickr("input[type=datetime-local]", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:ss",
})

$(document).ready(function () {

    $("#validate").click(function () {
        var eventtitle = $("#eventtitle").val();
        var eventlocation = $("#eventlocation").val();
        var eventstart = $("#eventstartdatetime").val();
        var eventend = $("#eventenddatetime").val();
        var eventdetails = $("#eventdetails").val();
        var eventimage = $("#image")[0].files[0];

        document.getElementById("titlever").innerHTML = eventtitle;
        document.getElementById("locationver").innerHTML = eventlocation;
        document.getElementById("startver").innerHTML = eventstart;
        document.getElementById("endver").innerHTML = eventend;
        document.getElementById("detver").innerHTML = eventdetails;
        document.getElementById("imagever").innerHTML = eventimage.name;
    })

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
            dataType: "text",
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                switch (response) {
                    case "success": // If loginHandler echoes success do this:
                        window.location.href = "eventpage.php";
                        break;
                    case "Error": // If loginHandler echoes denied do this:
                        $("#statusmessage").text("Error");
                        break;
                    case "Blank Credentials": // If loginHandler echoes blank credentials do this:
                        $("#loginmessage").text("Fields can't be blank!");
                        break;
                }
            }
        })
    })


})
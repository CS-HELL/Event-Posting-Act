// Format for date picker.
// Flatpickr is used.
flatpickr("input[type=datetime-local]", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:ss",
})

$(document).ready(function () {

    // Click function, for validation, appends the current data to the validation acceptance modal.
    $("#validate").click(function () {
        var posttitle = $("#posttitle").val();
        var postdetails = $("#eventdetails").val();

        document.getElementById("titlever").innerHTML = posttitle;
        document.getElementById("detver").innerHTML = postdetails;
    })

    // Submit Event
    $("#submitbutton").click(function (e) {
        e.preventDefault();

        var posttitle = $("#posttitle").val();
        var postdetails = $("#eventdetails").val();

        var form_data = new FormData();
        form_data.append("posttitle", posttitle);
        form_data.append("postdetails", postdetails);

        $.ajax({
            method: "POST",
            url: "php/communitypost.php",
            data: form_data,
            dataType: "text",
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                switch (response) {
                    case "success": // If insertpostHandler echoes success do this:
                        window.location.href = "index.php";
                        break;
                    case "error": // If insertpostHandler echoes denied do this:
                        $("#statusmessage").text("Error");
                        break;
                    case "Blank Credentials": // If insertpostHandler echoes blank credentials do this:
                        $("#loginmessage").text("Fields can't be blank!");
                        break;
                }
            }
        })
    })


})
flatpickr("input[type=datetime-local]", {
    enableTime: true,
    dateFormat: "Y-m-d H:i:ss",
})

$(document).ready(function () {

    $("#submitbutton").click(function (e) {
        e.preventDefault();

        $.ajax({
            method: "POST",
            url: "php/insertpostHandler.php",
            data: $('#event_post').serialize(),
            dataType: "text",
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
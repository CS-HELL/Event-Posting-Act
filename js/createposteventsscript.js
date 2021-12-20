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

            }
        })
    })



})
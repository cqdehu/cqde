$(document).ready(function () {
    $('#add_button').click(function () {
        var name = $('#name_input').val();
        var price = $('#price_input').val();
        var location = $('#location_input').val();
        var area = $('#area_input').val();

        $.ajax({
            type: "POST",
            url: "add_offer.php",
            data: { name: name, price: price, location: location, area: area },
            success: function (response) {
                alert('Done');
            }
        });
    });
});

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "get_offer.php",
        success: function (response) {
            $('#offers').html(response);
        }
    });
});

const eventSource = new EventSource("sse.php");

eventSource.onmessage = function (event) {
    const eventData = JSON.parse(event.data);
    const resultDiv = document.getElementById("offers");
    resultDiv.innerHTML = eventData.message;
};

eventSource.onerror = function (error) {
    console.error("SSE error:", error);
};
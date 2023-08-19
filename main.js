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

function longPolling() {
    $.ajax({
        type: "GET",
        url: "get_offer.php",
        success: function (response) {
            $('#offers').html(response);
            longPolling(); // Újraindítjuk a long polling ciklust
        },
        complete: function () {
            setTimeout(longPolling, 1000); // Várunk egy időt és újraindítjuk a kérést
        }
    });
}

$(document).ready(function () {
    longPolling(); // Elindítjuk a long polling ciklust
});

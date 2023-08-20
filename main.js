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


//
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "get_offer_name.php",
        success: function (response) {
            $('#list').html(response)
        }
    });
});
//

//
$(document).ready(function () {

    var list = $('#list');

    var selected_offer = ""; // Változó deklaráció

    list.change(function() {
        selected_offer = $(this).val();
    });

    $('#delete_offer_btn').click(function() {
        $.ajax({
            type: "POST",
            url: "delete_offer.php",
            data: { name: selected_offer},
            success: function (response) {
                console.log(response)
                selected_offer.val().remove()
                
            }
        });
    });
});
//
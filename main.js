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
                get_offer()
                get_offer_name()
            }
        });
    });
});

//
$(document).ready(function () {
    get_offer()
    get_offer_name()
    delete_offer()
});
//


//
function get_offer() {
    $.ajax({
        type: "GET",
        url: "get_offer.php",
        success: function (response) {
            $('#offers').hide().html(response).fadeIn('slow');
        }
    });
};
//

//
function get_offer_name() {
    $.ajax({
        type: "GET",
        url: "get_offer_name.php",
        success: function (response) {
            $('#list').html(response)
        }
    });
};
//

//
function delete_offer() {
    var list = $('#list');
    var selected_offer = ""; // Változó deklaráció

    list.change(function () {
        selected_offer = $(this).val();
    });

    $('#delete_offer_btn').click(function () {
        $.ajax({
            type: "POST",
            url: "delete_offer.php",
            data: { name: selected_offer },
            success: function (response) {
                get_offer()
                get_offer_name()
                console.log(response);

            }
        });
    });
};

//

$(document).ready(function () {
    $('#SZEGED').click(function (){
        console.log(this)
    })
});
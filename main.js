$(document).ready(function () {
    $('#add_button').click(function () {
        var name = $('#name_input').val();
        var price = $('#price_input').val();
        var description = $('#description_input').val();
        var location = $('#location_input').val();
        var area = $('#area_input').val();
        var rate = $('#rate_input').val()
        var rent = $('#rent_input').val();
        var cost = $('#cost_input').val();

        if (name !== '' && price !== '' && description !== '' && location !== '' && area !== '' && rate !== '' && rent !== '' && cost !== '') {
            $.ajax({
                type: "POST",
                url: "add_offer.php",
                data: { name: name, price: price, description: description, location: location, area: area, rate: rate, rent: rent, cost: cost },
                success: function (response) {
                    get_offer();
                    get_offer_name();
                }
            });
        } else {
            console.log("Minden mező kitöltése kötelező!");
        }
    });
});


//
$(document).ready(function () {
    get_offer()
    get_offer_name()
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

$(document).ready(function () {
    var list = $('#list')
    var selected_offer = ""; // Változó deklaráció és inicializáció

    list.change(function () {
        selected_offer = $(this).val();
        console.log(selected_offer);
    });

    $('#delete_offer_btn').click(function () {
        console.log(selected_offer);
        $.ajax({
            type: "POST",
            url: "delete_offer.php",
            data: { name: selected_offer }, // Itt a nevet definiálod, nem selected_offer
            success: function (response) {
                console.log(response);
                get_offer()
                get_offer_name()
            }
        });
    });
});




//

//
$(document).ready(function () {
    $(document).on("click", ".offer", function () {
        var id = $(this).attr("id");


    });
});
//

// Toast

function toast(text) {
    
    $.ajax({
        type: "POST",
        url: "get_tost.php",
        data: {text: text},
        success: function (response) {
            $('.toast-container').html(response)
        }
    });
}

//

toast("Hello World")



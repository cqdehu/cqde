// ADD OFFER
$(document).ready(function () {
    $('#add_button').click(function () {

        var name = $('#name_input').val();
        var price = $('#price_input').val();
        var description = $('#description_input').val();
        var location = $('#location_input').val();
        var area = $('#area_input').val();
        var rate = $('#rate_input').val();
        var person = $('#person_input').val();
        var room = $('#room_input').val();
        var bed = $('#bed_input').val();
        var rent = $('#rent_input').val();
        var cost = $('#cost_input').val();

        if (name !== '' && price !== '' && description !== '' && location !== '' && area !== '' && rate !== '' && person !== '' && room !== '' && bed !== '' && rent !== '' && cost !== '') {
            $.ajax({
                type: "POST",
                url: "add_offer.php",
                data: {
                    name: name,
                    price: price,
                    description: description,
                    location: location,
                    area: area,
                    rate: rate,
                    person: person,
                    room: room,
                    bed: bed,
                    rent: rent,
                    cost: cost
                },
                success: function (response) {
                    get_offer();
                    get_offer_name();
                    toast(name + " ajánlat sikeresen létrehozva!", "success")
                }
            });
        } else {
            toast("Minden mező kitöltése kötelező!", "danger");
        }
    });
});
//


//
$(document).ready(function () {
    get_offer()
    get_offer_name()
});
//


// GET PRE OFFER
function get_offer() {
    $.ajax({
        type: "GET",
        url: "get_pre_offer.php",
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

// DELETE OFFER

$(document).ready(function () {
    var list = $('#list')
    var selected_offer = "";
    var selected_offer_name = "";

    list.change(function () {
        selected_offer = $(this).val();
        selected_offer_name = $(this).find(':selected').text()
    });

    $('#delete_offer_btn').click(function () {
        if (selected_offer !== "") {
            $.ajax({
                type: "POST",
                url: "delete_offer.php",
                data: { name: selected_offer },
                success: function (response) {
                    console.log(response);
                    get_offer()
                    get_offer_name()
                    toast(selected_offer_name + " ajánlat sikeresen el lett távolítva!", "success")
                    selected_offer = "";
                    selected_offer_name = "";
                }
            });
        } else {
            toast("Válassz egy ajánlatot!", "danger")
        }
    });
});
//

// TOAST

var toast_count = 0;

function toast(text, color) {
    toast_count++;

    if (color == '') {
        color = "dark"
    }

    $.ajax({
        type: "POST",
        url: "get_toast.php",
        data: { text: text, id: "toast_" + toast_count, color: color },
        success: function (response) {
            $('.toast-container').append(response);

            var toastId = "toast_" + toast_count; // Az egyedi toast id

            $('#' + toastId).toast('show'); // Megjelenítés a helyes id alapján
        }
    });
}
//

// GET OFFER
$(document).ready(function () {
    $(document).on("click", ".offer", function () {
        var id = $(this).attr("id");
        console.log(id)
        $.ajax({
            type: "GET",
            url: "get_offer.php",
            success: function (response) {
                $("#offer").html(response)
            }
        });

    });
});
//


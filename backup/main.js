// ADD OFFER BUTTON
$(document).ready(function () {
    $('#add_button').click(function () {
        add_offer()
    });
});
//



// ADD OFFER
function add_offer() {
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
                //get_offer_name();
                toast(name + " ajánlat sikeresen létrehozva!", "success")
            }
        });
    } else {
        toast("Minden mező kitöltése kötelező!", "danger");
    }
}
//



// TOAST
var toast_count = 0;

function toast(text, color) {
    toast_count++;

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
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

//setInterval(function () {
//    var name = $('#name_input').val()
//    console.log(name)
//}, 1000);
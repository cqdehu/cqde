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


$(document).ready(function() {
    $("#searchInput").on("keyup", function() {
      var searchTerm = $(this).val().toLowerCase();
  
      $("#offers .col").each(function() {
        var itemName = $(this).find(".name").text().toLowerCase();
        var itemLocation = $(this).find(".location").text().toLowerCase();
  
        if (itemName.includes(searchTerm) || itemLocation.includes(searchTerm)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
  
      // Ha nincs keresőkifejezés, megjelenítjük az összes elemet
      if (!searchTerm) {
        $("#offers .col").show();
      }
    });
  });
  

  
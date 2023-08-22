$('#profile').click(function () { 
    $.ajax({
        type: "GET",
        url: "logout.php",
    });
});
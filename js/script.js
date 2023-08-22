//LOGOUT
$('#profile').click(function () { 
    $.ajax({
        type: "GET",
        url: "logout.php",
    });
});


//LOGIN
$('#login_page_button').click(function() {
    console.log("dawd")
    $(body).load('/pages/login.php', function() {
        $(this).fadeIn();
    })
})

$('#login_button').click(function() {
    console.log("dawd")
    $.ajax({
        type: "GET",
        url: "login.php",
    });
})


//SIGNUP
$('#signup_button').click(function() {
    $.ajax({
        type: "GET",
        url: "signup.php",
    });
})
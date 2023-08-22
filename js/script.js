//LOGOUT
$('#profile').click(function () { 
    $.ajax({
        type: "GET",
        url: "logout.php",
    });
});


//LOGIN
$('#login_page_button').click(function() {
    $.ajax({
        type: "GET",
        url: "/pages/login.php",
    });
})

$('#login_button').click(function() {
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
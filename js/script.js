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
    window.location.href = '/pages/login.php'
})

$('#login_button').click(function() {
    console.log("dawd")
    $.ajax({
        type: "GET",
        url: "login.php",
        success: function (response) {
        console.log(response)
        }
    });
})


//SIGNUP
$('#signup_button').click(function() {
    $.ajax({
        type: "GET",
        url: "signup.php",
    });
})
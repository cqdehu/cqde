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
    var username = $('#username_input').val()
    var password = $('#password_input').val()

    $.ajax({
        type: "POST",
        url: "/login.php",
        data: {
            username: username, password: password,
        },
        success: function (response) {
            if (response === 'success') {
                window.location.href = '/index.php'
            } else {
                console.log(response)
            }
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
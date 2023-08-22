//TOAST//

//TOAST COUNT
var toast_count = 0;

//TOAST SYSTEM
function toast(text, color) {
    toast_count++;

    $.ajax({
        type: "POST",
        url: "/includes/toast.php",
        data: {
            text: text,
            id: "toast_" + toast_count,
            color: color
        },
        success: function (response) {
            $('.toast-container').append(response);

            var toastId = "toast_" + toast_count;

            $('#' + toastId).toast('show');

            console.log(":D")
        }
    });
}
//

////



//LOGIN//

//NAVIGATE TO LOGIN PAGE
$('#login_page_button').click(function () {
    window.location.href = '/pages/login.php'
})
//

//LOGIN SYSTEM
$('#login_button').click(function () {
    var username = $('#username_input').val()
    var password = $('#password_input').val()

    if (username !== '' && password !== '') {
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
                    toast(response, 'danger')
                }
            }
        });
    } else {

    }
})
//

////



//LOGOUT
$('#profile').click(function () {
    $.ajax({
        type: "GET",
        url: "/logout.php",
        success: function (response) {
            if (response === 'success') {
                window.location.href = '/index.php'
            }
        }
    });
});
//

isValid = false

function isEmail(email) {
    var regex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    return regex.test(email);
}

function Login() {
    function redirect() {
        $(location).prop('href', '/')
    }

    var login = $("#email-login").val()
    var pass = $("#pass-login").val()
    loginForm = {}
    loginForm['email'] = login;
    loginForm['password'] = pass;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'http://103.179.56.179/api/auth/login',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        type: "POST", /* or type:"GET" or type:"PUT" */
        dataType: "json",
        data: loginForm,
        success: function (result) {
            Snackbar.show({
                text: 'Login Success',
                // backgroundColor: '#fff',
                textColor: '#24D1BC',
                pos: 'top-right',
                duration: '2000',
                showAction: false,
            });
            user = result.data.token
            sessionStorage.setItem("user", user);
            setTimeout(redirect, 500);
        },
        error: function (result) {
            $("#wrong-credential").removeClass("d-none")
            Snackbar.show({
                text: 'Login Failed',
                // backgroundColor: '#fff',
                textColor: '#f35b50',
                pos: 'top-right',
                duration: '2000',
                showAction: false,
            });
        }
    });
}

function LoggedIn(){
    $('#login-link').addClass("d-none")
    $('#logout-link').removeClass("d-none")
}


$(document).ready(function () {
    $("body").removeClass("hidden").hide().fadeIn(500);
    $(document).on("keyup", ".form-input-login", function(){
        $("#wrong-credential").addClass("d-none")
        email_val = $("#email-login").val()
        pass_val = $("#pass-login").val()
        if(email_val == "" || pass_val == ""){
            $("#login-btn").attr("disabled", "disabled");
            $("#login-btn").removeClass("btn-outline-primary").addClass("btn-outline-secondary");
        } else {
            $("#login-btn").removeAttr("disabled", "disabled");
            $("#login-btn").addClass("btn-outline-primary").removeClass("btn-outline-secondary");
        }
       
        if (!isEmail(email_val)) {
            isValid = false
        }else{
            isValid = true
        }
    })

    $(document).on("click", "#login-btn", function () {    
        email_val = $("#email-login").val()
        if (isValid == true) {
            Login()
            $("#email-login").tooltip('hide')
        }else{
            $("#email-login").tooltip('show')
        }
    })
    
    user = sessionStorage.getItem('user')
    if(user != null){
        LoggedIn()
    }
    
    $(document).on("click", "#logout-link", function(){
        sessionStorage.removeItem('user')
        $('#login-link').removeClass("d-none")
        $('#logout-link').addClass("d-none")
        $(location).prop('href', '/')
    })

})

$(document).ready(function(){
    $("body").removeClass("hidden").hide().fadeIn(500);
    user = Cookies.get('user')
    function redirect() {
        $(location).prop('href', '/')
    }
    if(user != null){
        Snackbar.show({
            text: 'You already logged in!',
            // backgroundColor: '#fff',
            textColor: '#24D1BC',
            pos: 'top-right',
            duration: '2000',
            showAction: false,
        });
        setTimeout(redirect, 500);
    }
})
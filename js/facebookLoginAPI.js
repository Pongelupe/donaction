function preencherCampos(token) {
    FB.api('/me', 'GET', {
        "access_token": token,
        "fields": "id,name,email"
    }, function(response) {
        document.getElementById('name').value = response.name;
        if (response.email!=undefined) {
        document.getElementById('email').value = response.email;
        }
    });
}

function requestToken() {
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            preencherCampos(response.authResponse.accessToken);
        }
    });
}

function login() {
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            preencherCampos(response.authResponse.accessToken);
        } else {
            FB.login(function(response) {
                scope: 'email,user_likes'
            });
            requestToken();
        }
    });
}
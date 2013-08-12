var _API = 'http://localhost/forum-backend/index.php/api/';
var _SESSION_KEY = null;

/**
 * Creates a session for the user on the server. Stores the session
 * in the local storage of the browser.
 * @returns {undefined}
 */
function login() {
    var username = $('#login-form input:text#username').val();
    var password = $('#login-form input:password#password').val();
    
    $.ajax({
        url      : _API + 'authentication_startsession/',
        dataType : 'json',
        type     : 'get',
        data     : {
            username : username,
            password : password
        }
    }).done(function(key) {
        _SESSION_KEY = key;
        console.log(key);
        var obj = {
            username : username,
            key      : key
        };
        console.log(obj);
        localStorage.setObject('forum_user', obj);
        window.location.href = '../';
    });
};
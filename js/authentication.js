var _FORUM = new Forum();

/**
 * Creates a session for the user on the server. Stores the session
 * in the local storage of the browser.
 * @returns {undefined}
 */
function login() {
    var username = $('#login-form input:text#username').val();
    var password = $('#login-form input:password#password').val();
    
    _FORUM.authentication.startsession(null, username, password, function(key) {
        var obj = {
            username : username,
            key      : key
        };
        localStorage.setObject('forum_user', obj);
        window.location.href = '../';
    });
};
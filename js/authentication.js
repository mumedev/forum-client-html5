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

/**
 * Creates a new user account.
 * @returns {undefined}
 */
function register() {
    var username = $('#register-form input:text#username').val();
    var password = $('#register-form input:password#password').val();
    var email    = $('#register-form input:email#emailaddress').val();
    var homepage = $('#register-form input:url#homepage').val();
    
    _FORUM.user.register(username, password, email, homepage,
        function() {
            _FORUM.authentication.startsession(null, username, password,
                function(key) {
                    var obj = {
                        username : username,
                        key      : key
                    };
                    localStorage.setObject('forum_user', obj);
                    window.location.href = '../';
                }
            );
        }
    );
};
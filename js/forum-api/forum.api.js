/**
 * The Forum class forms an abstraction layer to access the
 * Forum REST API.
 * @returns {Forum}
 */
Forum = function () {
    
    var _API = 'http://localhost/forum-server-restapi/index.php/api/';
    
    /**
     * Creates a session for the user on the server.
     * @param {String}      username
     * @param {String}      password
     * @param {function}    callback
     * @returns {undefined}
     */
    this.login = function (username, password, callback) {
        $.ajax({
            url      : _API + 'authentication_startsession/',
            dataType : 'json',
            type     : 'get',
            data     : {
                username : username,
                password : password
            }
        }).done(callback);
    };

    /**
     * Deletes the session for a given user from the server.
     * @param {String}      username
     * @param {String}      session
     * @param {function}    callback
     * @returns {undefined}
     */
    this.logout = function (username, session, callback) {
        $.ajax({
            url      : _API + 'authentication_endsession/',
            dataType : 'json',
            type     : 'get',
            data     : {
                username : username,
                session  : session
            }
        }).done(callback);
    };
};


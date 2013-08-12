var _API = 'http://localhost/forum-backend/index.php/api/';

/**
 * Log the active user off. Destroy the session on the server,
 * and removes the user's login data from the localStorage.
 * @returns {undefined}
 */
function logout() {
    var user = localStorage.getObject('forum_user');
    $.ajax({
        url : _API + 'authentication_endsession/',
        dataType : 'json',
        type : 'get',
        data : {
            username : user.username,
            session  : user.key
        }
    }).done(function () {
        localStorage.removeItem('forum_user');
        window.location.href = 'login/';
    });
}
var _FORUM = new Forum();

/**
 * Log the active user off. Destroy the session on the server,
 * and removes the user's login data from the localStorage.
 * @returns {undefined}
 */
function logout() {
    var user = localStorage.getObject('forum_user');
    _FORUM.authentication.endsession(null, user.username, user.key, function() {
        localStorage.removeItem('forum_user');
        window.location.href = 'authentication/';
    });
};
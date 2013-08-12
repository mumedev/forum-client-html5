////////////////////////////////////////////////////////////////////////////////
//
//  methods / functions / actions
//
////////////////////////////////////////////////////////////////////////////////

/**
 * The Forum API Object.
 * @type Forum
 */
var _FORUM = new Forum();
var _USER = localStorage.getObject('forum_user');

/**
 * Log the active user off. Destroy the session on the server,
 * and removes the user's login data from the localStorage.
 * @returns {undefined}
 */
function logout() {
    _FORUM.authentication.endsession(null, _USER.username, _USER.key, function() {
        localStorage.removeItem('forum_user');
        window.location.href = 'authentication/';
    });
};

function loadprofile() {
    _FORUM.user.getinfo(null, _USER.username, function(profile) {
        _FORUM.user.getskills(null, _USER.username, function(skills) {
            for (var i = 0; i < skills.length; i++) {
                console.log('skill[' + i + '] = ' + skills[i].name);
            }
        });
    });
}
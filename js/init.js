// If no session data can be found, redirect to login page.
if (! localStorage.getObject('forum_user')) {
    window.location.href = 'authentication/';
}
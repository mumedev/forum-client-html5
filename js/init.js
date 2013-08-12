// If no session data can be found, redirect to login page.
if (! localStorage.getItem('forum_user')) {
    window.location.href = 'login/';
}
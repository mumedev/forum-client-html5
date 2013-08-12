<?php
/**
 * Footer for a HTML5 / jQuery mobile page.
 */
function page_footer() {
?>
<div data-role="footer" data-theme="a"></div>
<?php
}
?>

<?php
/**
 * Header for a HTML5 / jQuery mobile page.
 */
function page_header($logout_btn) {
?>
<div data-role="header" data-theme="a">
                <h1>
                    FORUM
                </h1>
<?php
    if ($logout_btn) {
?>

                <button onclick="logout();"
                    data-role="button"
                    data-icon=""
                    class="ui-btn-left"
                    title="Logout">
                    Logout
                </button>
            </div>
<?php
    }
}
?>
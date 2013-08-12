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
function page_header() {
?>
<div data-role="header" data-theme="a">
                <h1>
                    FORUM
                </h1>
                <button onclick="logout();"
                    data-role="button"
                    data-icon=""
                    class="ui-btn-left"
                    title="logout">
                    Logout
                </button>
            </div>
<?php
}
?>
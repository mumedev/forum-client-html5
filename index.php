<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
            CAMPUS FORUM WEB APP
        </title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/default.css" />
        <script type="text/javascript" src="js/jquery/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.mobile-1.2.0.min.js"></script>
        <script type="text/javascript" src="js/storage.js"></script>
        <!--script type="text/javascript" src="js/init.js"></script-->
        <script type="text/javascript" src="js/logout.js"></script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="home-page">
            <div data-role="header" data-theme="a">
                <h1>
                    CampusFORUM
                </h1>
                <button onclick="logout();"
                    data-role="button"
                    data-icon=""
                    class="ui-btn-left"
                    title="logout">
                    Logout
                </button>
            </div>
            <div data-role="content" data-theme="c">
            </div>
            <div data-role="footer" data-theme="a"></div>
        </div>
    </body>
</html>
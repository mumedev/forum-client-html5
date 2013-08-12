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
        <link rel="stylesheet" href="../css/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="../css/default.css" />
        <script src="../js/jquery/jquery-1.7.2.min.js"></script>
        <script src="../js/jquery/jquery.mobile-1.2.0.min.js"></script>
        <script src="../js/storage.js"></script>
        <script src="../js/login.js"></script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="home-page">
            <div data-role="header" data-theme="a">
                <h1>
                    CampusFORUM
                </h1>
            </div>
            <div data-role="content" data-theme="c">
                <form id="login-form">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password"/>
                    <input type="button" value="Login" onclick="login();"/>
                </form>
            </div>
            <div data-role="footer" data-theme="a"></div>
        </div>
        
        <!-- Home -->
        <div data-role="page" id="home-page">
            <div data-role="header" data-theme="a">
                <h1>
                    CampusFORUM
                </h1>
            </div>
            <div data-role="content" data-theme="c">
                <form id="login-form">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password"/>
                    <input type="button" value="Login" onclick="login();"/>
                </form>
            </div>
            <div data-role="footer" data-theme="a"></div>
        </div>
    </body>
</html>
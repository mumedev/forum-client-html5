<?php include '../templates.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
            FORUM WEB APP
        </title>
        <link type="text/css" rel="stylesheet" href="../css/jquery.mobile-1.2.0.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/default.css" />
        <script type="text/javascript" src="../js/jquery/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/jquery/jquery.mobile-1.2.0.min.js"></script>
        <script type="text/javascript" src="../js/forum-api/forum.api.js"></script>
        <script type="text/javascript" src="../js/storage.js"></script>
        <script type="text/javascript" src="../js/authentication.js"></script>
    </head>
    <body>
        
        
        <!-- Login -->
        <div data-role="page" id="login-page">
            <?php page_header(false); ?>
            <div data-role="content" data-theme="c">
                <form id="login-form">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password"/>
                    <input type="button" value="Login" title="Login" onclick="login();"/>
                </form>
                <a data-role="button" title="Register" href="#register-page">
                    Register
                </a>
            </div>
            <?php page_footer(); ?>
        </div>
        
        
        
        <!-- Register -->
        <div data-role="page" id="register-page">
            <?php page_header(false); ?>
            <div data-role="content" data-theme="c">
                <form id="register-form">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"/>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password"/>
                    <label for="emailaddress">Email Address:</label>
                    <input type="email" name="emailaddress" id="emailaddress"/>
                    <label for="homepage">Homepage:</label>
                    <input type="url" name="homepage" id="homepage"/>
                    <input type="button" value="Register" onclick="register();"/>
                </form>
                <a data-role="button" title="Register" href="#login-page">
                    Login
                </a>
            </div>
            <?php page_footer(); ?>
        </div>
        
        
    </body>
</html>
<?php include 'templates.php'; ?>
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
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="css/default.css" />
        <script type="text/javascript" src="js/jquery/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.mobile-1.2.0.min.js"></script>
        <script type="text/javascript" src="js/forum-api/forum.api.js"></script>
        <script type="text/javascript" src="js/storage.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        
        
        <!-- Home -->
        <div data-role="page" id="home-page">
            <?php page_header(true); ?>
            <div data-role="content" data-theme="c">
                Home!
            </div>
            <?php page_footer(); ?>
        </div>
        
        
        
        <!-- Question -->
        <div data-role="page" id="question-page">
            <?php page_header(true); ?>
            <div data-role="content" data-theme="c">
                Question!
            </div>
            <?php page_footer(); ?>
        </div>
        
        
        
        <!-- Profile -->
        <div data-role="page" id="profile-page">
            <?php page_header(true); ?>
            <div data-role="content" data-theme="c">
                Question!
            </div>
            <?php page_footer(); ?>
        </div>
        
        
    </body>
</html>
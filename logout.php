<?php
session_start();
?>
<html>
<head>
    <title>SIP - Success</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "/css/main.css" />
</head>
<body>
<?php
                if(isset($_SESSION['email']))
                {
                unset($_SESSION['email']);
                unset($_SESSION['name']);
                unset($_SESSION['type']);
                session_unset();
                session_destroy();
                $_SESSION = array();
                }
                //echo '<h1>You have been successfully logout</h1>';
?>
    <header>
        <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Logout Page</h2>
    </header>
    <!-- multistep form -->
    <div id="msform">
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">You have been successfully logged out!</h2>
            <br />
            <a href='/'>
                <input type="button" name="submit" class="action-button" value="Home" />
            </a>
        </fieldset>


    </div>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
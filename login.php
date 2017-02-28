<!DOCTYPE html>
<html>
<head>
    <title>SIP - Login</title>
    <link rel = "stylesheet"
    type = "text/css"
    href = "/css/main.css" />
</head>
<body>


    <header
        <h2 class="fs-title" style="text-align: center; color: #fff; font-size: 24px; padding-top: 50px;">Login Page</h2>
    </header>

    <form id="msform" method="POST" action='action.php' onsubmit="return loginsubmit();">
        <fieldset>
            <h2 class="fs-title">Enter your login details</h2>
            <br />
            <div id='err'></div>
            <input type="text" id='email' name="email" placeholder="Email" required/>
            <input type="password" id='pass' name="pass" placeholder="Password" required/>

            <input id='login_btn' type="submit" name="submit" class="action-button" value="Submit" />

        </fieldset>
    </form>

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>
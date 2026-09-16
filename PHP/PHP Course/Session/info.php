<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Info.</title>
</head>
<body>
    <div>
        <p><strong>Session: </strong>user ni information server upar store kare and all web page upar user no data available rakhe.</p>
        <p>Session user ni information store karine multiple pages upar use karavi shakay. Ex.Login Page, Shopping Cart, etc.</p>
        <p>By default session browser close thay tyare bandh thay che.</p>
        <p>Jo tamare permenent storage joie to database ni need pade.</p>
    </div>

    <div>
        <h4>Session Functions</h4>
        session_start() - Start a new session<br>
        $_SESSION - store and access session variables<br>
        unset() - Removes a specific session variable (e.g unset($_SESSION["favcolor"]))<br>
        session_destroy() - Destroys all data associated with the current session<br>
        session_unset() - Free all session variables<br>
    </div>
</body>
</html>
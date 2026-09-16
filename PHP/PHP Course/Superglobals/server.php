<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    echo "Website Secure hai! 🔒";
} else {
    echo "Website Secure nahi hai (HTTP hai)! 🌐";
}
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SCRIPT_URI'];
?>
<?php
    echo "<h3>filter_var() - Filters a single variable with a specified filter</h3>";

  echo "<strong>Sanitize and Validate Email</strong><br>";
  //Syntax:- filter_var(var, filter, options)

  $email = "kishanjadav366@gmail.com";

  // First sanitize email(delete this character - , " ( ) <script> <p> space)
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false):
  echo "$email is a valid email address.";
  else:
  echo "$email is not a valid email address.";
  endif;

  //------------------------------------------------------------------------------------------------
  
  echo "<br><br><strong>Sanitize and Validate URL</strong><br>";

  $url = "http://www.google.com";
  
  $url = filter_var($url,FILTER_SANITIZE_URL); //First sanitize url

  if(!filter_var($url,FILTER_VALIDATE_URL) === false): // Then validate url
    echo "$url is a valid URL address.";
else:
    echo "$url is a not valid URL address.";
endif;

//------------------------------------------------------------------------------------------------

echo "<br><br><strong>Validate an Integer </strong><br>";

    $int = 100;

    if(!filter_var($int,FILTER_VALIDATE_INT) === false || filter_var($int,FILTER_VALIDATE_INT) === 0):    // if condition ma 0 = false samje che
        echo "Integer is valid.";
    else:
        echo "Integer is not valid.";
    endif;
    
    //------------------------------------------------------------------------------------------------

    echo "<br><br><strong> Validate an IP Address</strong><br>";

    $ip = "127.0.0.1";

    if(!filter_var($ip,FILTER_VALIDATE_IP) === false):
        echo "$ip is a valid IP Address";
    else:
        echo "$ip is a not valid IP Address";
    endif;
    
  ?>
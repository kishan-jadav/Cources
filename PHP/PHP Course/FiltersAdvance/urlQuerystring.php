<?php
    echo "<h3> Validate URL - Must contain QueryString</h3>";

    // QueryString start with ? mark and 
    $url = "https://www.google.com/search?q=youtube&oq=youtube&gs_lcrp=EgZjaHJvbWUqBwgAEAAYjwIyBwgAEAAYjwIyEwgBEC4YgwEYkQIYsQMYgAQYigUyEwgCEAAYgwEYkQIYsQMYgAQYigUyEwgDEAAYgwEYkQIYsQMYgAQYigUyDQgEEAAYkQIYgAQYigUyBggFEEUYQTIGCAYQRRg8MgYIBxBFGDzSAQg1MDAwajBqN6gCALACAA&sourceid=chrome&ie=UTF-8";

    if(filter_var($url,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)):
        echo "URL is a validate URL with a query string.";
    else: 
        echo "URL is a unvalid URL with a query string.";
    endif;

?>
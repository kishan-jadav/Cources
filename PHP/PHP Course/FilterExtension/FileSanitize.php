<?php
    echo "<h3>Filter Sanitize Email</h3>";
    // nichena character delete kare.......
  // First sanitize email(delete this character - , " ( ) <script> <p> space)

$email = "kis<script>hanjadav366@gmail.com";

$gmail = filter_var($email,FILTER_SANITIZE_EMAIL);

var_dump($gmail);
?>
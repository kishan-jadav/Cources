<?php

    //array na multiple variable ne access karava mate use thay...  

    $data = array(
        'fullname' => 'Kishan Jadav',
        'age' => '21',
        'email' => 'kishanjadav366@gmail.com',
    );

    $mydata = filter_var_array($data);

    var_dump($mydata);
?>
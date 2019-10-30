<?php

    include '/wp-load.php';
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        $smapi_unique_key = get_option("smapi_unique_key");
        echo $smapi_unique_key;
        print_r($_POST);
    } else {
        die('Unauthorized access');
    }

?>
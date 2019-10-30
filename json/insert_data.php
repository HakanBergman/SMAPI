<?php

    include '/wp-load.php';
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        $smapi_unique_key = get_option("smapi_unique_key");
        /* Make sure our unique key is identified for this installation */
        if ($smapi_unique_key == $_POST['key']) {
            print_r($_POST);
        } else {
            die('Unauthorized access');
        }
    } else {
        die('Unauthorized access');
    }

?>
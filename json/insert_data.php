<?php

    include '/wp-load.php';
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        print_r($_POST);
    } else {
        die('Unauthorized access');
    }

?>
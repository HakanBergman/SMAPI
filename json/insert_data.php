<?php

    include '/wp-load.php';
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        echo "done";
    } else {
        die('Unauthorized access');
    }

?>
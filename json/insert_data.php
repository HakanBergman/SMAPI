<?php

    include '/wp-load.php';
    /* Make sure this is called by an administrator */
    if (current_user_can('administrator')) {
        $smapi_unique_key = get_option("smapi_unique_key");
        /* Make sure our unique key is identified for this installation */
        if ($smapi_unique_key == $_POST['key']) {
            print_r($_POST);
            /* Update our db table with the fetched values */
            global $wpdb;
            $table_name = $wpdb->prefix."smapi";
            $wpdb->query($wpdb->prepare("UPDATE $table_name SET month_12='2.9'"));
        } else {
            die('Unauthorized access');
        }
    } else {
        die('Unauthorized access');
    }

?>
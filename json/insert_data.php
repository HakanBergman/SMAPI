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
            $month_12 = array('month_12' => $_POST['month_12']);
            $wpdb->update($table_name, $month_12); 
            exit( var_dump( $wpdb->last_query ) );
        } else {
            die('Unauthorized access');
        }
    } else {
        die('Unauthorized access');
    }

?>
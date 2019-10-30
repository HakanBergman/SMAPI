<?php
    /* Update our stored values in the database */
    if ($_POST['fetchsmapidata'] && $_POST['action'] == 'updatesmapidata' && $_GET['storedata'] == true) {
        /* Button was pressed, now check that this user is indeed an administrator */
        if (current_user_can('administrator')) {
            /* User have pushed the right button */
            /* User is an administrator */
            if (!empty($_POST['smapiusername']) && !empty($_POST['smapipassword'])) {
                /* User have pushed the right button */
                /* User is an administrator */
                /* User have entered a username and a password */
                update_option('stored_smapi_username', $_POST['smapiusername']);
                update_option('stored_smapi_password', $_POST['smapipassword']);         
            }
        }
    }
    /* Check if we have any credentials stored */
    $smapi_username = get_option("stored_smapi_username");
    $smapi_password = get_option("stored_smapi_password");
    /* Fetch our unique key */
    $smapi_unique_key = get_option("smapi_unique_key");
    /* Fetch our stored values from database */
    global $wpdb;
    $table_name = $wpdb->prefix . "smapi";
    $smapi_data = $wpdb->get_results("SELECT * FROM $table_name LIMIT 1");    
?>

</table>

<div id="smapisettings" role="main">
    <div id="smapisettings-content">		
        <div class="wrap">
            <h1>SMAPI Settings</h1>
            <form method="post" action="?page=smapisettings.php&storedata=true" novalidate="novalidate">
                <input type="hidden" name="action" value="updatesmapidata">
                <input type="hidden" name="key" value="<?php echo $smapi_unique_key; ?>">
                <table class="form-table" role="presentation">
                    <tbody>
                        <?php if (current_user_can('administrator')) { ?>
                            <tr>
                                <td>
                                    <h2>SMAPI Credentials</h2>
                                    <p>
                                        <div><label><strong>Username</strong></label></div>
                                        <input name="smapiusername" type="text" id="username" value="<?php echo $smapi_username; ?>" placeholder="Username" class="regular-text">
                                    </p>
                                    <p>
                                        <div><label><strong>Password</strong></label></div>
                                        <input name="smapipassword" type="password" id="password" value="<?php echo $smapi_password; ?>" placeholder="Password" class="regular-text">
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0; margin: 0; padding-left: 10px;">
                                    <p class="submit" style="margin: 0; padding: 0;">
                                        <input type="submit" name="fetchsmapidata" id="submit" class="button button-primary" value="Save credentials">
                                        <?php if (!empty($smapi_username) && !empty($smapi_password)) { ?>
                                            <button type="button" name="updatefinancialvalues" class="button button-primary updatefinancialvalues">Update Financial Values</button>

                                        <?php } ?>
                                    </p>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>
                                <hr />
                                <h2>SMAPI Financial Values</h2>
                                <p>
                                    <div><label><strong>12 months</strong></label></div>
                                    <input name="month_12" type="text" id="month_12" value="<?php echo $smapi_data[0]->month_12; ?>" class="regular-text" style="padding" disabled>
                                </p>
                                <p>
                                    <div><label><strong>24 months</strong></label></div>
                                    <input name="month_24" type="text" id="month_24" value="<?php echo $smapi_data[0]->month_24; ?>" class="regular-text" disabled>
                                </p>
                                <p>
                                    <div><label><strong>36 months</strong></label></div>
                                    <input name="month_36" type="text" id="month_36" value="<?php echo $smapi_data[0]->month_36; ?>" class="regular-text" disabled>
                                </p>
                                <p>
                                    <div><label><strong>48 months</strong></label></div>
                                    <input name="month_48" type="text" id="month_48" value="<?php echo $smapi_data[0]->month_48; ?>" class="regular-text" disabled>
                                </p>
                                <p>
                                    <div><label><strong>60 months</strong></label></div>
                                    <input name="month_60" type="text" id="month_60" value="<?php echo $smapi_data[0]->month_60; ?>" class="regular-text" disabled>
                                </p>                                                                                                                                                                
                            </td>
                        </tr>
                    </tbody>
                </table>                
            </form>
        </div>
    </div>
</div>
<?php
    /* Update our stored values in the database */
    if ($_POST['fetchsmapidata'] && $_POST['action'] == 'updatesmapidata' && $_GET['storedata'] == true) {
        echo "something was posted";
    }
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
            <form method="post" action="?storedata=true" novalidate="novalidate">
                <input type="hidden" name="action" value="updatesmapidata">
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <td>
                                <h2>SMAPI Credentials</h2>
                                <p>
                                    <div><label><strong>Username</strong></label></div>
                                    <input name="username" type="text" id="username" placeholder="Username" class="regular-text">
                                </p>
                                <p>
                                    <div><label><strong>Password</strong></label></div>
                                    <input name="password" type="password" id="password" placeholder="Password" class="regular-text">
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0; margin: 0; padding-left: 10px;">
                                <p class="submit" style="margin: 0; padding: 0;"><input type="submit" name="fetchsmapidata" id="submit" class="button button-primary" value="Fetch data"></p>
                            </td>
                        </tr>
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
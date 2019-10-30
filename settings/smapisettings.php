<div id="smapisettings" role="main">
    <div id="smapisettings-content">		
        <div class="wrap">
            <h1>SMAPI Settings</h1>
            <form method="post" action="options.php" novalidate="novalidate">
                <input type="hidden" name="option_page" value="general">
                <input type="hidden" name="action" value="update">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="be9b3279a3">
                <input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php">
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
                                <p class="submit" style="margin: 0; padding: 0;"><input type="submit" name="submit" id="submit" class="button button-primary" value="Fetch data"></p>
                            </td>
                        </tr>
                    </tbody>
                </table>                
            </form>
        </div>
    </div>
</div>
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
                            </td>
                        <tr>
                            <th scope="row"><label for="blogname">Webbplatsrubrik</label></th>
                            <td><input name="blogname" type="text" id="blogname" value="WordPress - Test och demoversion" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="blogdescription">Slogan</label></th>
                            <td><input name="blogdescription" type="text" id="blogdescription" aria-describedby="tagline-description" value="En till WordPress-webbplats" class="regular-text">
                            <p class="description" id="tagline-description">Berätta med några ord vad den här webbplatsen handlar om.</p></td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Spara ändringar"></p>
            </form>
        </div>
    </div>
</div>
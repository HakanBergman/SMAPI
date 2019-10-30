<div id="wpbody" role="main">

<div id="wpbody-content">
		<div id="screen-meta" class="metabox-prefs">

			<div id="contextual-help-wrap" class="hidden" tabindex="-1" aria-label="Hjälp">
				<div id="contextual-help-back"></div>
				<div id="contextual-help-columns">
					<div class="contextual-help-tabs">
						<ul>
						
							<li id="tab-link-overview" class="active">
								<a href="#tab-panel-overview" aria-controls="tab-panel-overview">
									Översikt								</a>
							</li>
													</ul>
					</div>

										<div class="contextual-help-sidebar">
						<p><strong>För mer information:</strong></p><p><a href="https://codex.wordpress.org/Settings_General_Screen">Dokumentation för allmänna inställningar</a></p><p><a href="https://sv.wordpress.org/support/">Support</a></p>					</div>
					
					<div class="contextual-help-tabs-wrap">
						
							<div id="tab-panel-overview" class="help-tab-content active">
								<p>Fälten på den här sidan utgör några av de grundläggande inställningarna för din webbplats.</p><p>I de flesta teman visas webbplatsens titel högst upp på varje sida, i webbläsarens titelrad och som identifierande namn för syndikationsflöden. Många teman visar även webbplatsens slogan.</p><p>WordPressadress och webbplatsadress kan vara samma url (exempel.se) eller olika, t.ex om man har WordPress huvudfiler i en undermapp (exempel.se/wordpress) istället för i rotmappen.</p><p>Om du vill att besökarna ska kunna registrera sig, i stället för att registreras av administratören, bocka för rutan medlemskap . En standardroll för nya användare kan anges oavsett om registreringen skett av en administratören eller av besökaren själv.</p><p>Du kan ange språk, språkfilerna laddas då ner och installeras automatiskt (tillgängligt om systemet har skrivrättigheter).</p><p>UTC står för koordinerad universell tid (eller Coordinated Universal Time).</p><p>Du måste klicka på knappen Spara ändringar längst ner på sidan för att de nya inställningarna ska börja gälla.</p>							</div>
												</div>
				</div>
			</div>
				</div>
				<div id="screen-meta-links">
					<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Hjälp</button>
			</div>
				</div>
		
<div class="wrap">
<h1>Allmänna inställningar</h1>

<form method="post" action="options.php" novalidate="novalidate">
<input type="hidden" name="option_page" value="general"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="be9b3279a3"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php">
<table class="form-table" role="presentation">

<tbody><tr>
<th scope="row"><label for="blogname">Webbplatsrubrik</label></th>
<td><input name="blogname" type="text" id="blogname" value="WordPress - Test och demoversion" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="blogdescription">Slogan</label></th>
<td><input name="blogdescription" type="text" id="blogdescription" aria-describedby="tagline-description" value="En till WordPress-webbplats" class="regular-text">
<p class="description" id="tagline-description">Berätta med några ord vad den här webbplatsen handlar om.</p></td>
</tr>


<tr>
<th scope="row"><label for="siteurl">WordPressadress (URL)</label></th>
<td><input name="siteurl" type="url" id="siteurl" value="https://testwp.datadelenhc.se" class="regular-text code"></td>
</tr>

<tr>
<th scope="row"><label for="home">Webbplatsadress (URL)</label></th>
<td><input name="home" type="url" id="home" aria-describedby="home-description" value="https://testwp.datadelenhc.se" class="regular-text code">
	<p class="description" id="home-description">
		Skriv in adressen här om du vill att <a href="https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory">startsidan för din webbplats ska ligga i en annan katalog än där WordPress är installerat</a>.</p>
</td>
</tr>


<tr>
<th scope="row"><label for="new_admin_email">E-postadress</label></th>
<td><input name="new_admin_email" type="email" id="new_admin_email" aria-describedby="new-admin-email-description" value="hakan.bergman@datadelenhc.se" class="regular-text ltr">
<p class="description" id="new-admin-email-description">Den här adressen används för administrativa behov. Om du ändrar den så kommer vi att skicka ett meddelande till din nya adress för att bekräfta ändringen. <strong>Den nya adressen kommer att börja gälla först när den bekräftats.</strong></p>
</td>
</tr>


<tr>
<th scope="row">Medlemskap</th>
<td> <fieldset><legend class="screen-reader-text"><span>Medlemskap</span></legend><label for="users_can_register">
<input name="users_can_register" type="checkbox" id="users_can_register" value="1">
	Vem som helst kan registrera sig</label>
</fieldset></td>
</tr>

<tr>
<th scope="row"><label for="default_role">Förvald roll för nya användare</label></th>
<td>
<select name="default_role" id="default_role">
	<option selected="selected" value="subscriber">Prenumerant</option>
	<option value="contributor">Bidragsgivare</option>
	<option value="author">Författare</option>
	<option value="editor">Redaktör</option>
	<option value="administrator">Administratör</option></select>
</td>
</tr>

		<tr>
		<th scope="row"><label for="WPLANG">Webbplatsspråk</label></th>
		<td>
			<select name="WPLANG" id="WPLANG"><option value="" lang="en" data-installed="1">English (United States)</option>
<option value="sv_SE" lang="" selected="selected" data-installed="1">sv_SE</option></select>		</td>
	</tr>
	<tr>
<th scope="row"><label for="timezone_string">Tidszon</label></th>
<td>

<select id="timezone_string" name="timezone_string" aria-describedby="timezone-description">
	<optgroup label="Afrika">
<option value="Africa/Abidjan">Abidjan</option>
<option value="Africa/Accra">Accra</option>
<option value="Africa/Addis_Ababa">Addis Ababa</option>
<option value="Africa/El_Aaiun">Al-Ayun</option>
<option value="Africa/Algiers">Alger</option>
<option value="Africa/Asmara">Asmara</option>
<option value="Africa/Bamako">Bamako</option>
<option value="Africa/Bangui">Bangui</option>
<option value="Africa/Banjul">Banjul</option>
<option value="Africa/Bissau">Bissau</option>
<option value="Africa/Blantyre">Blantyre</option>
<option value="Africa/Brazzaville">Brazzaville</option>
<option value="Africa/Bujumbura">Bujumbura</option>
<option value="Africa/Casablanca">Casablanca</option>
<option value="Africa/Ceuta">Ceuta</option>
<option value="Africa/Dakar">Dakar</option>
<option value="Africa/Dar_es_Salaam">Dar es-Salaam</option>
<option value="Africa/Djibouti">Djibouti</option>
<option value="Africa/Douala">Douala</option>
<option value="Africa/Freetown">Freetown</option>
<option value="Africa/Gaborone">Gaborone</option>
<option value="Africa/Harare">Harare</option>
<option value="Africa/Johannesburg">Johannesburg</option>
<option value="Africa/Juba">Juba</option>
<option value="Africa/Cairo">Kairo</option>
<option value="Africa/Kampala">Kampala</option>
<option value="Africa/Khartoum">Khartoum</option>
<option value="Africa/Kigali">Kigali</option>
<option value="Africa/Kinshasa">Kinshasa</option>
<option value="Africa/Conakry">Konakry</option>
<option value="Africa/Lagos">Lagos</option>
<option value="Africa/Libreville">Libreville</option>
<option value="Africa/Lome">Lomé</option>
<option value="Africa/Luanda">Luanda</option>
<option value="Africa/Lubumbashi">Lubumbashi</option>
<option value="Africa/Lusaka">Lusaka</option>
<option value="Africa/Malabo">Malabo</option>
<option value="Africa/Maputo">Maputo</option>
<option value="Africa/Maseru">Maseru</option>
<option value="Africa/Mbabane">Mbabane</option>
<option value="Africa/Mogadishu">Mogadishu</option>
<option value="Africa/Monrovia">Monrovia</option>
<option value="Africa/Ndjamena">N'Djamena</option>
<option value="Africa/Nairobi">Nairobi</option>
<option value="Africa/Niamey">Niamey</option>
<option value="Africa/Nouakchott">Nouakchott</option>
<option value="Africa/Ouagadougou">Ouagadougou</option>
<option value="Africa/Porto-Novo">Porto-Novo</option>
<option value="Africa/Sao_Tome">São Tomé</option>
<option value="Africa/Tripoli">Tripoli</option>
<option value="Africa/Tunis">Tunis</option>
<option value="Africa/Windhoek">Windhoek</option>
</optgroup>
<optgroup label="Amerika">
<option value="America/Adak">Adak</option>
<option value="America/Anchorage">Anchorage</option>
<option value="America/Anguilla">Anguilla</option>
<option value="America/Antigua">Antigua</option>
<option value="America/Araguaina">Araguaína</option>
<option value="America/Argentina/Buenos_Aires">Argentina - Buenos Aires</option>
<option value="America/Argentina/Catamarca">Argentina - Cajamarca</option>
<option value="America/Argentina/Cordoba">Argentina - Córdoba</option>
<option value="America/Argentina/Jujuy">Argentina - Jujuy</option>
<option value="America/Argentina/La_Rioja">Argentina - La Rioja</option>
<option value="America/Argentina/Mendoza">Argentina - Mendoza</option>
<option value="America/Argentina/Rio_Gallegos">Argentina - Río Gallegos</option>
<option value="America/Argentina/Salta">Argentina - Salta</option>
<option value="America/Argentina/San_Juan">Argentina - San Juan</option>
<option value="America/Argentina/San_Luis">Argentina - San Luis</option>
<option value="America/Argentina/Tucuman">Argentina - Tucumán</option>
<option value="America/Argentina/Ushuaia">Argentina - Ushuaia</option>
<option value="America/Aruba">Aruba</option>
<option value="America/Asuncion">Asunción</option>
<option value="America/Atikokan">Atikokan</option>
<option value="America/Bahia">Bahia</option>
<option value="America/Bahia_Banderas">Bahia Banderas</option>
<option value="America/Barbados">Barbados</option>
<option value="America/Belize">Belize</option>
<option value="America/Belem">Belém</option>
<option value="America/Blanc-Sablon">Blanc-Sablon</option>
<option value="America/Boa_Vista">Boa Vista</option>
<option value="America/Bogota">Bogotá</option>
<option value="America/Boise">Boise</option>
<option value="America/Cambridge_Bay">Cambridge Bay</option>
<option value="America/Campo_Grande">Campo Grande</option>
<option value="America/Cancun">Cancún</option>
<option value="America/Caracas">Caracas</option>
<option value="America/Cayenne">Cayenne</option>
<option value="America/Cayman">Cayman</option>
<option value="America/Chicago">Chicago</option>
<option value="America/Chihuahua">Chihuahua</option>
<option value="America/Costa_Rica">Costa Rica</option>
<option value="America/Creston">Creston</option>
<option value="America/Cuiaba">Cuiabá</option>
<option value="America/Curacao">Curaçao</option>
<option value="America/Danmarkshavn">Danmarkshavn</option>
<option value="America/Dawson">Dawson</option>
<option value="America/Dawson_Creek">Dawson Creek</option>
<option value="America/Denver">Denver</option>
<option value="America/Detroit">Detroit</option>
<option value="America/Dominica">Dominica</option>
<option value="America/Edmonton">Edmonton</option>
<option value="America/Eirunepe">Eirunepe</option>
<option value="America/El_Salvador">El Salvador</option>
<option value="America/Fortaleza">Fortaleza</option>
<option value="America/Fort_Nelson">Fort Nelson</option>
<option value="America/Glace_Bay">Glace Bay</option>
<option value="America/Goose_Bay">Goose Bay</option>
<option value="America/Grand_Turk">Grand Turk</option>
<option value="America/Grenada">Grenada</option>
<option value="America/Guadeloupe">Guadeloupe</option>
<option value="America/Guatemala">Guatemala</option>
<option value="America/Guayaquil">Guayaquil</option>
<option value="America/Guyana">Guyana</option>
<option value="America/Halifax">Halifax</option>
<option value="America/Havana">Havanna</option>
<option value="America/Hermosillo">Hermosillo</option>
<option value="America/Indiana/Indianapolis">Indiana - Indianapolis</option>
<option value="America/Indiana/Knox">Indiana - Knox</option>
<option value="America/Indiana/Marengo">Indiana - Marengo</option>
<option value="America/Indiana/Petersburg">Indiana - Petersburg</option>
<option value="America/Indiana/Tell_City">Indiana - Tell City</option>
<option value="America/Indiana/Vevay">Indiana - Vevay</option>
<option value="America/Indiana/Vincennes">Indiana - Vincennes</option>
<option value="America/Indiana/Winamac">Indiana - Winamac</option>
<option value="America/Inuvik">Inuvik</option>
<option value="America/Iqaluit">Iqaluit</option>
<option value="America/Scoresbysund">Ittoqqortoormiit</option>
<option value="America/Jamaica">Jamaica</option>
<option value="America/Juneau">Juneau</option>
<option value="America/Kentucky/Louisville">Kentucky - Louisville</option>
<option value="America/Kentucky/Monticello">Kentucky - Monticello</option>
<option value="America/Kralendijk">Kralendijk</option>
<option value="America/La_Paz">La Paz</option>
<option value="America/Lima">Lima</option>
<option value="America/Los_Angeles">Los Angeles</option>
<option value="America/Lower_Princes">Lower Princes</option>
<option value="America/Maceio">Maceió</option>
<option value="America/Managua">Managua</option>
<option value="America/Manaus">Manaus</option>
<option value="America/Marigot">Marigot</option>
<option value="America/Martinique">Martinique</option>
<option value="America/Matamoros">Matamoros</option>
<option value="America/Mazatlan">Mazatlán</option>
<option value="America/Menominee">Menominee</option>
<option value="America/Metlakatla">Metlakatla</option>
<option value="America/Mexico_City">Mexico City</option>
<option value="America/Miquelon">Miquelon</option>
<option value="America/Moncton">Moncton</option>
<option value="America/Monterrey">Monterrey</option>
<option value="America/Montevideo">Montevideo</option>
<option value="America/Montserrat">Montserrat</option>
<option value="America/Merida">Mérida</option>
<option value="America/Nassau">Nassau</option>
<option value="America/New_York">New York</option>
<option value="America/Nipigon">Nipigon</option>
<option value="America/Nome">Nome</option>
<option value="America/Noronha">Noronha</option>
<option value="America/North_Dakota/Beulah">North Dakota - Beulah</option>
<option value="America/North_Dakota/Center">North Dakota - Center</option>
<option value="America/North_Dakota/New_Salem">North Dakota - New Salem</option>
<option value="America/Godthab">Nuuk</option>
<option value="America/Ojinaga">Ojinaga</option>
<option value="America/Panama">Panama</option>
<option value="America/Pangnirtung">Pangnirtung</option>
<option value="America/Paramaribo">Paramaribo</option>
<option value="America/Phoenix">Phoenix</option>
<option value="America/Port-au-Prince">Port-au-Prince</option>
<option value="America/Port_of_Spain">Port of Spain</option>
<option value="America/Porto_Velho">Porto Velho</option>
<option value="America/Puerto_Rico">Puerto Rico</option>
<option value="America/Punta_Arenas">Punta Arenas</option>
<option value="America/Thule">Qaanaaq</option>
<option value="America/Rainy_River">Rainy River</option>
<option value="America/Rankin_Inlet">Rankin Inlet</option>
<option value="America/Recife">Recife</option>
<option value="America/Regina">Regina</option>
<option value="America/Resolute">Resolute</option>
<option value="America/Rio_Branco">Rio Branco</option>
<option value="America/St_Barthelemy">Saint-Barthélemy</option>
<option value="America/St_Johns">Saint Johns</option>
<option value="America/St_Kitts">Saint Kitts</option>
<option value="America/St_Lucia">Saint Lucia</option>
<option value="America/St_Thomas">Saint Thomas</option>
<option value="America/St_Vincent">Saint Vincent</option>
<option value="America/Santarem">Santarém</option>
<option value="America/Santiago">Santiago</option>
<option value="America/Santo_Domingo">Santo Domingo</option>
<option value="America/Sitka">Sitka</option>
<option value="America/Swift_Current">Swift Current</option>
<option value="America/Sao_Paulo">São Paulo</option>
<option value="America/Tegucigalpa">Tegucigalpa</option>
<option value="America/Thunder_Bay">Thunder Bay</option>
<option value="America/Tijuana">Tijuana</option>
<option value="America/Toronto">Toronto</option>
<option value="America/Tortola">Tortola</option>
<option value="America/Vancouver">Vancouver</option>
<option value="America/Whitehorse">Whitehorse</option>
<option value="America/Winnipeg">Winnipeg</option>
<option value="America/Yakutat">Yakutat</option>
<option value="America/Yellowknife">Yellowknife</option>
</optgroup>
<optgroup label="Antarktis">
<option value="Antarctica/Casey">Casey</option>
<option value="Antarctica/Davis">Davis</option>
<option value="Antarctica/DumontDUrville">Dumont d'Urville</option>
<option value="Antarctica/Macquarie">Macquarie</option>
<option value="Antarctica/Mawson">Mawson</option>
<option value="Antarctica/McMurdo">McMurdo</option>
<option value="Antarctica/Palmer">Palmer</option>
<option value="Antarctica/Rothera">Rothera</option>
<option value="Antarctica/Syowa">Syowa</option>
<option value="Antarctica/Troll">Troll</option>
<option value="Antarctica/Vostok">Vostok</option>
</optgroup>
<optgroup label="Arktis">
<option value="Arctic/Longyearbyen">Longyearbyen</option>
</optgroup>
<optgroup label="Asien">
<option value="Asia/Aden">Aden</option>
<option value="Asia/Almaty">Almaty</option>
<option value="Asia/Amman">Amman</option>
<option value="Asia/Anadyr">Anadyr</option>
<option value="Asia/Aqtau">Aqtau</option>
<option value="Asia/Aqtobe">Aqtöbe</option>
<option value="Asia/Ashgabat">Asjchabad</option>
<option value="Asia/Atyrau">Atyrau</option>
<option value="Asia/Baghdad">Bagdad</option>
<option value="Asia/Bahrain">Bahrain</option>
<option value="Asia/Baku">Baku</option>
<option value="Asia/Bangkok">Bangkok</option>
<option value="Asia/Barnaul">Barnaul</option>
<option value="Asia/Beirut">Beirut</option>
<option value="Asia/Bishkek">Bisjkek</option>
<option value="Asia/Brunei">Brunei</option>
<option value="Asia/Kolkata">Calcutta</option>
<option value="Asia/Chita">Chita</option>
<option value="Asia/Hovd">Chovd</option>
<option value="Asia/Colombo">Colombo</option>
<option value="Asia/Damascus">Damaskus</option>
<option value="Asia/Dhaka">Dhaka</option>
<option value="Asia/Dili">Dili</option>
<option value="Asia/Dubai">Dubai</option>
<option value="Asia/Dushanbe">Dusjanbe</option>
<option value="Asia/Famagusta">Famagusta</option>
<option value="Asia/Gaza">Gaza</option>
<option value="Asia/Hebron">Hebron</option>
<option value="Asia/Ho_Chi_Minh">Ho Chi Minh</option>
<option value="Asia/Hong_Kong">Hong Kong</option>
<option value="Asia/Irkutsk">Irkutsk</option>
<option value="Asia/Jakarta">Jakarta</option>
<option value="Asia/Yakutsk">Jakutsk</option>
<option value="Asia/Jayapura">Jayapura</option>
<option value="Asia/Yekaterinburg">Jekaterinburg</option>
<option value="Asia/Yerevan">Jerevan</option>
<option value="Asia/Jerusalem">Jerusalem</option>
<option value="Asia/Kabul">Kabul</option>
<option value="Asia/Kamchatka">Kamtjatka</option>
<option value="Asia/Karachi">Karachi</option>
<option value="Asia/Kathmandu">Katmandu</option>
<option value="Asia/Khandyga">Khandyga</option>
<option value="Asia/Krasnoyarsk">Krasnojarsk</option>
<option value="Asia/Kuala_Lumpur">Kuala Lumpur</option>
<option value="Asia/Kuching">Kuching</option>
<option value="Asia/Kuwait">Kuwait</option>
<option value="Asia/Macau">Macau</option>
<option value="Asia/Magadan">Magadan</option>
<option value="Asia/Makassar">Makassar</option>
<option value="Asia/Manila">Manila</option>
<option value="Asia/Muscat">Muscat</option>
<option value="Asia/Nicosia">Nicosia</option>
<option value="Asia/Novokuznetsk">Novokuznetsk</option>
<option value="Asia/Novosibirsk">Novosibirsk</option>
<option value="Asia/Omsk">Omsk</option>
<option value="Asia/Oral">Oral</option>
<option value="Asia/Phnom_Penh">Phnom Penh</option>
<option value="Asia/Pontianak">Pontianak</option>
<option value="Asia/Pyongyang">Pyongyang</option>
<option value="Asia/Qatar">Qatar</option>
<option value="Asia/Qostanay">Qostanay</option>
<option value="Asia/Qyzylorda">Qyzylorda</option>
<option value="Asia/Riyadh">Riyadh</option>
<option value="Asia/Sakhalin">Sachalin</option>
<option value="Asia/Samarkand">Samarkand</option>
<option value="Asia/Seoul">Seoul</option>
<option value="Asia/Shanghai">Shanghai</option>
<option value="Asia/Singapore">Singapore</option>
<option value="Asia/Srednekolymsk">Srednekolymsk</option>
<option value="Asia/Taipei">Taipei</option>
<option value="Asia/Tashkent">Tasjkent</option>
<option value="Asia/Tbilisi">Tbilisi</option>
<option value="Asia/Tehran">Teheran</option>
<option value="Asia/Thimphu">Thimphu</option>
<option value="Asia/Choibalsan">Tjojbalsan</option>
<option value="Asia/Tokyo">Tokyo</option>
<option value="Asia/Tomsk">Tomsk</option>
<option value="Asia/Ulaanbaatar">Ulaanbaatar</option>
<option value="Asia/Ust-Nera">Ust-Nera</option>
<option value="Asia/Vientiane">Vientiane</option>
<option value="Asia/Vladivostok">Vladivostok</option>
<option value="Asia/Yangon">Yangon</option>
<option value="Asia/Urumqi">Ürümqi</option>
</optgroup>
<optgroup label="Atlanten">
<option value="Atlantic/Azores">Azorerna</option>
<option value="Atlantic/Bermuda">Bermuda</option>
<option value="Atlantic/Canary">Canary</option>
<option value="Atlantic/Faroe">Färöarna</option>
<option value="Atlantic/Cape_Verde">Kap Verde</option>
<option value="Atlantic/Madeira">Madeira</option>
<option value="Atlantic/Reykjavik">Reykjavik</option>
<option value="Atlantic/St_Helena">Sankta Helena</option>
<option value="Atlantic/Stanley">Stanley</option>
<option value="Atlantic/South_Georgia">Sydgeorgien</option>
</optgroup>
<optgroup label="Australien">
<option value="Australia/Adelaide">Adelaide</option>
<option value="Australia/Brisbane">Brisbane</option>
<option value="Australia/Broken_Hill">Broken Hill</option>
<option value="Australia/Currie">Currie</option>
<option value="Australia/Darwin">Darwin</option>
<option value="Australia/Eucla">Eucla</option>
<option value="Australia/Hobart">Hobart</option>
<option value="Australia/Lindeman">Lindeman</option>
<option value="Australia/Lord_Howe">Lord Howe</option>
<option value="Australia/Melbourne">Melbourne</option>
<option value="Australia/Perth">Perth</option>
<option value="Australia/Sydney">Sydney</option>
</optgroup>
<optgroup label="Europa">
<option value="Europe/Amsterdam">Amsterdam</option>
<option value="Europe/Andorra">Andorra</option>
<option value="Europe/Astrakhan">Astrachan</option>
<option value="Europe/Athens">Aten</option>
<option value="Europe/Belgrade">Belgrad</option>
<option value="Europe/Berlin">Berlin</option>
<option value="Europe/Bratislava">Bratislava</option>
<option value="Europe/Brussels">Bryssel</option>
<option value="Europe/Budapest">Budapest</option>
<option value="Europe/Bucharest">Bukarest</option>
<option value="Europe/Busingen">Busingen</option>
<option value="Europe/Chisinau">Chişinău</option>
<option value="Europe/Dublin">Dublin</option>
<option value="Europe/Gibraltar">Gibraltar</option>
<option value="Europe/Guernsey">Guernsey</option>
<option value="Europe/Helsinki">Helsingfors</option>
<option value="Europe/Isle_of_Man">Isle of Man</option>
<option value="Europe/Istanbul">Istanbul</option>
<option value="Europe/Jersey">Jersey</option>
<option value="Europe/Kaliningrad">Kaliningrad</option>
<option value="Europe/Kiev">Kiev</option>
<option value="Europe/Kirov">Kirov</option>
<option value="Europe/Copenhagen">Köpenhamn</option>
<option value="Europe/Lisbon">Lissabon</option>
<option value="Europe/Ljubljana">Ljubljana</option>
<option value="Europe/London">London</option>
<option value="Europe/Luxembourg">Luxemburg</option>
<option value="Europe/Madrid">Madrid</option>
<option value="Europe/Malta">Malta</option>
<option value="Europe/Mariehamn">Mariehamn</option>
<option value="Europe/Minsk">Minsk</option>
<option value="Europe/Monaco">Monaco</option>
<option value="Europe/Moscow">Moskva</option>
<option value="Europe/Oslo">Oslo</option>
<option value="Europe/Paris">Paris</option>
<option value="Europe/Podgorica">Podgorica</option>
<option value="Europe/Prague">Prag</option>
<option value="Europe/Riga">Riga</option>
<option value="Europe/Rome">Rom</option>
<option value="Europe/Samara">Samara</option>
<option value="Europe/San_Marino">San Marino</option>
<option value="Europe/Sarajevo">Sarajevo</option>
<option value="Europe/Saratov">Saratov</option>
<option value="Europe/Simferopol">Simferopol</option>
<option value="Europe/Skopje">Skopje</option>
<option value="Europe/Sofia">Sofia</option>
<option selected="selected" value="Europe/Stockholm">Stockholm</option>
<option value="Europe/Tallinn">Tallinn</option>
<option value="Europe/Tirane">Tirana</option>
<option value="Europe/Ulyanovsk">Ulyanovsk</option>
<option value="Europe/Uzhgorod">Uzjhorod</option>
<option value="Europe/Vaduz">Vaduz</option>
<option value="Europe/Vatican">Vatikanstaten</option>
<option value="Europe/Vilnius">Vilnius</option>
<option value="Europe/Volgograd">Volgograd</option>
<option value="Europe/Warsaw">Warszawa</option>
<option value="Europe/Vienna">Wien</option>
<option value="Europe/Zagreb">Zagreb</option>
<option value="Europe/Zaporozhye">Zaporizjzja</option>
<option value="Europe/Zurich">Zürich</option>
</optgroup>
<optgroup label="Indiska oceanen">
<option value="Indian/Antananarivo">Antananarivo</option>
<option value="Indian/Chagos">Chagosöarna</option>
<option value="Indian/Kerguelen">Kerguelen</option>
<option value="Indian/Christmas">Kiritimati</option>
<option value="Indian/Cocos">Kokosöarna</option>
<option value="Indian/Comoro">Komorerna</option>
<option value="Indian/Mahe">Mahé</option>
<option value="Indian/Maldives">Maldiverna</option>
<option value="Indian/Mauritius">Mauritius</option>
<option value="Indian/Mayotte">Mayotte</option>
<option value="Indian/Reunion">Réunion</option>
</optgroup>
<optgroup label="Stilla havet">
<option value="Pacific/Apia">Apia</option>
<option value="Pacific/Auckland">Auckland</option>
<option value="Pacific/Bougainville">Bougainville</option>
<option value="Pacific/Chatham">Chatham</option>
<option value="Pacific/Chuuk">Chuuk</option>
<option value="Pacific/Efate">Efate</option>
<option value="Pacific/Enderbury">Enderburyatollen</option>
<option value="Pacific/Fakaofo">Fakaofo</option>
<option value="Pacific/Fiji">Fiji</option>
<option value="Pacific/Funafuti">Funafuti</option>
<option value="Pacific/Galapagos">Galapagosöarna</option>
<option value="Pacific/Gambier">Gambieröarna</option>
<option value="Pacific/Guadalcanal">Guadalcanal</option>
<option value="Pacific/Guam">Guam</option>
<option value="Pacific/Honolulu">Honolulu</option>
<option value="Pacific/Kiritimati">Kiritimati</option>
<option value="Pacific/Kosrae">Kosraeöarna</option>
<option value="Pacific/Kwajalein">Kwajalein</option>
<option value="Pacific/Majuro">Majuro</option>
<option value="Pacific/Marquesas">Marquesasöarna</option>
<option value="Pacific/Midway">Midwayöarna</option>
<option value="Pacific/Nauru">Nauru</option>
<option value="Pacific/Niue">Niue</option>
<option value="Pacific/Norfolk">Norfolk</option>
<option value="Pacific/Noumea">Nouméa</option>
<option value="Pacific/Pago_Pago">Pago Pago</option>
<option value="Pacific/Palau">Palau</option>
<option value="Pacific/Pitcairn">Pitcairnöarna</option>
<option value="Pacific/Pohnpei">Pohnpei</option>
<option value="Pacific/Port_Moresby">Port Moresby</option>
<option value="Pacific/Easter">Påsköarna</option>
<option value="Pacific/Rarotonga">Rarotonga</option>
<option value="Pacific/Saipan">Saipan</option>
<option value="Pacific/Tahiti">Tahiti</option>
<option value="Pacific/Tarawa">Tarawa</option>
<option value="Pacific/Tongatapu">Tongatapu</option>
<option value="Pacific/Wake">Wakeöarna</option>
<option value="Pacific/Wallis">Wallisön</option>
</optgroup>
<optgroup label="UTC">
<option value="UTC">UTC</option>
</optgroup>
<optgroup label="Manuella förskjutningar">
<option value="UTC-12">UTC-12</option>
<option value="UTC-11.5">UTC-11:30</option>
<option value="UTC-11">UTC-11</option>
<option value="UTC-10.5">UTC-10:30</option>
<option value="UTC-10">UTC-10</option>
<option value="UTC-9.5">UTC-9:30</option>
<option value="UTC-9">UTC-9</option>
<option value="UTC-8.5">UTC-8:30</option>
<option value="UTC-8">UTC-8</option>
<option value="UTC-7.5">UTC-7:30</option>
<option value="UTC-7">UTC-7</option>
<option value="UTC-6.5">UTC-6:30</option>
<option value="UTC-6">UTC-6</option>
<option value="UTC-5.5">UTC-5:30</option>
<option value="UTC-5">UTC-5</option>
<option value="UTC-4.5">UTC-4:30</option>
<option value="UTC-4">UTC-4</option>
<option value="UTC-3.5">UTC-3:30</option>
<option value="UTC-3">UTC-3</option>
<option value="UTC-2.5">UTC-2:30</option>
<option value="UTC-2">UTC-2</option>
<option value="UTC-1.5">UTC-1:30</option>
<option value="UTC-1">UTC-1</option>
<option value="UTC-0.5">UTC-0:30</option>
<option value="UTC+0">UTC+0</option>
<option value="UTC+0.5">UTC+0:30</option>
<option value="UTC+1">UTC+1</option>
<option value="UTC+1.5">UTC+1:30</option>
<option value="UTC+2">UTC+2</option>
<option value="UTC+2.5">UTC+2:30</option>
<option value="UTC+3">UTC+3</option>
<option value="UTC+3.5">UTC+3:30</option>
<option value="UTC+4">UTC+4</option>
<option value="UTC+4.5">UTC+4:30</option>
<option value="UTC+5">UTC+5</option>
<option value="UTC+5.5">UTC+5:30</option>
<option value="UTC+5.75">UTC+5:45</option>
<option value="UTC+6">UTC+6</option>
<option value="UTC+6.5">UTC+6:30</option>
<option value="UTC+7">UTC+7</option>
<option value="UTC+7.5">UTC+7:30</option>
<option value="UTC+8">UTC+8</option>
<option value="UTC+8.5">UTC+8:30</option>
<option value="UTC+8.75">UTC+8:45</option>
<option value="UTC+9">UTC+9</option>
<option value="UTC+9.5">UTC+9:30</option>
<option value="UTC+10">UTC+10</option>
<option value="UTC+10.5">UTC+10:30</option>
<option value="UTC+11">UTC+11</option>
<option value="UTC+11.5">UTC+11:30</option>
<option value="UTC+12">UTC+12</option>
<option value="UTC+12.75">UTC+12:45</option>
<option value="UTC+13">UTC+13</option>
<option value="UTC+13.75">UTC+13:45</option>
<option value="UTC+14">UTC+14</option>
</optgroup></select>

<p class="description" id="timezone-description">Välj en stad i samma tidszon som du, alternativt valfri tidsskillnad från UTC (GMT).</p>

<p class="timezone-info">
	<span id="utc-time">
	Universal tid (<abbr>UTC</abbr>) är <code>2019-10-30 19:25:04</code>.	</span>
	<span id="local-time">
	Lokal tid är <code>2019-10-30 20:25:04</code>.	</span>
</p>

<p class="timezone-info">
<span>
	Denna tidszon är för närvarande i standardtid.	<br>
	 Sommartiden startar: <code>29 mars, 2020 01:00</code>.	</span>
</p>
</td>

</tr>
<tr>
<th scope="row">Datumformat</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Datumformat</span></legend>
	<label><input type="radio" name="date_format" value="j F, Y" checked="checked"> <span class="date-time-text format-i18n">30 oktober, 2019</span><code>j F, Y</code></label><br>
	<label><input type="radio" name="date_format" value="Y-m-d"> <span class="date-time-text format-i18n">2019-10-30</span><code>Y-m-d</code></label><br>
	<label><input type="radio" name="date_format" value="m/d/Y"> <span class="date-time-text format-i18n">10/30/2019</span><code>m/d/Y</code></label><br>
	<label><input type="radio" name="date_format" value="d/m/Y"> <span class="date-time-text format-i18n">30/10/2019</span><code>d/m/Y</code></label><br>
<label><input type="radio" name="date_format" id="date_format_custom_radio" value="\c\u\s\t\o\m"> <span class="date-time-text date-time-custom-text">Anpassad:<span class="screen-reader-text"> ange ett anpassat datumformat i följande fält</span></span></label><label for="date_format_custom" class="screen-reader-text">Anpassat datumformat:</label><input type="text" name="date_format_custom" id="date_format_custom" value="j F, Y" class="small-text"><br><p><strong>Förhandsgranska:</strong> <span class="example">30 oktober, 2019</span><span class="spinner"></span>
</p>	</fieldset>
</td>
</tr>
<tr>
<th scope="row">Tidsformat</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Tidsformat</span></legend>
	<label><input type="radio" name="time_format" value="H:i" checked="checked"> <span class="date-time-text format-i18n">20:25</span><code>H:i</code></label><br>
	<label><input type="radio" name="time_format" value="g:i A"> <span class="date-time-text format-i18n">8:25 e m</span><code>g:i A</code></label><br>
<label><input type="radio" name="time_format" id="time_format_custom_radio" value="\c\u\s\t\o\m"> <span class="date-time-text date-time-custom-text">Anpassad:<span class="screen-reader-text"> ange ett anpassat tidsformat i följande fält</span></span></label><label for="time_format_custom" class="screen-reader-text">Anpassat tidsformat:</label><input type="text" name="time_format_custom" id="time_format_custom" value="H:i" class="small-text"><br><p><strong>Förhandsgranska:</strong> <span class="example">20:25</span><span class="spinner"></span>
</p>	<p class="date-time-doc"><a href="https://codex.wordpress.org/Formatting_Date_and_Time">Dokumentation för hur man formaterar datum och tid </a>.</p>
	</fieldset>
</td>
</tr>
<tr>
<th scope="row"><label for="start_of_week">Veckan startar med</label></th>
<td><select name="start_of_week" id="start_of_week">

	<option value="0">söndag</option>
	<option value="1" selected="selected">måndag</option>
	<option value="2">tisdag</option>
	<option value="3">onsdag</option>
	<option value="4">torsdag</option>
	<option value="5">fredag</option>
	<option value="6">lördag</option></select></td>
</tr>
</tbody></table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Spara ändringar"></p></form>

</div>


<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div>
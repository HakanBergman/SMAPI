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
							
							<li id="tab-link-managing-pages">
								<a href="#tab-panel-managing-pages" aria-controls="tab-panel-managing-pages">
									Hantera sidor								</a>
							</li>
													</ul>
					</div>

										<div class="contextual-help-sidebar">
						<p><strong>För mer information:</strong></p><p><a href="https://codex.wordpress.org/Pages_Screen">Dokumentation för hantering av sidor</a></p><p><a href="https://sv.wordpress.org/support/">Support</a></p>					</div>
					
					<div class="contextual-help-tabs-wrap">
						
							<div id="tab-panel-overview" class="help-tab-content active">
								<p>Sidor liknar inlägg i att de har en titel, brödtext och tillhörande metadata, men de är olika i att de inte är en del av den kronologiska bloggflödet, ungefär som statiska inlägg. Sidorna är inte kategoriserade eller har taggar, men kan anges i hierarki. Du kan kapsla sidor under andra sidor genom att göra en till "Överordnad" för de andra och på så sätt skapa en grupp av sidor.</p>							</div>
							
							<div id="tab-panel-managing-pages" class="help-tab-content">
								<p>Hantering av sidor är väldigt lik hanteringen av inlägg och sidorna kan anpassas på samma sätt.</p><p>Du kan också utföra samma typer av åtgärder, däribland filtrera i listan med hjälp av filter, agera på en sida med de åtgärdslänkar som visas när du för muspekaren över en rad eller genom att använda massredigeringsmenyn för att redigera metadata för flera sidor på en gång.</p>							</div>
												</div>
				</div>
			</div>
		<div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="Panelinställningar">
<form id="adv-settings" method="post">
		<fieldset class="metabox-prefs">
		<legend>Kolumner</legend>
		<label><input class="hide-column-tog" name="author-hide" type="checkbox" id="author-hide" value="author" checked="checked">Författare</label>
<label><input class="hide-column-tog" name="comments-hide" type="checkbox" id="comments-hide" value="comments" checked="checked">Kommentarer</label>
<label><input class="hide-column-tog" name="date-hide" type="checkbox" id="date-hide" value="date" checked="checked">Datum</label>
		</fieldset>
				<fieldset class="screen-options">
		<legend>Sidindelning</legend>
							<label for="edit_page_per_page">Antal poster per sida:</label>
				<input type="number" step="1" min="1" max="999" class="screen-per-page" name="wp_screen_options[value]" id="edit_page_per_page" maxlength="3" value="20">
							<input type="hidden" name="wp_screen_options[option]" value="edit_page_per_page">
		</fieldset>
		<p class="submit"><input type="submit" name="screen-options-apply" id="screen-options-apply" class="button button-primary" value="Verkställ"></p>
<input type="hidden" id="screenoptionnonce" name="screenoptionnonce" value="0202433299">
</form>
</div>		</div>
				<div id="screen-meta-links">
					<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false">Skärmalternativ</button>
			</div>
						<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle">
			<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false">Hjälp</button>
			</div>
				</div>
		<div class="wrap">
<h1 class="wp-heading-inline">
Sidor</h1>

 <a href="https://testwp.datadelenhc.se/wp-admin/post-new.php?post_type=page" class="page-title-action">Skapa ny</a>
<hr class="wp-header-end">


<h2 class="screen-reader-text">Filtrera sidlista</h2><ul class="subsubsub">
	<li class="all"><a href="edit.php?post_type=page" class="current" aria-current="page">Alla <span class="count">(2)</span></a> |</li>
	<li class="publish"><a href="edit.php?post_status=publish&amp;post_type=page">Publicerad <span class="count">(1)</span></a> |</li>
	<li class="draft"><a href="edit.php?post_status=draft&amp;post_type=page">Utkast <span class="count">(1)</span></a></li>
</ul>
<form id="posts-filter" method="get">

<p class="search-box">
	<label class="screen-reader-text" for="post-search-input">Sök sidor:</label>
	<input type="search" id="post-search-input" name="s" value="">
		<input type="submit" id="search-submit" class="button" value="Sök sidor"></p>
		
<input type="hidden" name="post_status" class="post_status_page" value="all">
<input type="hidden" name="post_type" class="post_type_page" value="page">



<input type="hidden" id="_wpnonce" name="_wpnonce" value="d7c95f515b"><input type="hidden" name="_wp_http_referer" value="/wp-admin/edit.php?post_type=page">	<div class="tablenav top">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-top" class="screen-reader-text">Välj massåtgärd</label><select name="action" id="bulk-action-selector-top">
<option value="-1">Massåtgärder</option>
	<option value="edit" class="hide-if-no-js">Redigera</option>
	<option value="trash">Lägg i papperskorgen</option>
</select>
<input type="submit" id="doaction" class="button action" value="Verkställ">
		</div>
					<div class="alignleft actions">
				<label for="filter-by-date" class="screen-reader-text">Filtrera efter datum</label>
		<select name="m" id="filter-by-date">
			<option selected="selected" value="0">Alla datum</option>
		<option value="201910">oktober 2019</option>
		</select>
		<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filtrera">		</div>
		<div class="tablenav-pages one-page"><span class="displaying-num">2 objekt</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Nuvarande sida</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> av <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		<h2 class="screen-reader-text">Sidlista</h2><table class="wp-list-table widefat fixed striped pages">
	<thead>
	<tr>
		<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Välj alla</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Rubrik</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author">Författare</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Kommentarer"><span class="screen-reader-text">Kommentarer</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Datum</span><span class="sorting-indicator"></span></a></th>	</tr>
	</thead>

	<tbody id="the-list">
					<tr id="post-2" class="iedit author-self level-0 post-2 type-page status-publish hentry entry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-2">
																				Välj Exempelsida			</label>
			<input id="cb-select-2" type="checkbox" name="post[]" value="2">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				”Exempelsida” är låst				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Rubrik"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="https://testwp.datadelenhc.se/wp-admin/post.php?post=2&amp;action=edit" aria-label="”Exempelsida” (Redigera)">Exempelsida</a></strong>

<div class="hidden" id="inline_2">
	<div class="post_title">Exempelsida</div><div class="post_name">exempelsida</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">07</div>
	<div class="mm">10</div>
	<div class="aa">2019</div>
	<div class="hh">15</div>
	<div class="mn">34</div>
	<div class="ss">43</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">default</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="https://testwp.datadelenhc.se/wp-admin/post.php?post=2&amp;action=edit" aria-label="Redigera ”Exempelsida”">Redigera</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Snabbredigera ”Exempelsida” direkt" aria-expanded="false">Snabbredigera</button> | </span><span class="trash"><a href="https://testwp.datadelenhc.se/wp-admin/post.php?post=2&amp;action=trash&amp;_wpnonce=160247413a" class="submitdelete" aria-label="Flytta ”Exempelsida” till papperskorgen">Kasta i papperskorgen</a> | </span><span class="view"><a href="https://testwp.datadelenhc.se/exempelsida/" rel="bookmark" aria-label="Visa ”Exempelsida”">Visa</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Visa fler detaljer</span></button></td><td class="author column-author" data-colname="Författare"><a href="edit.php?post_type=page&amp;author=1">hakan.bergman@datadelenhc.se</a></td><td class="comments column-comments" data-colname="Kommentarer">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">Inga kommentarer</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Inga kommentarer</span></span>		</div>
		</td><td class="date column-date" data-colname="Datum">Publicerat<br><abbr title="2019-10-07 15:34:43">2019-10-07</abbr></td>		</tr>
					<tr id="post-3" class="iedit author-self level-0 post-3 type-page status-draft hentry entry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-3">
																				Välj Integritetspolicy			</label>
			<input id="cb-select-3" type="checkbox" name="post[]" value="3">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				”Integritetspolicy” är låst				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Rubrik"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="https://testwp.datadelenhc.se/wp-admin/post.php?post=3&amp;action=edit" aria-label="”Integritetspolicy” (Redigera)">Integritetspolicy</a> — <span class="post-state">Utkast, </span><span class="post-state">Integritetspolicysida</span></strong>

<div class="hidden" id="inline_3">
	<div class="post_title">Integritetspolicy</div><div class="post_name">Integritetspolicy</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">open</div>
	<div class="_status">draft</div>
	<div class="jj">07</div>
	<div class="mm">10</div>
	<div class="aa">2019</div>
	<div class="hh">15</div>
	<div class="mn">34</div>
	<div class="ss">43</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">default</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="https://testwp.datadelenhc.se/wp-admin/post.php?post=3&amp;action=edit" aria-label="Redigera ”Integritetspolicy”">Redigera</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Snabbredigera ”Integritetspolicy” direkt" aria-expanded="false">Snabbredigera</button> | </span><span class="trash"><a href="https://testwp.datadelenhc.se/wp-admin/post.php?post=3&amp;action=trash&amp;_wpnonce=e0e4515093" class="submitdelete" aria-label="Flytta ”Integritetspolicy” till papperskorgen">Kasta i papperskorgen</a> | </span><span class="view"><a href="https://testwp.datadelenhc.se/?page_id=3&amp;preview=true" rel="bookmark" aria-label="Förhandsgranska ”Integritetspolicy”">Förhandsgranska</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Visa fler detaljer</span></button></td><td class="author column-author" data-colname="Författare"><a href="edit.php?post_type=page&amp;author=1">hakan.bergman@datadelenhc.se</a></td><td class="comments column-comments" data-colname="Kommentarer">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">Inga kommentarer</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Inga kommentarer</span></span>		</div>
		</td><td class="date column-date" data-colname="Datum">Senast modifierat<br><abbr title="2019-10-07 15:34:43">2019-10-07</abbr></td>		</tr>
			</tbody>

	<tfoot>
	<tr>
		<td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Välj alla</label><input id="cb-select-all-2" type="checkbox"></td><th scope="col" class="manage-column column-title column-primary sortable desc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Rubrik</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-author">Författare</th><th scope="col" class="manage-column column-comments num sortable desc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Kommentarer"><span class="screen-reader-text">Kommentarer</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-date sortable asc"><a href="https://testwp.datadelenhc.se/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Datum</span><span class="sorting-indicator"></span></a></th>	</tr>
	</tfoot>

</table>
			<div class="tablenav bottom">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-bottom" class="screen-reader-text">Välj massåtgärd</label><select name="action2" id="bulk-action-selector-bottom">
<option value="-1">Massåtgärder</option>
	<option value="edit" class="hide-if-no-js">Redigera</option>
	<option value="trash">Lägg i papperskorgen</option>
</select>
<input type="submit" id="doaction2" class="button action" value="Verkställ">
		</div>
					<div class="alignleft actions">
				</div>
		<div class="tablenav-pages one-page"><span class="displaying-num">2 objekt</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="screen-reader-text">Nuvarande sida</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 av <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		
</form>


	<form method="get"><table style="display: none"><tbody id="inlineedit">
		
		<tr id="inline-edit" class="
							inline-edit-row inline-edit-row-page quick-edit-row quick-edit-row-page inline-edit-page		" style="display: none"><td colspan="5" class="colspanchange">

		<fieldset class="inline-edit-col-left">
			<legend class="inline-edit-legend">Snabbredigera</legend>
			<div class="inline-edit-col">
			
			<label>
				<span class="title">Rubrik</span>
				<span class="input-text-wrap"><input type="text" name="post_title" class="ptitle" value=""></span>
			</label>

				
			<label>
				<span class="title">Slug</span>
				<span class="input-text-wrap"><input type="text" name="post_name" value=""></span>
			</label>

					
						<fieldset class="inline-edit-date">
			<legend><span class="title">Datum</span></legend>
				<div class="timestamp-wrap"><label><span class="screen-reader-text">Månad</span><select name="mm">
			<option value="01" data-text="jan">01-jan</option>
			<option value="02" data-text="feb">02-feb</option>
			<option value="03" data-text="mar">03-mar</option>
			<option value="04" data-text="apr">04-apr</option>
			<option value="05" data-text="maj">05-maj</option>
			<option value="06" data-text="jun">06-jun</option>
			<option value="07" data-text="jul">07-jul</option>
			<option value="08" data-text="aug">08-aug</option>
			<option value="09" data-text="sep">09-sep</option>
			<option value="10" data-text="okt" selected="selected">10-okt</option>
			<option value="11" data-text="nov">11-nov</option>
			<option value="12" data-text="dec">12-dec</option>
</select></label> <label><span class="screen-reader-text">Dag</span><input type="text" name="jj" value="07" size="2" maxlength="2" autocomplete="off"></label>, <label><span class="screen-reader-text">År</span><input type="text" name="aa" value="2019" size="4" maxlength="4" autocomplete="off"></label> @ <label><span class="screen-reader-text">Timme</span><input type="text" name="hh" value="15" size="2" maxlength="2" autocomplete="off"></label>:<label><span class="screen-reader-text">Minut</span><input type="text" name="mn" value="34" size="2" maxlength="2" autocomplete="off"></label></div><input type="hidden" id="ss" name="ss" value="43">			</fieldset>
			<br class="clear">
				
				<label class="inline-edit-author"><span class="title">Författare</span><select name="post_author" class="authors">
	<option value="1">hakan.bergman@datadelenhc.se (hakan.bergman@datadelenhc.se)</option>
</select></label>
		<div class="inline-edit-group wp-clearfix">
			<label class="alignleft">
				<span class="title">Lösenord</span>
				<span class="input-text-wrap"><input type="text" name="post_password" class="inline-edit-password-input" value=""></span>
			</label>

			<em class="alignleft inline-edit-or">
				—ELLER—				</em>
				<label class="alignleft inline-edit-private">
				<input type="checkbox" name="keep_private" value="private">
				<span class="checkbox-title">Privat</span>
				</label>
			</div>

				
		</div></fieldset>

			
		<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

					<label>
			<span class="title">Överordnad</span>
					<select name="post_parent" id="post_parent">
	<option value="0">Huvudsida (utan överordnad)</option>
	<option class="level-0" value="2">Exempelsida</option>
</select>
		</label>

					
			<label>
				<span class="title">Ordning</span>
				<span class="input-text-wrap"><input type="text" name="menu_order" class="inline-edit-menu-order-input" value="0"></span>
			</label>

					
			
			
			
			<div class="inline-edit-group wp-clearfix">
								<label class="alignleft">
					<input type="checkbox" name="comment_status" value="open">
					<span class="checkbox-title">Tillåt kommentarer</span>
				</label>
						</div>

				
			<div class="inline-edit-group wp-clearfix">
				<label class="inline-edit-status alignleft">
					<span class="title">Status</span>
					<select name="_status">
														<option value="publish">Publicerat</option>
						<option value="future">Schemalagd</option>
																	<option value="pending">Väntar på granskning</option>
						<option value="draft">Utkast</option>
					</select>
				</label>

			
			</div>

			
		</div></fieldset>

					<div class="submit inline-edit-save">
			<button type="button" class="button cancel alignleft">Avbryt</button>
			<input type="hidden" id="_inline_edit" name="_inline_edit" value="3222bac2eb">				<button type="button" class="button button-primary save alignright">Uppdatera</button>
				<span class="spinner"></span>
							<input type="hidden" name="post_view" value="list">
			<input type="hidden" name="screen" value="edit-page">
						<br class="clear">
			<div class="notice notice-error notice-alt inline hidden">
				<p class="error"></p>
			</div>
		</div>
		</td></tr>
			
		<tr id="bulk-edit" class="
							inline-edit-row inline-edit-row-page bulk-edit-row bulk-edit-row-page bulk-edit-page		" style="display: none"><td colspan="5" class="colspanchange">

		<fieldset class="inline-edit-col-left">
			<legend class="inline-edit-legend">Massredigera</legend>
			<div class="inline-edit-col">
						<div id="bulk-title-div">
				<div id="bulk-titles"></div>
			</div>

			
			
				
		</div></fieldset>

			
		<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

			<label class="inline-edit-author"><span class="title">Författare</span><select name="post_author" class="authors">
	<option value="-1">— Ingen ändring —</option>
	<option value="1">hakan.bergman@datadelenhc.se (hakan.bergman@datadelenhc.se)</option>
</select></label>		<label>
			<span class="title">Överordnad</span>
					<select name="post_parent" id="post_parent">
	<option value="-1">— Ingen ändring —</option>
	<option value="0">Huvudsida (utan överordnad)</option>
	<option class="level-0" value="2">Exempelsida</option>
</select>
		</label>

					
			
			
			
			<div class="inline-edit-group wp-clearfix">
								<label class="alignleft">
				<span class="title">Kommentarer</span>
				<select name="comment_status">
					<option value="">— Ingen ändring —</option>
					<option value="open">Tillåt</option>
					<option value="closed">Tillåt inte</option>
				</select>
			</label>
					</div>

			
			<div class="inline-edit-group wp-clearfix">
				<label class="inline-edit-status alignleft">
					<span class="title">Status</span>
					<select name="_status">
									<option value="-1">— Ingen ändring —</option>
												<option value="publish">Publicerat</option>
						
												<option value="private">Privat</option>
												<option value="pending">Väntar på granskning</option>
						<option value="draft">Utkast</option>
					</select>
				</label>

			
			</div>

			
		</div></fieldset>

					<div class="submit inline-edit-save">
			<button type="button" class="button cancel alignleft">Avbryt</button>
			<input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary alignright" value="Uppdatera">			<input type="hidden" name="post_view" value="list">
			<input type="hidden" name="screen" value="edit-page">
						<br class="clear">
			<div class="notice notice-error notice-alt inline hidden">
				<p class="error"></p>
			</div>
		</div>
		</td></tr>
					</tbody></table></form>
		
<div id="ajax-response"></div>
<br class="clear">
</div>


<div class="clear"></div></div>
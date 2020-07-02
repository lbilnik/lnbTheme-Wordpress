<?php	
		
	/*opcie motywu*/ //dodane od 25 lekcji Ca³oœæ odpowiada za dodanie dodatkowych pocji do menu w wp-admin w tym przypadku w dziale wygl¹d
	add_action('admin_init','init_theme_options');  //lekcja 27
	add_action('admin_menu', 'setup_theme_admin_menus');  //przypisanie funkcji do konkretnej akcji czyli admin_menu 
	
function setup_theme_admin_menus() {
	add_submenu_page('themes.php','Opcje motywu','lnbtheme - opcje','manage_options','lnbtheme_options','theme_options');
	/*generuje pozycje w menu g³ównym / odwo³anie do pliku themes.php / tytu³ na pasku / nazwa w menu / uprawnienia(manage) / identyfikator / funkcja do wyœwietlania definiowana poni¿ej */
}


function init_theme_options() {  //funkcja dodana w lekcji 27
	register_setting('lnbtheme_theme_options','footer_text');
}

function theme_options() {        //dodane w lekcji 25(sama funkcja) i 26(div z form) //<p> dodane w lekcji 27
	?>
	
	<div class="wrap">									
		<?php screen_icon('themes'); ?><h2>Opcje motywu</h2>
	
	<form method="post" action="options.php">
	
	<?php settings_fields('lnbtheme_theme_options'); ?>
	
		<table class="form-table">
			<tr valign="top">
				<th scope="row">
	
					<label for-"footer_text">
						Tekst w stopce
					</label>
					<input type="text" name="footer_text" value="<?php  echo get_option('footer_text'); ?>"/>
				</th>
			</tr>
		</table> 
		<p class="submit"> 
			<input type="submit" class="button-primary" value="<?php _e('Save Changes'); ?>" />
		</p>
	</form>
	</div>	
		
<?php  }
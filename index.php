<?php get_header();?>
<div id="wrapper">
	<h2 id="motto">Masz problemy z nadwagą, ale brakuje Ci motywacji? Ta strona jest dla ciebie!</h2>
	
	<div id="login_motto">
	</div>
	
	<div id="login_form_div">
		<?php wp_login_form( ); ?>
	</div>

	<a id="register_button" href="<?php echo wp_registration_url(); ?>">Schudnij teraz!!!</a>
</div>
<?php get_footer();?>
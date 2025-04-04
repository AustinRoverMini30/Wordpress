<?php

// calculate add-ons (non pro only)
$plugins = array();

if ( ! acf_get_setting( 'pro' ) ) {
	if ( is_plugin_active( 'acf-repeater/acf-repeater.php' ) ) {
		$plugins[] = __( 'Repeater', 'secure-custom-fields' );
	}
	if ( is_plugin_active( 'acf-flexible-content/acf-flexible-content.php' ) ) {
		$plugins[] = __( 'Flexible Content', 'secure-custom-fields' );
	}
	if ( is_plugin_active( 'acf-gallery/acf-gallery.php' ) ) {
		$plugins[] = __( 'Gallery', 'secure-custom-fields' );
	}
	if ( is_plugin_active( 'acf-options-page/acf-options-page.php' ) ) {
		$plugins[] = __( 'Options Page', 'secure-custom-fields' );
	}
}

?>
<div id="acf-upgrade-notice" class="notice">
	<div class="notice-container">
		<div class="col-content">
			<img src="<?php echo esc_url( acf_get_url( 'assets/images/scf-logo.svg' ) ); ?>" />
			<h2><?php esc_html_e( 'Database Upgrade Required', 'secure-custom-fields' ); ?></h2>
			<?php // translators: %1 plugin name, %2 version number ?>
			<p><?php echo acf_esc_html( sprintf( __( 'Thank you for updating to %1$s v%2$s!', 'secure-custom-fields' ), acf_get_setting( 'name' ), acf_get_setting( 'version' ) ) ); ?><br />
			<?php esc_html_e( 'This version contains improvements to your database and requires an upgrade.', 'secure-custom-fields' ); ?></p>
			<?php if ( ! empty( $plugins ) ) : ?>
				<?php // translators: %s a list of plugin ?>
				<p><?php echo acf_esc_html( sprintf( __( 'Please also check all premium add-ons (%s) are updated to the latest version.', 'secure-custom-fields' ), implode( ', ', $plugins ) ) ); ?></p>
			<?php endif; ?>
		</div>
		<div class="col-actions">
			<a id="acf-upgrade-button" href="<?php echo esc_url( $button_url ); ?>" class="acf-btn"><?php echo esc_html( $button_text ); ?></a>
		</div>
		
	</div>
</div>
<?php if ( $confirm ) : ?>
<script type="text/javascript">
(function($) {
	
	$("#acf-upgrade-button").on("click", function(){
		return confirm("<?php esc_attr_e( 'It is strongly recommended that you backup your database before proceeding. Are you sure you wish to run the updater now?', 'secure-custom-fields' ); ?>");
	});
		
})(jQuery);	
</script>
<?php endif; ?>

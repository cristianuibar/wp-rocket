<?php
/**
 * Rocket add-on block template.
 *
 * @since 3.0
 *
 * @param array $data {
 *     Checkbox Field arguments.
 *
 *     @type string $id          Field identifier.
 *     @type string $label       Add-on label.
 *     @type string $title       Add-on title.
 *     @type string $description Add-on description.
 *     @type string $logo        Add-on logo.
 *     @type string $value       Field value.
 * }
 */

defined( 'ABSPATH' ) || die( 'Cheatin&#8217; uh?' );
?>

<div class="wpr-field">
	<div class="wpr-flex">
		<h4 class="wpr-title3"><?php echo esc_html( $data['label'] ); ?></h4>
		<div class="wpr-radio wpr-radio--reverse">
			<input type="checkbox" id="<?php echo esc_attr( $data['id'] ); ?>" class="" name="wp_rocket_settings[<?php echo esc_attr( $data['id'] ); ?>]" value="1" <?php checked( $data['value'], 1 ); ?>>
			<label for="<?php echo esc_attr( $data['id'] ); ?>" class="">
				<span class="wpr-radio-ui"></span>
				<?php esc_html_e( 'Add-on status', 'rocket' ); ?>
			</label>
		</div>
	</div>
</div>

<div class="wpr-field wpr-addon">
	<div class="wpr-flex">
		<div class="wpr-addon-logo">
			<!--<?php echo esc_attr( $data['logo'] ); ?>-->
			<img src="<?php echo WP_ROCKET_ASSETS_IMG_URL; ?>/logo-cloudflare2.svg" width="153" height="51" alt="Logo Varnish">
		</div>
		<div class="wpr-addon-text">
			<?php if ( ! empty( $data['title'] ) ) : ?>
				<div class="wpr-addon-title">
					<?php echo $data['title']; ?>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $data['description'] ) ) : ?>
				<div class="wpr-field-description">
					<?php echo $data['description']; ?>
				</div>
			<?php endif; ?>
			<a href="#<?php echo esc_attr( $data['id'] ); ?>" class="wpr-button wpr-button--small wpr-button--icon wpr-button--purple wpr-icon-chevron-right"><?php esc_html_e( 'Modify options', 'rocket' ); ?></a>
		</div>
	</div>
</div>

```php
/**
 * Adds customizer options
 *
 * @hook palette_boxes
 * @param array $boxes
 * @return array
 */
function your_theme_palette_boxes( $boxes ) {
	$boxes['colors'] = array(
		'title' 	=> esc_html__( 'Color Combination', 'your-theme' ),
		'class' 	=> 'colors',
		'fields' 	=> array(
			array(
				'label' 		=> esc_html__( 'Black / Blue', 'your-theme' ),
				'class' 		=> 'custom-css-class',
				'action' 		=> array(
					'type' 		=> 'change-href',
					'selector'	=> '#your-theme-css',
					'value'		=> get_template_directory_uri() . '/assets/css/color-combination.css',
				)
			),	
		),
	);

	return $boxes;
}
add_filter( 'palette_boxes', 'your_theme_palette_boxes' );
```
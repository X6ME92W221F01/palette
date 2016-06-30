<?php $boxes = apply_filters( 'palette_boxes', array() ); ?>

<div class="palette-wrapper">
	<div class="palette">
		<div class="palette-inner">
			<h2><?php echo esc_html__( 'Theme Options', 'palette' ); ?></h2>

			<?php foreach( $boxes as $box ): ?>
				<div class="palette-box <?php if ( ! empty( $box['class'] ) ) : ?><?php echo esc_attr( $box['class'] ); ?><?php endif; ?>">
					<?php if ( ! empty( $box['title'] ) ) : ?>
						<div class="palette-title">
							<h3><?php echo esc_html( $box['title'] ); ?></h3>
						</div><!-- /.palette-title -->
					<?php endif; ?>

					<?php if ( ! empty( $box['fields'] ) ) : ?>
						<div class="palette-fields">
							<ul>
								<?php foreach ( $box['fields'] as $field ) : ?>
									<li <?php if ( ! empty( $field['class'] ) ) : ?>class="<?php echo esc_attr( $field['class'] ); ?>"<?php endif; ?>>
										<a <?php if (! empty( $field['action'] ) && 'change-href' === $field['action']['type'] ): ?>
												href="<?php echo esc_attr( $field['action']['value'] ); ?>"
												data-selector="<?php echo esc_attr( $field['action']['selector'] ); ?>"
											<?php endif; ?>>
											<span><?php echo esc_html( $field['label'] ); ?></span>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div><!-- /.palette-fields  -->
					<?php endif; ?>
				</div><!-- /.palette-box -->
			<?php endforeach; ?>

			<a class="palette-toggle">
				<span><?php echo esc_html__( 'Toggle', 'palette' ); ?></span>
			</a><!-- /.palette-toggle -->
		</div><!-- /.palette-inner -->
	</div><!-- /.palette -->
</div><!-- /.palette -->
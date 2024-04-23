<?php


$form_newsletter = get_field('form_newsletter', 'option');
$form_title      = $form_newsletter['title'];
$form_shortcode  = $form_newsletter['shortcode'];
?>
<div class="wcl-single-content" data-permalink="<?php echo get_permalink(); ?>">
	<div class="data-container wcl-container">
		<div class="data-row">
			<div class="data-col">
				<div class="data-sidebar">
					<?php
					$content = get_the_content();
					$table_of_contents = generate_post_table_of_contents($content);
					?>
					<?php if (!empty($table_of_contents)) : ?>
						<div class="data-sidebar-item mod-table-contents">

							<div class="data-table-contents">
								<h3 class="data-table-contents-title data-sidebar-item-title">
									Table of contents
								</h3>

								<?php echo $table_of_contents; ?>
							</div>
						</div>
					<?php endif; ?>


					<div class="data-sidebar-item">
						<div class="wcl-newsletter">
							<div class="m4-form">
								<?php if (!empty($form_title)) : ?>
									<div class="m4-form-title data-sidebar-item-title">
										Subscribe to our newsletter
									</div>
								<?php endif; ?>

								<div class="m4-form-model">
									<?php if (!empty($form_shortcode)) : ?>
										<?php echo do_shortcode($form_shortcode); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>

					<div class="data-sidebar-item">
						<div class="data-meta">
							<div class="data-meta-item-out data-meta-copy">
								<div class="data-meta-item mod-copy-link">
									<img src="<?php echo get_stylesheet_directory_uri() . '/img/icon-copy-clipboard.svg'; ?>" alt="img">
								</div>

								<div class="data-meta-copy-notify">
									Copied
								</div>
							</div>

							<div class="data-meta-item">
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri() . '/img/icon-linkedin.svg'; ?>" alt="img">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="data-col">
				<div class="data-content">
					<?php
					$content = get_post_field('post_content', get_the_ID());
					echo apply_filters('the_content', $content);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="block-<?php print $block->module . '-' . $block->delta; ?>" class="<?php print $classes; ?> " <?php print $attributes; ?>>
	<h1>TEST</h1>
	<?php print render($title_prefix); ?>
	<?php if ($block->subject): ?>
	  <h2><?php print $block->subject ?></h2>
	<?php endif;?>
	<?php print render($title_suffix); ?>
	<div class="content"<?php print $content_attributes; ?>>
		<?php print $content ?>
	</div>
</div>
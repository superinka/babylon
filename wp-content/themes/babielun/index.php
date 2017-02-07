	<?php get_header(); ?>
	<div class="container">
		<?php get_template_part( 'templates/slider' ); ?>
		<!-- main-content -->
		<div class="main-content">
			<div class="row">
				<?php get_template_part('templates/left'); ?>
				<?php get_template_part('templates/main'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
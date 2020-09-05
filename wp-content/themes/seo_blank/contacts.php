<?
/*
Template Name: Контакты
*/
?>

<?
	get_header();
?>

<!-- Contact section start -->
<div class="contact" id="contact">
	<div class="container">
		<div class="title">
			<h1>Напишите нам</h1>
			<p>...и мы ответим на все Ваши вопросы!</p>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="116" title="Контактная форма 1"]'); ?>
	</div>

	<div class="clearfix"> </div>
</div>
</div>
<!-- Contact section end -->

<?
get_footer();
?>
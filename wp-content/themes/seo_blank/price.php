<?
/*
Template Name: Тарифы
*/
?>

<?
	get_header();
?>
<!-- Price section start -->
<div id="price" class="section secondary-section">
	<div class="triangle"></div>
	<div class="container">
		<div class="title">
			<h1>Тарифы продвижения сайта</h1>
			<p>
				Выберите необходимый для Вас комплекс услуг
			</p>
		</div>
		<div class="price-table row-fluid">

			<?php
			$posts = get_posts( array(
				'numberposts'      => -1,
				'category_name'    => 'tarify',
				'orderby'          => 'date',
				'order'            => 'ASC',
				'post_type'        => 'post',
				'suppress_filters' => true,
			) );

			foreach( $posts as $post ){
				setup_postdata($post);
				?>
			<div class="span4 price-column">
				<h3><?php the_field('nazvanie_tarifa') ?></h3>
				<ul class="list">
					<li class="price">от <?php the_field('stoimost_tarifa') ?>₽/мес.</li>
					<li><?php the_field('harakteristika_1') ?></li>
					<li><?php the_field('harakteristika_2') ?></li>
					<li><?php the_field('harakteristika_3') ?></li>
					<li><?php the_field('harakteristika_4') ?></li>
					<li><?php the_field('harakteristika_5') ?></li>
					<?php 
							$field = get_field('harakteristika_6');

							if ($field == TRUE) {
						?>
					<li><?php the_field('harakteristika_6') ?></li>
					<?php
						}
						?>
					<?php 
							$field = get_field('harakteristika_7');

							if ($field == TRUE) {
						?>
					<li><?php the_field('harakteristika_7') ?></li>
					<?php
						}
						?>
					<?php 
							$field = get_field('harakteristika_8');

							if ($field == TRUE) {
						?>
					<li><?php the_field('harakteristika_8') ?></li>
					<?php
						}
						?>
					<?php 
							$field = get_field('harakteristika_9');

							if ($field == TRUE) {
						?>
					<li><?php the_field('harakteristika_9') ?></li>
					<?php
						}
						?>
				</ul>
				<a href="#" class="button button-ps"><?php the_field('tekst_knopki') ?></a>
			</div>
			<?php
			}

			wp_reset_postdata();
			?>
		</div>
		<div class="centered">
			<p class="price-text">
				Также мы можем предложить Вам персональный тариф на уникальных условиях. Свяжитесь с нами для обсуждения
				деталей.
			</p>
			<a href="#contact" class="button">Написать нам</a>
		</div>
	</div>
</div>
<!-- Price section end -->

<?
	get_footer();
?>
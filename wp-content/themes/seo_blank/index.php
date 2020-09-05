<?
	get_header();
?>
<!-- Start home section -->
<div id="home">
	<!-- Start cSlider -->
	<div id="da-slider" class="da-slider">
		<div class="triangle"></div>
		<!-- mask elemet use for masking background image -->
		<div class="mask"></div>
		<!-- All slides centred in container element -->
		<div class="container">

			<?php
			$posts = get_posts( array(
				'numberposts'      => -1,
				'category_name'    => 'slider',
				'orderby'          => 'date',
				'order'            => 'ASC',
				'post_type'        => 'post',
				'suppress_filters' => true,
			) );
			foreach( $posts as $post ){
				setup_postdata($post);
				?>
			<div class="da-slide">
				<h2 class="fittext2">Покоряй вершины с СЕО-ПИКС</h2>
				<h4 style="
						<?php 
							$field = get_field('slider_color');

							if ($field == 'light') {
								?>
									color: #fff
								<?php
							}
						?>">
					<?php the_title(); ?>
				</h4>

				<p><?php the_field('slider_desc') ?></p>

				<?php 
						$field = get_field('slider_btn');

						if ($field == 'on') {
							?>
				<a href="<?php the_field('slider_link') ?>" class="da-link button">Начни прямо сейчас</a>
				<?php
						}
					?>
				<div class="da-img">
					<img src="<?php the_field('slider_img');?>" alt="image01" width="320" />
				</div>
			</div>
			<?php
			}

			wp_reset_postdata(); // сброс
			?>
			<!-- Start cSlide navigation arrows -->
			<div class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</div>
		</div>
	</div>
</div>
<!-- End home section -->
<!-- Service section start -->
<div class="section primary-section" id="service">
	<div class="container">
		<!-- Start title section -->
		<div class="title">
			<h1><?php the_field('our_services_title');?></h1>
			<!-- Section's title goes here -->
			<p><?php the_field('our_services_desc');?></p>
			<!--Simple description for section goes here. -->
		</div>
		<div class="row-fluid">
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('website_promotion_img');?>" alt="service 1" />
					</div>
					<h3><?php the_field('website_promotion_title');?></h3>
					<p><?php the_field('website_promotion_desc');?></p>
				</div>
			</div>
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('se_adv_img');?>" alt="service 1" />
					</div>
					<h3><?php the_field('se_adv_title');?></h3>
					<p><?php the_field('se_adv_desc');?></p>
				</div>
			</div>
			<div class="span4">
				<div class="centered service">
					<div class="circle-border zoom-in">
						<img class="img-circle" src="<?php the_field('graph_design_img');?>" alt="service 4" />
					</div>
					<h3><?php the_field('graph_design_title');?></h3>
					<p><?php the_field('graph_design_desc');?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Service section end -->
<!-- Portfolio section start -->
<div class="section secondary-section " id="portfolio">
	<div class="triangle"></div>
	<div class="container">
		<div class=" title">
			<h1>Наше портфолио</h1>
			<p> В данном разделе вы можете посмотреть на наши выполненные работы.
				Список будет пополняться.</p>
		</div>
		<ul class="nav nav-pills">
			<li class="filter" data-filter="all">
				<a href="#noAction">Все работы</a>
			</li>
			<li class="filter" data-filter="web">
				<a href="#noAction">SEO</a>
			</li>
			<li class="filter" data-filter="photo">
				<a href="#noAction">Контекстная реклама</a>
			</li>
			<li class="filter" data-filter="identity">
				<a href="#noAction">Дизайн</a>
			</li>
		</ul>
		<ul id="portfolio-grid" class="thumbnails row">
			<?php
			$posts = get_posts( array(
				'numberposts' => -1,
				'category_name'    => 'portfolio',
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'post',
				'suppress_filters' => true,
			) );
			
			foreach( $posts as $post ){
				setup_postdata($post);
			?>
			<li class="span4 mix web">
				<div class="thumbnail">
					<a href="<?php echo get_permalink(); ?>">
						<img src="<?php the_post_thumbnail();?>" alt="<?php the_title(); ?>">
					</a>
					<!-- <a href="<?php echo get_permalink();?>" class="more show_hide" rel="#slidingDiv">
						<i class="icon-plus"></i>
					</a> -->
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
					<!-- <div class="mask"></div> -->
				</div>
			</li>
			<?php
			}

			wp_reset_postdata();
			?>
		</ul>
	</div>
</div>
<!-- Portfolio section end -->
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
<?php
	get_footer();
?>
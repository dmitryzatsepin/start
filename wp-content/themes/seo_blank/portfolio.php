<?
/*
Template Name: Портфолио
*/
?>

<?
	get_header();
?>

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
					<img src="<?php the_field('project_img') ?>" alt="project 1" />
					<a href="#single-project" class="more show_hide" rel="#slidingDiv">
						<i class="icon-plus"></i>
					</a>
					<h3><?php the_field('project_link') ?></h3>
					<p><?php the_field('project_desc') ?></p>
					<div class="mask"></div>
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

<?
	get_footer();
?>
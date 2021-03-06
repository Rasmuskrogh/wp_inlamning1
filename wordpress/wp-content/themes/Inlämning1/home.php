<?php 
/*
Template Name: Blogg
*/
?>
<!-- hämtar header -->
<?php get_header();?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
							<!-- kör loopen för att loopa inlägg -->
							<?php if (have_posts()) :
 
								while (have_posts()) : the_post();
								
								?>
								<article>
								<?php the_post_thumbnail(); ?>
								<a href="<?php the_permalink(); ?>">
								<h1 class="title"><?php the_title(); ?></h1>
								</a>
								<ul class="meta">
								<li>
								<i class="fa fa-calendar"></i><?php the_date(); ?>
								</li>
								<li>
								<i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
								</li>
								
								<li>
								<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(", "); ?></a>
								</li>
								</ul>
								<p><?php the_excerpt(); ?></p>
								
								</article>
								
								<?php
								endwhile;
								else :
								_e('Inga blogginlägg tillgängliga', 'textdomain');
								endif;?>

								<nav class="navigation pagination">
								<?php
								global $wp_query;
								
								$big = 999999999; // need an unlikely integer
								/* paginatation */
								echo paginate_links(array(
								'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'format' => '?paged=%#%',
								'current' => max(1, get_query_var('paged')),
								'total' => $wp_query->max_num_pages,
								));
								?>
								</nav>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
									<?php get_search_form(); ?>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<!-- visar sidomenyn för bloggen -->
										<?php wp_nav_menu( array('theme_location' => 'blogg-pages', 'container' => 'ul', 'container_class' => 'side-menu') ); ?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<!-- visar upp inlägg för oktober -->
												<a href="<?php echo get_home_url();?>/index.php/blogg?m=201610">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<!-- visar menyn för kategorier -->
										<?php wp_nav_menu( array('theme_location' => 'blogg-categories', 'container' => 'ul', 'container_class' => 'side-menu') ); ?>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>
		<!-- hämtar footer-->
<?php get_footer();
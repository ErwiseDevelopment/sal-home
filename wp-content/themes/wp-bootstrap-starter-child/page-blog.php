<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPre<!-- highlight -->ss site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section>

	<div class="container-fluid">

		<div class="row">

			<div class="col-12 px-0">

				<?php
					$alt_title = get_the_title();

					the_post_thumbnail(
						'post-thumbnail',
						array(
							'class' => 'img-fluid',
							'alt'   => $alt_title
						)
					);
				?>
			</div>
		</div>
	</div>
</section>
<!-- end banner -->

<!-- shortcut -->
<?php echo get_template_part( 'template-parts/content', 'shortcut' ) ?>
<!-- end shortcut -->

<!-- blog -->
<section class="l-all-blog">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<!-- loop -->
					<?php
						$editorias = array(
							'Institucional',
							'Paróquia',
							'Ensino',
							'Pastoral Juvenil',
							'Vocacional',
							'Obras Sociais',
							'Gráfica',
							'Portal'
						);

						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'post',
							'category_name'  => 'portal-blog',
							'order'          => 'DESC'
						);

						$blogs = new WP_Query( $args );
						$cats = array();

						if( $blogs->have_posts() ) :
							while( $blogs->have_posts() ) : $blogs->the_post();

								foreach (get_the_category( get_the_ID() ) as $c) {
									$cat = get_category($c);
									array_push($cats, $cat);
								}

								foreach($cats as $catt) {
									foreach( $editorias as $editoria ) {
										if( $catt->name == $editoria ) {
											$background_color = get_field( 'cor_de_fundo', $catt); 
											$category_name = $catt->name;
										} else {
											$category_name = $catt->name;
										}
									}
								}
					?>
								<div class="col-md-3 my-3">

									<a 
									class="card border-0"
									href="<?php the_permalink() ?>">

										<div class="card-img l-all-blog__card-img">

											<!-- <img
											class="img-fluid"
											src="https://portal.erwise.com.br/wp-content/uploads/2022/02/curiosidade-salesianos-300x200.jpeg"
											alt=""> -->

											<?php
												$alt_title = get_the_title();

												the_post_thumbnail(
													'post-thumbnail',
													array(
														'class' => 'img-fluid w-100 h-100',
														'alt'   => $alt_title,
														'style' => 'object-fit:cover'
													)
												);
											?>
										</div>

										<div class="card-body pt-1 pb-0 px-0">
											<p class="u-line-height-100 u-font-weight-bold u-color-folk-black mb-2">
												<!-- Curiosidades sobre os salesianos que você não sabia -->
												<?php the_title() ?>
											</p>
										</div>

										<div class="card-footer border-0 u-bg-folk-none px-0">

											<!-- <a
											class="u-border-2 u-font-weight-bold text-decoration-none py-2 px-5"
											style="border-color:<php echo $background_color ? $background_color : '#0B4DAD !important'; ?>;color:<php echo $background_color ? $background_color: '#0B4DAD !important'; ?>"
											href="<php echo get_category_link( $catt->term_id ) ?>">
												Ensino
												<php 
													echo $category_current ? $category_current : 'Blog'; 
												?>
											</a> -->

											<div class="row">

												<div class="col-md-10">
													<p class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white mb-0 py-2 px-5" style="background-color: #0b4dad;">
														Ler mais
													</p>
												</div>
											</div>
										</div>
									</a>
								</div>
					<?php 	endwhile; 
						endif;
					?>
					<!-- end loop -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end blog -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

<?php

/* Template Name : Page Base
* Description : Une page de base 
*/

get_header(); ?>
	<section>
		<header>
			<h1 style="text-align: center;"><?php the_title(); ?></h1>
		</header>
		<?php while (have_posts() ) : the_post(); ?>
			<div>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</section>

<?php get_footer(); ?>


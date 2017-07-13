<?php

/*
Template Name: News_01 Template
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
		<article class="post page">
			<h2><?php the_title(); ?></a></h2>
			
			<!-- info box -->
			<div class="info-box">
				<h4>Disclaimer</h4>
				<p>In the beginnig was the word, the word was WordPress. </p>
			</div><!-- /info box -->
			<?php the_content(); ?>
		</article>

	<?php endwhile;

else : 

	echo'No content to show';

endif;

get_footer();
?>
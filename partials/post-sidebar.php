<div class="post-sidebar">

	<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) ); ?>

	<?php if($related){ ?>

		<aside class="post-sidebar-related-posts" aria-labelledby="related-posts-heading">

			<h2 id="related-posts-heading">Related Posts</h2>

			<ul>
				<?php foreach($related as $post ) { setup_postdata($post); ?>
					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					</li>
				<?php } ?>
			</ul>

		</aside>

	<?php } ?>

	<?php wp_reset_postdata(); ?>

</div>

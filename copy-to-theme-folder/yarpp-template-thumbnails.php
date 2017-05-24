<?php
/*
YARPP Template: Thumbnails Anor Londo
Description: Requires a theme with support for post thumbnails
Author: Marc Tönsing
*/ ?>

<?php if (have_posts()):?>
    <div id="jp-relatedposts" class="jp-relatedposts" style="display: block;">
        <h3 class="jp-relatedposts-headline"><em>Ähnliche Beiträge</em></h3>
        <div class="jp-relatedposts-items jp-relatedposts-items-visual jp-relatedposts-grid ">
			<?php $i = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if (has_post_thumbnail()):?>

                    <div class="jp-relatedposts-post jp-relatedposts-post<?php echo $i?> jp-relatedposts-post-thumbs">
                        <a class="jp-relatedposts-post-a" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="nofollow" >
                            <img class="unveil" data-src="<?php the_post_thumbnail_url( 'yarpp' ); ?>" data-src-retina="<?php the_post_thumbnail_url( 'yarpp-retina' ); ?>">
                        </a>
                        <h4 class="jp-relatedposts-post-title">
                            <a class="jp-relatedposts-post-a" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p class="jp-relatedposts-post-date" style="display: block;"><?php the_date(); ?></p>
                    </div>

					<?php $i++ ?>
				<?php endif; ?>
			<?php endwhile; ?>

        </div>
    </div>

<?php endif; ?>
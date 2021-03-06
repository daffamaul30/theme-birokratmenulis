<?php get_header();
global $themeurl;
?>
<div class="container wrapper">
	<div class="row">
	<div class="col-lg-8" style="border: 1px solid #393e46; margin-right: 60px; padding:10px">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

		<div class="media">
		  <a class="pull-left" href="<?php the_permalink();?>">
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail');
            } else { ?>
		    <img class="media-object" src="<?php echo $themeurl;?>/img/gambar.svg" alt="<?php the_title();?>">
            <?php } ?>
		  </a>
		  <div class="media-body">
		    <h4 class="media-heading"><?php the_title();?></h4>
			    <p><?php the_excerpt();?></p>
		  </div>
		</div>

		<?php 
			endwhile;
			else:
			echo ' <p>Sorry mas bro, ga ada postnya...</p>';
			endif;
		?>
	</div>
	<?php get_sidebar();?>
	</div>
</div>
<div class="push"></div>
<?php get_footer();?>
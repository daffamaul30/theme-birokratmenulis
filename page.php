<?php get_header();
global $themeurl;
?>
<div class="container">
	<div class="row">
	<div class="col-lg8" style="border: 1px solid #393e46; margin-right: 60px; padding:10px">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

		<div class="media">
				<h1><?php the_title();?></h1>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active"><?php the_title();?></li>
				</ul>
				<article>
					<?php the_content();?>
				</article>
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
<?php get_footer();?>
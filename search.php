<?php
 
get_header();
 
if ( have_posts() ) {
	?>
	<div class="container">
    <h2>Search results for query: "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'thepost' );
	}
} else {
	echo '<div class="container"><p>No search results found!</p></div>';
}
 echo '</div>';
get_footer();
 
?>
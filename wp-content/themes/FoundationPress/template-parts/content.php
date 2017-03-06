<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$fond = get_post_meta($post->ID, 'fond', true);
?>
<div class="column column-block">

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry wow slideInLeft'); ?> style="background: <?php echo $fond; ?>">

	<?php the_post_thumbnail('visuel-listing');?>

	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>

</div>

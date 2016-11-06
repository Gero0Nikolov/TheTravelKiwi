<?php 

/**

*	Template Name: Homepage

*	@package bemplo

*/



get_header();
?>

<?php
if ( have_rows( "video" ) ) {
	?>
	<div class="owl-carousel video-slider-homepage">
	<?php
	$video_id = 1;
	while ( have_rows( "video" ) ) {
		the_row();
		$video_src = get_sub_field( "video_source" );
		$video_type = end( explode( ".", $video_src ) );
		$video_title = get_sub_field( "video_title" );	
		?>

		<div>
			<video id="video-<?php echo $video_id; ?>" class="video-container" controls preload="auto" loop>
				<source src="<?php echo $video_src; ?>" type='video/<?php echo $video_type; ?>'>
				<p class="vjs-no-js">
				  To view this video please enable JavaScript, and consider upgrading to a web browser that
				  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
				</p>
			</video> 
		</div>

		<?php
		$video_id += 1;
	}
	?>
	</div>
	<?php
}
?>

<?php
$page_content = get_field( "page_content" );
if ( !empty( $page_content ) ) {
	?>

	<div id="page-content" class="page-text">
		<?php echo $page_content; ?>
	</div>

	<?php
}
?>

<?php
if ( have_rows( "featured_places" ) ) {
	?>
	<div class="places-holder">
	<?php
	$panel_id = 1;
	while ( have_rows( "featured_places" ) ) {
		the_row();
		$country_name = get_sub_field( "country_name" );
		$city_name = get_sub_field( "city_name" );
		$city_nick = get_sub_field( "city_nick" );
		$city_photo = get_sub_field( "city_photo" );
		$post_link = get_sub_field( "post_link" );
		?>

		<a href="<?php echo $post_link; ?>" class="place-anchor">
			<div class="place-container" style="background-image: url(<?php echo $city_photo; ?>);">
				<h3 class="country-name"><?php echo $country_name; ?></h3>
				<h1 class="city-name"><?php echo $city_name; ?></h1>
				<h2 class="city-nick"><?php echo $city_nick; ?></h2>
			</div>
		</a>

		<?php
		$video_id += 1;
	}
	?>
	</div>
	<?php
}
?>

<?php get_footer(); ?>
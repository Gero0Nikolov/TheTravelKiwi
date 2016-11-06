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

<?php get_footer(); ?>
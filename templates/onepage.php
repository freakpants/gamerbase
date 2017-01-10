<?php
/**
 * Template Name: The OnePage Home Page
 */
?>
<div id="news" class="news-container clearfix">
	<?php 
	$posts = get_posts();
	$i = 0;
	foreach ($posts as $post){
	
		$cats = get_the_category();
		
		if( $i === 0){
			echo '
			<div class="news-post">
				<div class="image-container">
					<img src="' . get_the_post_thumbnail_url() . '" width="100%" />
				</div>
				<div class="text-container">
					';
					echo the_category();
					echo '
					<h2>' . get_the_title() . '</h2>
				</div>
			</div>';
		} 
		if( $i === 1){
			echo '
			<div class="news-post">
				<div class="text-container">
					'; echo the_category();
					echo '
					<h2>' . get_the_title() . '</h2>
				</div>
				<div class="image-container pull-right">
					<img src="' . get_the_post_thumbnail_url() . '" width="100%" />
				</div>
			</div>';
		}
		
		if( $i === 2 ){
			echo '
			<div class="row news-post">
				<div class="col-md-4 no-gutter small-article">
					<img src="http://img12.deviantart.net/26c4/i/2016/167/1/9/mercy_by_liang_xing-da6g6ep.jpg">
				</div>
			';
		}
		
		if( $i === 3 ){
			echo '
				<div class="col-md-4 no-gutter small-article">
					<img src="http://lkimg.zamimg.com/shared/guides/268421/images/Trundle_Screenshots.jpg">
				</div>
			';
		}
		
		if( $i === 4 ){
			echo '
				<div class="col-md-4 no-gutter small-article">
<img src="http://www.templeofthai.com/images/recipes/beef-red-curry-paste-820x536.jpg">
				</div>
			</div>
			';
		}
			
		
		$i++; 
	} 
	
	?>
</div>
<div id="streams" >
	<div id="streams-text">
		<div class="row">
			<div class="col-md-5">
				&nbsp;
			</div>
			<div class="col-md-7 center">
				<h1>Discover</h1>
				<h2>Swiss Streaming Channels</h2>
			</div>
		</div>
		
	</div>
	<div id="streams-grid">
		<?php do_shortcode('[twitch_channels_grid]'); ?>
	</div>
</div>

<div id="toplists">
	<div class="row">
		<div class="col-md-3">
			League of Legends
		</div>
		<div class="col-md-3">
			Overwatch
		</div>
		<div class="col-md-3">
			Rocket League
		</div>
		<div class="col-md-3">
			Halo
		</div>
	</div>
</div>
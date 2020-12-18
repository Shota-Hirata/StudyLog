<?php
	$twitter_url = get_the_author_meta('twitter');
	$twitter_user = str_replace("https://twitter.com/", "", $twitter_url);
?>

<div class="row py-5">
	<div class="col-6">
		<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank">
			<div class="facebook p-3 text-white">
				Facebookシェア
			</div>
		</a>
	</div>
	<div class="col-6">
		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>$text=<?php the_title(); ?>&via=<?php echo $twitter_user; ?>">
			<div class="twitter p-3 text-white">
				Twitterシェア
			</div>
		</a>
	</div>
</div>




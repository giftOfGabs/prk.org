<?php include(path_to_theme().'/templates/npf_header.tpl.php'); ?>
<div id="slider" class="slider">
  <?php print render($page['image_slider']); ?>
</div><!--/#slider-->
<div class="mission blueBg">
  <p>
	<?= $node->field_mission['und'][0]['value']; ?>
  </p>
  <!-- /.container -->
</div><!--/.mission-->
<div class="container homepageCTA">
<?php
	$uri = 'public://';
	$path= file_create_url($uri);
?>
	<div class="cta lightBlueBg">
		<a href="<?= $node->field_homepage_cta_1_link['und'][0]['value']; ?>">
			<p><img src="<?= $path .$node->field_homepage_cta_1_image['und'][0]['filename']; ?>" /></p>
			<?= $node->field_homepage_cta_1['und'][0]['value']; ?>
		</a>
			<div class="learnMore">
		<a href="<?= $node->field_homepage_cta_1_link['und'][0]['value']; ?>">
				<button class="button blueBg">Learn More</button>
		</a>
			</div>
			<!-- /.learnMore -->
	</div><!--/.cta-->
	<div class="cta lightBlueBg">
		<a href="<?= $node->field_homepage_cta_2_link['und'][0]['value']; ?>" class="middle">
			<p><img src="<?= $path .$node->field_homepage_cta_2_image['und'][0]['filename']; ?>" /></p>
			<?= $node->field_homepage_cta_2['und'][0]['value']; ?>
		</a>
			<div class="learnMore">
		<a href="<?= $node->field_homepage_cta_2_link['und'][0]['value']; ?>">
			<button class="button blueBg">Learn More</button>
		</a>
			</div>
			<!-- /.learnMore -->
	</div><!--/.cta-->
	<div class="cta lightBlueBg">
		<a href="<?= $node->field_homepage_cta_3_link['und'][0]['value']; ?>">
			<p><img src="<?= $path .$node->field_homepage_cta_3_image['und'][0]['filename']; ?>" /></p>
			<?= $node->field_homepage_cta_3['und'][0]['value']; ?>
		</a>
			<div class="learnMore">
		<a href="<?= $node->field_homepage_cta_3_link['und'][0]['value']; ?>">
				<button class="button blueBg">Learn More</button>
		</a>
			</div>
			<!-- /.learnMore -->
	</div><!--/.cta-->
</div>
<!-- /.homepageCTA -->
<div class="videoContainer skyBlueBg">
  <div class="container"> 
  	<?php if(isset($node->field_video_link[LANGUAGE_NONE])): ?>	
		<a href="javascript:void(0);" onclick="launchVideo('<?= $node->field_video_link['und'][0]['value']; ?>?autoplay=1');" class="videoLauncher left" style="background-image:url('<?= $path .$node->field_video_image['und'][0]['filename']; ?>')">
		<img src="<?= $path .$node->field_video_image['und'][0]['filename']; ?>" class="mobileVideo" />
		<div class="playVideoIcon"><img src="<?= $base_path . path_to_theme() ?>/images/play-video-icon.png" /></div>
		<iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
		</a>
	<?php endif; ?>
	<?php if(empty($node->field_video_link[LANGUAGE_NONE])): ?>	
		<img src="<?= $path .$node->field_video_image['und'][0]['filename']; ?>" class="mobileVideo" />
	<?php endif; ?>
	<div class="videoContent right">
		<?= $node->field_video_content_box['und'][0]['value']; ?>
	</div>
	<!-- /.videoContent left -->
	</div><!--/.container-->
</div>
<!-- /.videoContainer skyBlueBg -->
<div class="container feeds">
	<div class="latestNews left fifty">
		<h1>Latest News <div class="icon"></div></h1>
		 <div class="newsContainer">
			<?= $node->field_latest_news['und'][0]['value']; ?>
		 </div>
		 <!-- /.newsContainer -->
		 <div class="moreNewsBtn">
		 	<?= $node->field_latest_news_link['und'][0]['value']; ?>
	 	</div>
	</div>
	<!-- /.latestNews -->
	<div class="blogFeed right fifty">
		<h1>From Our Blog <div class="icon"></div></h1>
		<div id="blogRSSFeed">
			<div class="rssFeed">
			<!--manual override for blog until new blog launched, js commented out to populate div with feed as well-->
			<?= $node->field_blog_manual['und'][0]['value']; ?>
			</div>
		</div>
		<!--<a href="" class="button">Older Posts</a>-->
	</div>
	<!-- /.blogFeed left -->
</div>
<!-- /.container -->
<div class="featuredEventContainer">
	<img src="<?= $path .$node->field_featured_event_image['und'][0]['filename']; ?>" />
<div class="featuredEventContent blueBg">
  <div class="container">
	<?= $node->field_featured_event_content['und'][0]['value']; ?>
  </div>
  <!-- /.container -->
</div>
<!-- /.featuredEventContent -->
</div>
<!-- /.featuredEventContainer -->
<div class="container events">
	<div class="upcomingEventsLeft left">
		<?= $node->field_upcoming_events_left_conte['und'][0]['value']; ?>
	</div>
	<!-- /.upcomingEventsLeft left -->
	<div class="upcomingEvents left">
		<h2 class="upcomingEventsHeader desktop">Upcoming Events</h2>
		<h2 class="upcomingEventsHeader mobile"><a href="javascript:void(0);">Upcoming Events</a></h2>
		<?= $node->field_upcoming_events['und'][0]['value']; ?>
		<div class="findEventLink">
		<?= $node->field_find_event_link['und'][0]['value']; ?>
		</div>
		<!-- /.findEventLink -->
	</div>
	<!-- /.upcomingEvents left -->
</div>
<!-- /.container -->
<div class="skyBlueBg homePreFooter desktop">
<div class="container">
	<div class="cta">
		<div class="stayInformed icon"></div>
		<?= $node->field_stay_informed_content['und'][0]['value']; ?>
		<form action="http://www3.parkinson.org/site/Survey" method="POST" name="survey_7681" id="emailSignup">
			<input type="text" class="formField" id="cons_email" name="cons_email" value="" placeholder="Email Address" />			
			<input type="submit" name="ACTION_SUBMIT_SURVEY_RESPONSE" id="email_submit ACTION_SUBMIT_SURVEY_RESPONSE" title="Join us" value="SUBMIT" class="lightBlueBg" />
			<input type="hidden" name="SURVEY_ID" id="SURVEY_ID" value="7681">
			<!--<input type="hidden" name="NEXTURL" id="NEXTURL" value="<?= $base_path ?>">-->
		</form>
	</div>
	<!-- /.cta -->
	<div class="cta middle">
		<div class="inYourArea icon"></div>
		<?= $node->field_in_your_area['und'][0]['value']; ?>
	</div>
	<!-- /.cta -->
	<div class="cta last">
		<div class="shareYourStory icon"></div>
		<?= $node->field_share_your_story['und'][0]['value']; ?>
	</div>
	<!-- /.cta -->
</div>
<!-- /.container -->
</div>
<!-- /.skyBlueBg homePreFooter -->
<div class="preFooter lightBlueBg mobile">
    <?php include(path_to_theme().'/templates/npf_pre_footer.tpl.php'); ?>
</div>
<?php include(path_to_theme().'/templates/npf_footer.tpl.php'); ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores_modern_theme
 */

get_header();
?>





<!------------------FIRST SETION - "CIRCLE"--------------------->
<section class="circle_menu" style="background-image: url('<?php echo get_field( 'top_backer' )['sizes']['large']; ?>')">
	<div class="gradient">

	<div class="container" id="about_title">
<?php
	if(get_field('circle_title'))
	{
		echo '<h2 class="service_title">' . get_field('cirlce_title') . '</h2>';
	}
?>

	</div>

	<div class="container" id="circle_main">

		<div class="container">
			<div class="services_circe"></div>
		</div>
	        
				<div class="services_options">

					<?php 
					if(have_rows('circle_icon_group')):
					while(have_rows('circle_icon_group') ) : the_row();
						$CIRCLE_ICON_ONE = get_sub_field('circle_icon_one');
						$CIRCLE_ICON_TWO = get_sub_field('circle_icon_two');
						$CIRCLE_ICON_THREE = get_sub_field('circle_icon_three');
						$CIRCLE_ICON_FOUR = get_sub_field('circle_icon_four');

						$CIRCLE_ICON_FIVE = get_sub_field('circle_icon_five');
						$CIRCLE_ICON_SIX = get_sub_field('circle_icon_six');
						$CIRCLE_ICON_SEVEN = get_sub_field('circle_icon_seven');
						$CIRCLE_ICON_EIGHT = get_sub_field('circle_icon-eight');
					?>
					<div class="option_one" id="option_changer">
						<i class="fa-2x" id="option_one_icon"><?php echo $CIRCLE_ICON_ONE; ?></i>
					</div>
					<div class="option_two" id="option_changer">
						<i class="fa-2x"><?php echo $CIRCLE_ICON_TWO; ?></i>
					</div>
					<div class="option_three" id="option_changer">
						<i class="fa-2x" id="option_three_icon"><?php echo $CIRCLE_ICON_THREE; ?></i>
					</div>
					<div class="option_four" id="option_changer">
						<i class="fa-2x" id="option_four_icon"><?php echo $CIRCLE_ICON_FOUR; ?></i>
					</div>
					<div class="option_five" id="option_changer">
						<i class="fa-2x" id="option_five_icon"><?php echo $CIRCLE_ICON_FIVE; ?></i>
					</div>
					<div class="option_six" id="option_changer">
						<i class="fa-2x" id="option_six_icon"><?php echo $CIRCLE_ICON_SIX; ?></i>
					</div>
					<div class="option_seven" id="option_changer">
						<i class="fa-2x" id="option_seven_icon"><?php echo $CIRCLE_ICON_SEVEN; ?></i>
					</div>
					<div class="option_eight" id="option_changer">
						<i class="fa-2x"><?php echo $CIRCLE_ICON_EIGHT; ?></i>
					</div>
				<?php endwhile; endif; ?>
				</div>

					<div class="position-relative">
						<?php 
							if(have_rows('circle_image_group')):
							while(have_rows('circle_image_group') ) : the_row();
								$CIRCLE_IMAGES_ONE = get_sub_field('circle_images_one ');
								$CIRCLE_IMAGES_TWO = get_sub_field('circle_images_two');
								$CIRCLE_IMAGES_THREE = get_sub_field('circle_images_three');
								$CIRCLE_IMAGES_FOUR = get_sub_field('circle_images_four');
								$CIRCLE_IMAGES_FIVE = get_sub_field('circle_images_five');
								$CIRCLE_IMAGES_SIX = get_sub_field('circle_images_six');
								$CIRCLE_IMAGES_SEVEN = get_sub_field('circle_images_seven');
								$CIRCLE_IMAGES_EIGHT = get_sub_field('circle_images_eight');
						?>
						<img class="change_two one_top_title" src="<?php echo $CIRCLE_IMAGES_ONE['url'] ?>">
						<img class="change_two two_top_title" src="<?php echo $CIRCLE_IMAGES_TWO['url'] ?>">
						<img class="change_two three_top_title" src="<?php echo $CIRCLE_IMAGES_THREE['url'] ?>">
						<img class="change_two four_top_title" src="<?php echo $CIRCLE_IMAGES_FOUR['url'] ?>">
						<img class="change_two five_top_title" src="<?php echo $CIRCLE_IMAGES_FIVE['url'] ?>">
						<img class="change_two six_top_title" src="<?php echo $CIRCLE_IMAGES_SIX['url'] ?>">
						<img class="change_two seven_top_title" src="<?php echo $CIRCLE_IMAGES_SEVEN['url'] ?>">
						<img class="change_two eight_top_title" src="<?php echo $CIRCLE_IMAGES_EIGHT['url'] ?>">

					<?php endwhile; endif; ?>
					</div>

						<div class="position-relative_text">
							<?php 
								if(have_rows('circle_text_group')):
								while(have_rows('circle_text_group') ) : the_row();
									$CENTER_TEXT_ONE = get_sub_field('center_text_one');
									$CENTER_TEXT_TWO = get_sub_field('center_text_two');
									$CENTER_TEXT_THREE = get_sub_field('center_text_three');
									$CENTER_TEXT_FOUR = get_sub_field('center_text_four');
									$CENTER_TEXT_FIVE = get_sub_field('center_text_five');
									$CENTER_TEXT_SIX = get_sub_field('center_text_six');
									$CENTER_TEXT_SEVEN = get_sub_field('center_text_seven');
									$CENTER_TEXT_EIGHT = get_sub_field('center_text_eight');
							?>
							<p class="change_three circle_text_one" id="circle_select"><?php echo $CENTER_TEXT_ONE; ?></p>
							<p class="change_three circle_text_two" id="circle_select"><?php echo $CENTER_TEXT_TWO; ?></p>
							<p class="change_three circle_text_three" id="circle_select"><?php echo $CENTER_TEXT_THREE; ?></p>
							<p class="change_three circle_text_four" id="circle_select"><?php echo $CENTER_TEXT_FOUR; ?></p>

							<p class="change_three circle_text_five" id="circle_select"><?php echo $CENTER_TEXT_FIVE; ?></p>
							<p class="change_three circle_text_six" id="circle_select"><?php echo $CENTER_TEXT_SIX; ?></p>
							<p class="change_three circle_text_seven" id="circle_select"><?php echo $CENTER_TEXT_SEVEN; ?></p>
							<p class="change_three circle_text_eight" id="circle_select"><?php echo $CENTER_TEXT_EIGHT; ?></p>
						<?php endwhile; endif; ?>
						</div>
		</div>
	</div>
</section>
<!------------------FIRST SETION - "CIRCLE"--------------------->

<div class="spacer"></div>

<!------------------SECOND SECTION - "ABOUT US"--------------------->
<section class="aboutus">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<?php 
					$ABOUT_IMAGE = get_field('about_image');
					if(!empty($ABOUT_IMAGE)):
				?>
				<img class="section_four_bigpicture" src="<?php echo $ABOUT_IMAGE['url'] ?>">
					<?php endif; ?>
			</div>


			<div class="col-md-6" id="about_us_content">
				<?php
					if(get_field('about_title'))
					{
					echo '<h3 class="section_four_title">' . get_field('about_title') . '</h3>';
					}
				?>
				<hr class="section_four_hr">
				<br>
					<div class="row">

						<?php 
							if(have_rows('about_categories_repeater') ):
							while(have_rows('about_categories_repeater') ) : the_row();
								$CATEGORY_ICON = get_sub_field('category_icon');
								$CATEGORY_TITLE = get_sub_field('category_title');
								$CATEGORY_CONTENT = get_sub_field('category_content');
							?>
						<div class="col-md-6" id="section_four_left">
							<div class="row">
								<div class="col-md-3">
									<i id="section_four_icon"><?php echo $CATEGORY_ICON; ?></i>
								</div>
								<div class="col-md-9">
									<h3 class="section_four_subtitle"><?php echo $CATEGORY_TITLE; ?></h3>
									<p class="section_four_subcontent"><?php echo $CATEGORY_CONTENT; ?></p>
								</div>
							</div>
						</div>
						<?php endwhile; endif;  ?>
					</div>

			</div>
		</div>
	</div>

</section>
<!------------------SECOND SECTION - "ABOUT US"--------------------->







<!------------------THIRD SECTION - "FEATURES"--------------------->
<section class="phone_example">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php 
					if(get_field('features_title'))
					{
						echo '<h4 class="section_five_maintitle">' . get_field('features_title') . '</h4>';
					}
				?>
				<hr class="section_five_hr">
				
				<?php 
					if(have_rows('features_content_repeater')):
					while(have_rows('features_content_repeater') ) : the_row();
						$FEATURES_ICON = get_sub_field('features_icon');
						$FEATURES_TITLE = get_sub_field('features_title');
						$FEATURES_DESC = get_sub_field('features_desc');
				?>
				<h4 class="section_five_title1"><i class="fa-2x" id="section_five_iconone"><?php echo $FEATURES_ICON; ?></i><?php echo $FEATURES_TITLE; ?></h4>
					<p class="title_one_content"><?php echo $FEATURES_DESC; ?></p>
				<?php endwhile; endif;  ?>
			</div>

			<div class="col-md-6">
				<?php 
					$FEATURES_IMAGE = get_field('features_image');
					if(!empty($FEATURES_IMAGE)):
				?>
				<img class="section_five_phoneexample" src="<?php echo $FEATURES_IMAGE['url'] ?>">
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>
<!------------------THIRD SECTION - "FEATURES"--------------------->






<!------------------FOURTH SECTION - "FUTURE BANNER"--------------------->
<section class="section_six">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
					if(get_field('future_title'))
					{
						echo '<p class="section_six_title">' . get_field('future_title') . '</p>';
					}
				?>

				<?php 
				if(get_field('future_subtitle'))
				{
					echo '<p class="section_six_subtitle">' . get_field('future_subtitle') . '</p>';
				}
				?>

				<?php 
				if(get_field('future_desc'))
				{
				echo '<p class="section_six_content">' . get_field('future_desc') . '</p>';
				}
				?>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<?php 
				if(get_field('future_button'))
				{
				echo '<button id="section_six_buttonchanger" class="section_six_button" id="six_butt_change">' . get_field('future_button') . '</button>';
				}
				?>
			</div>
		</div>
	</div>
</section>
<!------------------FOURTH SECTION - "FUTURE BANNER"--------------------->





<!------------------FIFTH SECTION - "PORTFOLIO"--------------------->
<section class="portfolio">



	<div class="container">



		<div class="row" id="section_seven_options">
			<?php 
				if(have_rows('port_selection_options')):
				while(have_rows('port_selection_options') ) : the_row();
					$PORT_OPTION_ONE = get_sub_field('port_option_one');
					$PORT_OPTION_TWO = get_sub_field('port_option_two');
					$PORT_OPTION_THREE = get_sub_field('port_option_three');
			?>

					<div class="col-md-4"><p class="section_seven_subtitle"><?php echo $PORT_OPTION_ONE; ?></p></div>
					<div class="col-md-4"><p class="section_seven_subtitle"><?php echo $PORT_OPTION_TWO; ?></p></div>
					<div class="col-md-4"><p class="section_seven_subtitle"><?php echo $PORT_OPTION_THREE; ?></p></div>
			<?php endwhile; endif; ?>
		</div>
	</div>




<div class="container">
		<div class="row" id="section_seven_rowone">
			<?php
				if(have_rows('port_repeater')):
				while(have_rows('port_repeater') ) : the_row();
					$PORT_ICON = get_sub_field('port_icon');
					$PORT_TITLE = get_sub_field('port_title');
					$PORT_DESC = get_sub_field('port_desc');
					$PORT_IMAGE = get_sub_field('port_image');
			?>
			<div class="col-md-4 col">
				<div class="bring_it_one">
					<div class="outerbox_one" id="outerbox_fader_one">
						<div class="innerbox_one">
							<i id="icon_one"><?php echo $PORT_ICON; ?></i>
							<p class="people_one"><?php echo $PORT_TITLE; ?></p>
							<div class="the_line_one"></div>
							<br>
							<p class="extra_one"><?php echo $PORT_DESC; ?></p>
						</div>	
					</div>
				</div>
				<div class="outerbox_back_one" id="image_grid_seven" style="background-image: url('<?php echo $PORT_IMAGE['url']; ?>);"></div>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<!------------------FIFTH SECTION - "PORTFOLIO"--------------------->






<!------------------SIXTH SECTION - "STATS BANNER"--------------------->
<section class="stats_banner">
<div class="container">
	<div class="row">
		<?php 
				if(have_rows('stat_banner_repeater')):
				while(have_rows('stat_banner_repeater') ) : the_row();
					$STAT_ICON = get_sub_field('stat_icon');
					$STAT_NUMBER = get_sub_field('stat_number');
					$STAT_TITLE = get_sub_field('stat_title');
			?>
		<div class="col-md-3" id="stat_section_icons">
			<i class="fa-3x" id="section_eight_icons"><?php echo $STAT_ICON; ?></i>
			<br>
			<strong class="section_eight_stats"><?php echo $STAT_NUMBER; ?></strong>
			<p class="section_eight_subtitle"><?php echo $STAT_TITLE; ?></p>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
</section>
<!------------------SIXTH SECTION - "STATS BANNER"--------------------->







<!------------------SEVENTH SECTION - "MEET THE TEAM"--------------------->
<section class="meet_the_team">
	<div class="container">
		<?php 
		if(get_field('team_title'))
		{
			echo  '<h4 class="section_nine_title">' . get_field('team_title') . '</h4>';
		}
		?>
		<hr class="section_nine_hr">
		<div class="row">
				<?php 
						if(have_rows('meet_team_repeater')):
						while(have_rows('meet_team_repeater') ) : the_row();
							$TEAM_PICTURE = get_sub_field('team_picture');
							$TEAM_ICON_ONE = get_sub_field('team_icon_one');
							$TEAM_ICON_TWO = get_sub_field('team_icon_two');
							$TEAM_ICON_THREE = get_sub_field('team_icon_three');
							$TEAM_ICON_FOUR = get_sub_field('team_icon_four');
							$TEAM_ICON_FIVE = get_sub_field('team_icon_five');
							$TEAM_ICON_SIX = get_sub_field('team_icon_six');
							$TEAM_NAME = get_sub_field('team_name');
							$TEAM_POSITION = get_sub_field('team_position');
					?>


			<div class="col-md-4" id="team_members">
					<div class="team_one" style="background-image: url('<?php echo $TEAM_PICTURE['url']; ?>');">
						<div class="team_change" id="color_team_change">
							<i class="fa-1x" id="section_nine_rowone"><?php echo $TEAM_ICON_ONE; ?></i>
							<i class="fa-1x" id="section_nine_rowone"><?php echo $TEAM_ICON_TWO; ?></i>
							<i class="fa-1x" id="section_nine_rowone"><?php echo $TEAM_ICON_THREE; ?></i>
							<i class="fa-1x" id="section_nine_rowtwo"><?php echo $TEAM_ICON_FOUR; ?></i>
							<i class="fa-1x" id="section_nine_rowtwo"><?php echo $TEAM_ICON_FIVE; ?></i>
							<i class="fa-1x" id="section_nine_rowtwo"><?php echo $TEAM_ICON_SIX; ?></i>
						</div>
					</div>
					<p class="section_nine_names"><?php echo $TEAM_NAME; ?></p>
					<p class="section_nine_jobtitle"><?php echo $TEAM_POSITION; ?></p>

				
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<!------------------SEVENTH SECTION - "MEET THE TEAM"--------------------->








<!------------------EIGHTH SECTION - "NEWS"--------------------->
<section class="recent_news">
	<div class="container">
		<?php 
		if(get_field('news_title'))
		{
		echo '<h4 class="section_ten_title">' . get_field('news_title') . '</h4>';
		}
		?>
		<hr class="section_ten_hr">
		<div class="row">
			<?php 
				if(have_rows('news_articles')):
				while(have_rows('news_articles') ) : the_row();
					$NEWS_IMAGE = get_sub_field('news_image');
					$NEWS_TITLE = get_sub_field('news_title');
					$NEWS_DATE = get_sub_field('news_date');
					$NEWS_AUTHOR = get_sub_field('news_author');
					$NEWS_DESC = get_sub_field('news_desc');
			?>
			<div class="col-md-4" id="recent_news_articles">

				<img class="section_ten_images" id="image_select" src="<?php echo $NEWS_IMAGE['url']; ?>">
				<h4 class="section_ten_subtitle" id="ten_color_change"><strong><?php echo $NEWS_TITLE; ?></strong></h4>
				<small class="section_ten_dates" id="ten_color_change"><?php echo $NEWS_DATE; ?></small> <small class="section_ten_names" id="ten_color_change"><?php echo $NEWS_AUTHOR; ?></small>
				<p class="section_ten_content"><?php echo $NEWS_DESC; ?></p>
			</div>
		<?php endwhile; endif; ?>
		</div>	
	</div>
</section>
<!------------------EIGHTH SECTION - "NEWS"--------------------->







<!------------------NINTH SECTION - "PRICES"--------------------->
<section class="pricing_section">
		<div class="container">
			<?php 
				if(get_field('price_title'))
				{
					echo '<h4 class="section_eleven_title">' . get_field('price_title') . '</h4>';
				}
			?>
			<hr class="section_eleven_hr">
			<div class="row">


				<div class="col-md-3">

					<?php
					if(get_field('left_side_title'))
					{
						echo '<h4 class="section_eleven_subtitle_left"><b>' . get_field('left_side_title') . '</b></h4>';
					}
					?>


					<?php 
						if(have_rows('left_side_options')):
						while(have_rows('left_side_options') ) : the_row();
							$LEFT_OPTIONS = get_sub_field('left_options');
							$LEFT_OPTIONS_ONE = get_sub_field('left_options_one');
							$LEFT_OPTIONS_TWO = get_sub_field('left_options_two');
							$LEFT_OPTIONS_THREE = get_sub_field('left_options_three');
					?>
					<p class="section_eleven_content_left"><?php echo $LEFT_OPTIONS; ?></p>
					<p class="section_eleven_content_left"><?php echo $LEFT_OPTIONS_ONE; ?></p>
					<p class="section_eleven_content_left"><?php echo $LEFT_OPTIONS_TWO; ?></p>
					<p class="section_eleven_content_left"><?php echo $LEFT_OPTIONS_THREE; ?></p>
					<?php endwhile; endif; ?>
				</div>

					<?php 
						if(have_rows('rightside_price_cards')):
						while(have_rows('rightside_price_cards') ) : the_row();
							$PRICE_CARD_TITLE = get_sub_field('price_card_title');
							$PRO_PRICE = get_sub_field('pro_price');
							$PRO_PRICE_DATE = get_sub_field('pro_price_date');
							$PRICE_OPTION_ONE = get_sub_field('price_option_one');
							$PRICE_OPTION_TWO = get_sub_field('price_option_two');
							$PRICE_ICON = get_sub_field('price_icon');
							$PRICE_OPTION_THREE = get_sub_field('price_option_three');
							$PRICE_BUTTON = get_sub_field('price_button');
							$PRICE_HIDDEN_BUTTON = get_sub_field('price_hidden_button');
					?>

				<div class="col-md-3">
					<div class="price_card_one" id="border_change">
						<h4 class="section_eleven_subtitle "><b><?php echo $PRICE_CARD_TITLE; ?></b></h4>
						<p><i class="section_eleven_price"><?php echo $PRO_PRICE; ?></i><?php echo $PRO_PRICE_DATE; ?></p>
						<hr class="price_hr">
						<p class="section_eleven_content"><?php echo $PRICE_OPTION_ONE; ?></p>
						<p class="section_eleven_content"><?php echo $PRICE_OPTION_TWO; ?></p>
						<i class="section_eleven_content" id="pricing_icons"><?php echo $PRICE_ICON; ?></i>
						<p class="section_eleven_content"><?php echo $PRICE_OPTION_THREE; ?></p>
						<button class="section_eleven_button" id="eleven_color_change"><?php echo $PRICE_BUTTON; ?></button>
						<button class="section_eleven_moreinfo" id="eleven_color_change"><?php echo $PRICE_HIDDEN_BUTTON; ?></button>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>	
		</div>
</section>
<!------------------NINTH SECTION - "PRICES"--------------------->








<!------------------TENTH SECTION - "TESTIMONIALS"--------------------->
<?php 
$TESTI_BACKGROUND = get_field('testi_background');
if(!empty($TESTI_BACKGROUND));
?>
<section class="what_people_say" style="background-image:url('<?php echo $TESTI_BACKGROUND['url'] ?>');">


	<div class="container" id="people_say_backer">
			<?php 
			if(get_field('testi_title'))
			{	
				echo '<h4 class="section_twelve_title">' . get_field('testi_title') . '</h4>';
			}
			?>
		<hr>
		<?php 
			$TESTI_IMAGE = get_field('testi_image');
			if(!empty($TESTI_IMAGE)):
		?>
				<img class="section_twelve_thumbnail" src="<?php echo $TESTI_IMAGE['url'] ?>">
			<?php endif; ?>


				<?php 
				if(get_field('testi_desc'))
				{
					echo '<p class="section_twelve_content">' . get_field('testi_desc') . '</p>';
				}
				?>
					<?php 
					if(get_field('testi_name'))
					{
						echo '<p class="section_twelve_names">' . get_field('testi_name') . '</p>';
					}
					?>
	</div>
</section>
<!------------------TENTH SECTION - "TESTIMONIALS"--------------------->






<!------------------SECTION THIRTEEN - "OUR CLIENTS"--------------------->
<section class="logo_section">
	<?php
	if(get_field('client_title'))
	{
		echo '<h4 class="thirteen_logo_title">' . get_field('client_title') . '</h4>';
	}
	?>
	<hr class="thirteen_logo_hr">
<div class="container">
	<div class="row" id="logo_row_one">
			<?php
			if(have_rows('client_logo_repeater')):
			while(have_rows('client_logo_repeater') ) : the_row();
				$LOGO_ONE = get_sub_field('logo_one');
				$LOGO_TWO = get_sub_field('logo_two');
				$LOGO_THREE = get_sub_field('logo_three');
				$LOGO_FOUR = get_sub_field('logo_four');
			?>
		<div class="col-md-3">
			<img class="logo_one" src="<?php echo $LOGO_ONE['url'] ?>">
		</div>
		<div class="col-md-3">
			<img class="logo_two" src="<?php echo $LOGO_TWO['url'] ?>">
		</div>
		<div class="col-md-3">
			<img class="logo_three" src="<?php echo $LOGO_THREE['url'] ?>">
		</div>
		<div class="col-md-3">
			<img class="logo_four" src="<?php echo $LOGO_FOUR['url'] ?>">
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>

</section>
<!------------------SECTION THIRTEEN - "OUR CLIENTS"--------------------->























	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();

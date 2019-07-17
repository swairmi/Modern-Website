<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores_modern_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php underscores_modern_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores_modern_theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
































<!------------------SECTION THREE - "CIRCLE MENU"--------------------->
<section class="circle_menu">

	<div class="container" id="about_title">
		<h2 class="service_title">OUR SERVICES</h2>
	</div>

	<div class="container" id="circle_main">

		<div class="container">
			<div class="services_circe"></div>
		</div>
	        
				<div class="services_options">
					<div class="option_one" id="option_changer">
						<i class="fas fa-2x fa-magic" id="option_one_icon"></i>
					</div>
					<div class="option_two" id="option_changer">
						<i class="fas fa-2x fa-users"></i>
					</div>
					<div class="option_three" id="option_changer">
						<i class="fas fa-2x fa-home" id="option_three_icon"></i>
					</div>
					<div class="option_four" id="option_changer">
						<i class="fas fa-2x fa-paint-roller"></i>
					</div>
					<div class="option_five" id="option_changer">
						<i class="fas fa-2x fa-ruler-combined" id="option_five_icon"></i>
					</div>
					<div class="option_six" id="option_changer">
						<i class="fas fa-2x fa-pencil-alt" id="option_six_icon"></i>
					</div>
					<div class="option_seven" id="option_changer">
						<i class="fas fa-2x fa-city" id="option_seven_icon"></i>
					</div>
					<div class="option_eight" id="option_changer">
						<i class="fas fa-2x fa-home"></i>
					</div>
				</div>

					<div class="position-relative">
						<img class="change_two one_top_title" src="images/central1.jpg">
						<img class="change_two two_top_title" src="images/central2.jpg">
						<img class="change_two three_top_title" src="images/central3.jpg">
						<img class="change_two four_top_title" src="images/central4.jpg">
						<img class="change_two five_top_title" src="images/central5.jpg">
						<img class="change_two six_top_title" src="images/central6.jpg">
						<img class="change_two seven_top_title" src="images/central7.jpg">
						<img class="change_two eight_top_title" src="images/central8.jpg">
					</div>

						<div class="position-relative_text">
							<p class="change_three circle_text_one" id="circle_select">BOOTSTRAP FRAMEWORK</p>
							<p class="change_three circle_text_two" id="circle_select">NOVI BUILDER</p>
							<p class="change_three circle_text_three" id="circle_select">RESPONSIVE & RETINA READY</p>
							<p class="change_three circle_text_four" id="circle_select">TONS OF TOOLS FOR REAL NEEDS</p>

							<p class="change_three circle_text_five" id="circle_select">THOUGHT THROUGH LAYOUT</p>
							<p class="change_three circle_text_six" id="circle_select">CLEAN AND CRISPY DESIGN</p>
							<p class="change_three circle_text_seven" id="circle_select">BUILT FOR SPEED</p>
							<p class="change_three circle_text_eight" id="circle_select">FLEXIBLE AND MULTIPURPOSE</p>
						</div>
	</div>
</section>
<!------------------SECTION THREE - "CIRCLE MENU"--------------------->


<!------------------SECTION FOUR - "ABOUT US BANNER"--------------------->
<section class="aboutus">

	<div class="container-fluid">
		<div class="row">

			<div class="col-md-6">
				<img class="section_four_bigpicture" src="images/about_us.jpg">
			</div>


			<div class="col-md-6" id="about_us_content">
				<h3 class="section_four_title">ABOUT US</h3>
				<hr class="section_four_hr">
				<br>
				<p class="esction_four_content">We are a team of professional, energetic individuals with talented designers and experienced managers available to guide our clients through the flawless and timely execution of any web design project. Since day one, we have been delivering creative and unique websites to our clients worldwide.</p>
				<br>

					<div class="row">
						<div class="col-md-6" id="section_four_left">
							<div class="row">
								<div class="col-md-3">
									<i class="fas fa-2x fa-print" id="section_four_icon"></i>
								</div>
								<div class="col-md-9">
									<h3 class="section_four_subtitle"> BOOTSTRAP FRAMEWORK</h3>
									<p class="section_four_subcontent">theFuture is based on Bootstrap Framework, which makes it a nice template for any purpose.</p>
								</div>
							</div>
						</div>

							<div class="col-md-6" id="section_four_right">
								<div class="row">
									<div class="col-md-3">
										<i class="fas fa-2x fa-user-friends" id="section_four_icon"></i> 
									</div>
									<div class="col-md-9">
										<h3 class="section_four_subtitle">CLEAN AND CRISPY DESIGN</h3>
										<p class="section_four_subcontent">theFuture is crafted ny top industry leaders with love, 
										care and customer needs in mind.</p>
									</div>
								</div>
							</div>
					</div>

			</div>
		</div>
	</div>

</section>
<!------------------SECTION FOUR - "ABOUT US BANNER"--------------------->






<!------------------SECTION FIVE - "PHONE INFO"--------------------->
<section class="phone_example">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="section_five_maintitle">IMPRESSIVE FEATURES</h4>
				<hr class="section_five_hr">
				
				<h4 class="section_five_title1"><i class="fas fa-rocket" id="section_five_iconone"></i> BUILT FOR SPEED</h4>
				<p class="title_one_content">Our templates was built for speed and performance. Get the best results at GTmetrix and Google PageSpeed</p>

				<h4 class="section_five_title2"><i class="fas fa-layer-group" id="section_five_icontwo"></i> FLEXIBLE AND MULTIPURPOSE</h4>
				<p class="title_two_content">theFuture allows to create various websites for complex and scalable projects.</p>
				
				<h4 class="section_five_title3"><i class="fas fa-download" id="section_five_iconthree"></i> SOCIAL INTERGRATION</h4>
				<p class="title_three_content">You can easily intergrate your Twitter and Facebook accounts with the website using the social widgets.</p>
			</div>

			<div class="col-md-6">
				<img class="section_five_phoneexample" src="images/phone_example.png">
			</div>
		</div>
	</div>

</section>
<!------------------SECTION FIVE - "PHONE INFO"--------------------->






<!------------------SECTION SIX - "THIN BANNER"--------------------->
<section class="section_six">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="section_six_title">theFUTURE</p>
				<p class="section_six_subtitle">IS A FELXIBLE SOLUTION WITH LOTS OF ADVANTAGES</p>
				<p class="section_six_content">Our template offers you a variety of elements to be combined</p>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<button class="section_six_button" id="six_butt_change" style="display: none;">GET IT NOW</button>
			</div>
		</div>
	</div>
</section>
<!------------------SECTION SIX - "THIN BANNER"--------------------->





<!------------------SECTION SEVEN - "PORTFOLIO"--------------------->
<section class="portfolio">
	<div class="container">
		<h4 class="section_seven_title">PORTFOLIO</h4>
			<div class="row" id="section_seven_options">
				<div class="col-md-4"><p class="section_seven_subtitle">ALL</p></div>
				<div class="col-md-4"><p class="section_seven_subtitle">PROJECTS</p></div>
				<div class="col-md-4"><p class="section_seven_subtitle">PEOPLE</p></div>
			</div>
	</div>
	<div class="container">
		<div class="row" id="section_seven_rowone">

			<div class="col-md-4 col">
				<div class="bring_it_one">
					<div class="outerbox_one" id="outerbox_fader_one">
						<div class="innerbox_one">
							<i class="fas fa-4x fa-images" id="icon_one"></i>
							<p class="people_one">PORTFOLIO ALBUM</p>
							<div class="the_line_one"></div>
							<br>
							<p class="extra_one">Creating Portfolio</p>
						</div>	
					</div>
				</div>
				<div class="outerbox_back_one" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
				<div class="bring_it_two">
					<div class="outerbox_two" id="outerbox_fader_two">
							<div class="innerbox_two">
							<i class="fas fa-4x fa-image" id="icon_two"></i>
								<p class="people_two">IMAGE COLLECTION</p>
								<div class="the_line_two"></div>
								<br>
								<p class="extra_two">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_two" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
					<div class="bring_it_three">
					<div class="outerbox_three" id="outerbox_fader_three">
							<div class="innerbox_three">
								<i class="fas fa-4x fa-images" id="icon_three"></i>
								<p class="people_three">IMAGE COLLECTION</p>
								<div class="the_line_three"></div>
								<br>
								<p class="extra_three">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_three" id="image_grid_seven"></div>
			</div>
		</div>
		<!---->
		<div class="row" id="section_seven_rowtwo">
			<div class="col-md-4 col">
					<div class="bring_it_four">
					<div class="outerbox_four" id="outerbox_fader_four">
							<div class="innerbox_four">
								<i class="fas fa-4x fa-images" id="icon_four"></i>
								<p class="people_four">PORTFOLIO ALBUM</p>
								<div class="the_line_four"></div>
								<br>
								<p class="extra_four">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_four" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
					<div class="bring_it_five">
					<div class="outerbox_five" id="outerbox_fader_five">
							<div class="innerbox_five">
								<i class="fas fa-4x fa-image" id="icon_five"></i>
								<p class="people_five">IMAGE COLLECTION</p>
								<div class="the_line_five"></div>
								<br>
								<p class="extra_five">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_five" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
					<div class="bring_it_six">
					<div class="outerbox_six" id="outerbox_fader_six">
							<div class="innerbox_six">
								<i class="fas fa-4x fa-image" id="icon_six"></i>
								<p class="people_six">PORTFOLIO ALBUM</p>
								<div class="the_line_six"></div>
								<br>
								<p class="extra_six">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_six" id="image_grid_seven"></div>
			</div>
		</div>

		<div class="row" id="section_seven_rowthree">
			<div class="col-md-4 col">
					<div class="bring_it_seven">
					<div class="outerbox_seven" id="outerbox_fader_seven">
							<div class="innerbox_seven">
								<i class="fas fa-4x fa-image" id="icon_seven"></i>
								<p class="people_seven">PORTFOLIO ALBUM</p>
								<div class="the_line_seven"></div>
								<br>
								<p class="extra_seven">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_seven" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
					<div class="bring_it_eight">
					<div class="outerbox_eight" id="outerbox_fader_eight">
							<div class="innerbox_eight">
								<i class="fas fa-4x fa-images" id="icon_eight"></i>
								<p class="people_eight">IMAGE COLLECTION</p>
								<div class="the_line_eight"></div>
								<br>
								<p class="extra_eight">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_eight" id="image_grid_seven"></div>
			</div>
			<!---->
			<div class="col-md-4 col">
				<div class="bring_it_nine">
					<div class="outerbox_nine" id="outerbox_fader_nine">
							<div class="innerbox_nine">
								<i class="fas fa-4x fa-images" id="icon_nine"></i>
								<p class="people_nine">IMAGE COLLECTION</p>
								<div class="the_line_nine"></div>
								<br>
								<p class="extra_nine">Creating Portfolio</p>
							</div>	
						</div>
					</div>
					<div class="outerbox_back_nine" id="image_grid_seven"></div>
			</div>
		</div>
	</div>
</section>
<!------------------SECTION SEVEN - "PORTFOLIO"--------------------->






<!------------------SECTION EIGHT - "STATS BANNER"--------------------->
<section class="stats_banner">
<div class="container">
	<div class="row">
		<div class="col-md-3" id="stat_section_icons">
			<i class="fas fa-5x fa-coffee" id="section_eight_icons"></i>
			<br>
			<strong class="section_eight_stats">100</strong>
			<p class="section_eight_subtitle">PROJECTS ANNUALLY</p>
		</div>
		<div class="col-md-3" id="stat_section_icons">
			<i class="fas fa-5x fa-award" id="section_eight_icons"></i>
			<br>
			<strong class="section_eight_stats">45</strong>
			<p class="section_eight_subtitle">AWARDS</p>
		</div>
		<div class="col-md-3" id="stat_section_icons">
			<i class="fas fa-5x fa-file-pdf" id="section_eight_icons"></i>
			<br>
			<strong class="section_eight_stats">98%</strong>
			<p class="section_eight_subtitle">POSITIVE REVIEWS</p>
		</div>
		<div class="col-md-3" id="stat_section_icons">
			<i class="fas fa-5x fa-laugh-wink" id="section_eight_icons"></i>
			<br>
			<strong class="section_eight_stats">147K</strong>
			<p class="section_eight_subtitle">HAPPY CUSTOMERS</p>
		</div>
	</div>
</div>
</section>
<!------------------SECTION EIGHT - "STATS BANNER"--------------------->







<!------------------SECTION NINE - "MEET THE TEAM"--------------------->
<section class="meet_the_team">
	<div class="container">
		<h4 class="section_nine_title">MEET OUR TEAM</h4>
		<hr class="section_nine_hr">
		<div class="row">
			<div class="col-md-4" id="team_members">
					<div class="team_one">

						<div class="team_change" id="color_team_change"><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-google-plus-g"></i><i class="fab fa-vimeo-v"></i><i class="fab fa-youtube"></i><i class="fab fa-pinterest-p"></i></div>
					</div>
					<p class="section_nine_names">AMANDA SMITH</p>
					<p class="section_nine_jobtitle">Director</p>
			</div>


			<div class="col-md-4" id="team_members">
					<div class="team_two">
						<div class="team_change" id="color_team_change"><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-google-plus-g"></i><i class="fab fa-vimeo-v"></i><i class="fab fa-youtube"></i><i class="fab fa-pinterest-p"></i></div>
					</div>
					<p class="section_nine_names">BRIAN KING</p>
					<p class="section_nine_jobtitle">Marketing Manager</p>
			</div>

			<div class="col-md-4" id="team_members">
					<div class="team_three">
						<div class="team_change" id="color_team_change"><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-google-plus-g"></i><i class="fab fa-vimeo-v"></i><i class="fab fa-youtube"></i><i class="fab fa-pinterest-p"></i></div>
					</div>
					<p class="section_nine_names">GEORGE NELSON</p>
					<p class="section_nine_jobtitle">Designer</p>
			</div>
		</div>
	</div>
</section>
<!------------------SECTION NINE - "MEET THE TEAM"--------------------->








<!------------------SECTION TEN - "RECENT NEWS"--------------------->
<section class="recent_news">
	<div class="container">
		<h4 class="section_ten_title">RECENT NEWS</h4>
		<hr class="section_ten_hr">
		<div class="row">
			<div class="col-md-4" id="recent_news_articles">
				<img class="section_ten_images" id="image_select" src="images/recent_news1.jpg">
				<h4 class="section_ten_subtitle" id="ten_color_change"><strong>CLEAN STLYE: PROS AND CONS</strong></h4>
				<small class="section_ten_dates" id="ten_color_change">Jan 20, 2019</small> <small class="section_ten_names" id="ten_color_change">by BRIAN WILLIAMSON</small>
				<p class="section_ten_content">Every website requires clean design. It is the basis of interfaces that are easy to interact with.
				Let's discuss pros and cons of such approach.</p>
			</div>

			<div class="col-md-4" id="recent_news_articles">
				<img class="section_ten_images" id="image_select" src="images/recent_news2.jpg">
				<h4 class="section_ten_subtitle" id="ten_color_change"><strong>10 REASONS TO BUY THEFUTURE</strong></h4>
				<small class="section_ten_dates" id="ten_color_change">Jan 20, 2019</small> <small class="section_ten_names" id="ten_color_change">by BRIAN WILLIAMSON</small>
				<p class="section_ten_content">In this article, we would like to share with you, why we think theFuture is a perfect template for your website and why you should buy it.</p>
			</div>

			<div class="col-md-4" id="recent_news_articles">
				<img class="section_ten_images" id="image_select" src="images/recent_news3.jpg">
				<h4 class="section_ten_subtitle" id="ten_color_change"><strong>10 REASONS TO BUY THEFUTURE</strong></h4>
				<small class="section_ten_dates" id="ten_color_change">Jan 20, 2019</small> <small class="section_ten_names" id="ten_color_change">by BRIAN WILLIAMSON</small>
				<p class="section_ten_content">In this article, we would like to share with you, why we think theFuture is a perfect template for your website and why you should buy it.</p>
			</div>
		</div>	
	</div>
</section>
<!------------------SECTION TEN - "RECENT NEWS"--------------------->







<!------------------SECTION ELEVEN - "PRICNIG CHART"--------------------->
<section class="pricing_section">
		<div class="container">
			<h4 class="section_eleven_title">PRICING CHART</h4>
			<hr class="section_eleven_hr">


			<div class="row">
				<div class="col-md-3">
					<h4 class="section_eleven_subtitle_left"><b>AVAILABLE OPTIONS</b></h4>
					<p class="section_eleven_content_left">Amount of space</p>
					<p class="section_eleven_content_left">Supported users</p>
					<p class="section_eleven_content_left">Automatic installation</p>
					<p class="section_eleven_content_left">Number of databases</p>
				</div>

				<div class="col-md-3">
					<div class="price_card_one" id="border_change">
						<h4 class="section_eleven_subtitle"><b>STANDARD</b></h4>
						<p><i class="section_eleven_price">$32.89</i> /monthly</p>
						<hr class="price_hr">

						<p class="section_eleven_content">10GB Storage amount</p>
						<p class="section_eleven_content">2 Users</p>
						<i class="fas fa-times section_eleven_content" id="pricing_icons"></i>
						<p class="section_eleven_content">20 MySQL Databases</p>
						<button class="section_eleven_button" id="eleven_color_change">BUY NOW!</button>
						<button class="section_eleven_moreinfo" id="eleven_color_change">MORE INFO</button>
					</div>
				</div>

				<div class="col-md-3">
					<div class="price_card_two" id="border_change">
						<h4 class="section_eleven_subtitle"><b>BUSINESS</b></h4>
						<p><i class="section_eleven_price">$78.89</i> /monthly</p>
						<hr class="price_hr">

						<p class="section_eleven_content">10GB Storage amount</p>
						<p class="section_eleven_content">5 Users</p>
						<i class="fas fa-times section_eleven_content" id="pricing_icons"></i>
						<p class="section_eleven_content">35 MySQL Databases</p>
						<button class="section_eleven_button" id="eleven_color_change">BUY NOW!</button>
						<button class="section_eleven_moreinfo" id="eleven_color_change">MORE INFO</button>
					</div>
				</div>

				<div class="col-md-3">
					<div class="price_card_three" id="border_change">
						<h4 class="section_eleven_subtitle"><b>PROFESSIONAL</b></h4>
						<p><i class="section_eleven_price">$89.89</i> /monthly</p>
						<hr class="price_hr">

						<p class="section_eleven_content">10GB Storage amount</p>
						<p class="section_eleven_content">Unlimited users</p>
						<i class="fas fa-check section_eleven_content" id="pricing_icons"></i>
						<p class="section_eleven_content">50 MySQL Databases</p>
						<button class="section_eleven_button" id="eleven_color_change">BUY NOW!</button>
						<button class="section_eleven_moreinfo" id="eleven_color_change">MORE INFO</button>
					</div>
				</div>
			</div>
		</div>

</section>
<!------------------SECTION ELEVEN - "PRICNIG CHART"--------------------->








<!------------------SECTION TWELVE - "WHAT PEOPLE SAY"--------------------->
<section class="what_people_say">
	<div class="container">
		<h4 class="section_twelve_title">WHAT PEOPLE SAY</h4>
		<hr>
		<img class="section_twelve_thumbnail" src="images/quagmire.jpg">
		<p class="section_twelve_content">Since im not a real pro in web design, I love to use these ready-made and beautifully looking templates. They are <br> avalible at very affordable prices and they save you alot of time, and deliver from a lot of sweat and tears!</p>
		<p class="section_twelve_names">JANE SMITH</p>
	</div>
</section>
<!------------------SECTION TWELVE - "WHAT PEOPLE SAY"--------------------->






<!------------------SECTION THIRTEEN - "OUR CLIENTS"--------------------->
<section class="logo_section">
	<h4 class="thirteen_logo_title">OUR CLIENTS</h4>
	<hr class="thirteen_logo_hr">
<div class="container">
	<div class="row" id="logo_row_one">
		<div class="col-md-3">
			<img class="logo_one" src="images/LOGO1.png">
		</div>
		<div class="col-md-3">
			<img class="logo_two" src="images/LOGO2.png">
		</div>
		<div class="col-md-3">
			<img class="logo_three" src="images/LOGO3.png">
		</div>
		<div class="col-md-3">
			<img class="logo_four" src="images/LOGO4.png">
		</div>
	</div>


	<div class="row" id="logo_row_two">
		<div class="col-md-3">
			<img class="logo_five" src="images/LOGO5.png">
		</div>
		<div class="col-md-3">
			<img class="logo_six"src="images/LOGO6.png">
		</div>
		<div class="col-md-3">
			<img class="logo_seven" src="images/LOGO7.png">
		</div>
		<div class="col-md-3">
			<img class="logo_eight" src="images/LOGO8.png">
		</div>
	</div>
</div>

</section>
<!------------------SECTION THIRTEEN - "OUR CLIENTS"--------------------->
































	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'underscores_modern_theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

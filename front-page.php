<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<section class="hero">
				<div class="teaser whiskey-bar">
					<a class="tab" href="#whiskey-bar">Whiskey Bar</a>
				</div>
				<div class="teaser">
					<a class="tab diner" href="#diner">Diner</a>
				</div>
				<div class="teaser">
					<a class="tab crimson-view" href="#crimson-view">Crimson View</a>
				</div>
			</section>

			<section class="intro">
				<h1>Crimson [e]</h1>
				<ul class="inline-nav">
					<li>Whiskey Bar</li>
					<li>Diner + Coffee Bar</li>
					<li>Rooftop View</li>
				</ul>
				<p>Located in the Pod Hotel DC, lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nisl tortor, fermentum vel lorem ac, porta efficitur est. Suspendisse at felis tortor.[e]</p>
				<p><a href="https://goo.gl/maps/KxUj9s1df3P2" target="blank">627 H St NW, Washington, DC 20001 [e]</a></p>
				<a class="gold-btn lg" href="https://goo.gl/maps/KxUj9s1df3P2">Directions</a>
			</section>

			<!-- repeater w/min and max 3 -->
			<section class="concept-header" id="crimson-view" style="background-image: ;">
				<h2>Crimson View</h2>
				<p class="ko">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at felis tortor porta efficitur est.</p>
				<a class="gold-arrow-down" href="#">More</a>
			</section>
			<section class="concept-details">
				<div class="desc">
					<h3>Breakfast. Lunch. Dinner. All day long</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nisl tortor, fermentum vel lorem ac, porta efficitur est. Suspendisse at felis tortor. Vivamus a odio sed neque gravida dictum in vel nisi. Vestibulum tellus tortor, bibendum commodo tincidunt sed, tincidunt vitae nibh. Aenean faucibus libero vitae congue viverra.</p>
					<p>While we don’t take daily reservations, we can accomodate private parties of X or more guests. </p>
					<p><a href="#">Book an Event</a></p>
				</div>
				<div class="sidebar">
					<h4>Hours</h4>
					<p>
						Monday-Thursday: 6am-12am<br>
						Friday-Saturday: 6am-3am<br>
						Sunday: 6am-2am
					</p>
					<h4>Menus</h4>
					<a class="gold-btn sm" href="#">Full Menu</a>
					<a class="gold-btn sm" href="#">Bar Menu</a>
					<a class="gold-btn sm" href="#">Coffee</a>
				</div>
			</section>

			<section class="insta-feed">
				<h2>Keep up with Crimson</h2>
				<ul>
					<li>[img]</li>
					<li>[img]</li>
					<li>[img]</li>
					<li>[img]</li>
					<li>[img]</li>
				</ul>
				<div class="social-links">
					<a class="insta" href="#" title="Follow Crimson on Instagram" target="blank">insta</a>
					<a class="fb" href="#" title="Like Crimson on Facebook" target="blank">facebook</a>
					<a class="tw" href="#" title="Follow Crimson on Twitter" target="blank">twitter</a>
				</div>
			</section>
			<section class="private-events" id="private-events">
				<h2>Private Events</h2>
				<p class="ko">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet sapien sodales mauris ornare tincidunt sit amet et felis. Cras viverra turpis vel lacinia tristique. 
				</p>
				<a class="gold-btn lg" href="#">Book an Event</a>
			</section>
			<section class="map">
				[map]
			</section>
		<?php endwhile; ?>		
	<?php endif; ?>
		
<?php get_footer(); ?>

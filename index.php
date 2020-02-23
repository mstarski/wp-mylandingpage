<?php 
/* Template Name: MLPHomepage */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<?php get_header(); ?>

	<body>
		<nav class="header">
			<span class="header__company-name">Agency</span>
			<div id="hamburger" class="header__menu-btn">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header__rightside header__rightside--md">
				<div id="close-menu" class="header__close-menu-btn">
					<i class="fa fa-times-circle"></i>
				</div>
				<ul class="header__navigation">
					<li class="header__navigation-item">
						<a href="#">Home</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">About us</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">Team</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">Services</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">Process</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">Clients</a>
					</li>
					<li class="header__navigation-item">
						<a href="#">Work</a>
					</li>
				</ul>
				<div class="header__icons header__icons--md">
					<i class="fa fa-search"></i>
					<i class="fa fa-facebook"></i>
				</div>
			</div>
		</nav>

		<section class="section-1">
			<div class="section-1__banner">
				<h1 class="section-1__header">
					<?php echo get_theme_mod('header_content') ?>
				</h1>
				<button class="section-1__button btn btn--primary">
					<?php echo get_theme_mod('header_cta_content') ?>
				</button>
			</div>
			<div class="section-1__model"></div>
		</section>

		<section class="section-2">
			<div class="section-2__leftside">
				<div class="section-2__text">
					<div class="section-2__triangle"></div>
					<h2 class="section-2__title">Who are we</h2>
					<p class="section-2__description">
						Sed ut perspiciatis unde omnis iste natus error sit
						voluptatem accusantium doloremque laudantium, totam
						remaperiam, eaque ipsa quae ab illo inventore veritatis
						et quas architecto beatae vitae dicta sunt explicabo.
					</p>
					<button class="section-2__button btn btn--secondary">
						Read more
					</button>
				</div>
			</div>
			<div class="section-2__macbook"></div>
		</section>

		<section class="section-3">
			<div class="triangle-1"></div>
			<h2 class="section-3__title">What do we do</h2>
			<ul class="section-3__list">
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
				<li class="section-3__list-item">
					<div class="col col--right">
						<div class="circle"></div>
					</div>
					<div class="col col--left">
						<h3 class="title">
							Lorem fucking ipsum.
						</h3>
						<p class="description">
							Dedicate yourself to lifelong fucking learning. If
							you’re not being fucking honest with yourself how
							could you ever hope to communicate something
							meaningful to someone else?
						</p>
					</div>
				</li>
			</ul>
		</section>

		<div class="triangle-2"></div>
		<div class="triangle-3"></div>

		<section class="section-4">
			<h2 class="section-4__title">How we work</h2>
			<div class="section-4__content">
				<div class="col col--right">
					<p class="section-4__description">
						Dedicate yourself to lifelong fucking learning. If
						you’re not being fucking honest with yourself how could
						you ever hope to communicate something meaningful to
						someone else?
					</p>
					<button class="btn btn--secondary">Read more</button>
				</div>
				<div class="col col--left">
					<ul class="section-4__step-list">
						<li
							style="background-image: url('wp-content/themes/mylandingpage/assets/block-1.jpg')"
							class="section-4__step-list-item"
						>
							<span class="item-number">1.</span>
							<h3 class="item-title">Idea</h3>
							<p class="item-description">
								Dedicate yourself to lifelong fucking learning.
								If you’re not being fucking honest with
								yourself.
							</p>
						</li>
						<li
							style="background-image: url('wp-content/themes/mylandingpage/assets/block-2.jpg')"
							class="section-4__step-list-item"
						>
							<span class="item-number">2.</span>
							<h3 class="item-title">Design</h3>
							<p class="item-description">
								Dedicate yourself to lifelong fucking learning.
								If you’re not being fucking honest with
								yourself.
							</p>
						</li>
						<li
							style="background-image: url('wp-content/themes/mylandingpage/assets/block-3.jpg')"
							class="section-4__step-list-item"
						>
							<span class="item-number">3.</span>
							<h3 class="item-title">Output</h3>
							<p class="item-description">
								Dedicate yourself to lifelong fucking learning.
								If you’re not being fucking honest with
								yourself.
							</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="section-5">
			<div class="section-5__wrapper">
				<h2 class="section-5__header">Our creative team</h2>
				<div id="s5carousel" class="section-5__carousel">
					<div
						style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-1.png')"
						class="section-5__team-member"
					>
						<div class="overlay"></div>
						<div class="nametag">
							<div class="badge badge--primary">
								<span>John Doe</span>
							</div>
							<div class="badge badge--secondary">
								<span>Product Owner</span>
							</div>
						</div>
					</div>

					<div
						style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-2.png')"
						class="section-5__team-member"
					>
						<div class="overlay"></div>
						<div class="nametag">
							<div class="badge badge--primary">
								<span>Jimmy Doe</span>
							</div>
							<div class="badge badge--secondary">
								<span>Designer</span>
							</div>
						</div>
					</div>

					<div
						class="section-5__team-member"
						style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-3.png')"
					>
						<div class="overlay"></div>
						<div class="nametag">
							<div class="badge badge--primary">
								<span>Jane Doe</span>
							</div>
							<div class="badge badge--secondary">
								<span>Frontend Developer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-6">
			<div class="triangle-6"></div>

			<h2 class="section-6__header">What do clients say</h2>
			<div class="section-6__content">
				<div class="section-6__client-photo">
					<div class="overlay"></div>
				</div>
				<div class="section-6__rightside">
					<div class="section-6__quote">
						<blockquote>
							<p class="quote"></p>
						</blockquote>
						<span class="section-6__quote-author"></span>
					</div>
					<ul class="section-6__client-thumbnails">
						<li
							style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-1.png')"
							data-index="1"
							data-quote="Kek."
							data-name="Mark Zuckerberg, Facebook CEO"
							class="section-6__client-thumbnail"
						></li>
						<li
							data-quote="10/10, would destroy IT again"
							data-name="Bill Gates, Microsoft"
							style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-2.png')"
							data-index="2"
							class="section-6__client-thumbnail"
						></li>
						<li
							data-name="That indian CEO of Google"
							data-quote="
								Widows and orphans are terrible fucking
								tragedies, both in real life and definitely in
								typography. Why are you fucking reading all of
								this? Get back to work. When you design, you
								have to draw on your own fucking life
								experiences. If it’s not something you would
								want to read/look at/use then why fucking
								bother?"
							style="background-image: url('wp-content/themes/mylandingpage/assets/stock-person-3.png')"
							data-index="3"
							class="section-6__client-thumbnail"
						></li>
					</ul>
				</div>
			</div>
		</section>
		<div class="triangle-4"></div>

		<?php get_footer(); ?>

		<?php wp_footer(); ?>
		<script
			type="text/javascript"
			src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
		></script>
	</body>	
</html>


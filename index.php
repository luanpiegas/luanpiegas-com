<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="I am a brazilian Front-End Developer, currently working at Blacksmith Agency from Phoenix, Arizona. Welcome to my portfolio of WordPress and WooCommerce projects!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Luan Piegas &mdash; WordPress / WooCommerce Developer</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=1">
	<?php wp_head(); ?>
</head>
<body>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-32V2VTC9E4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-32V2VTC9E4');
	</script>
	
	<div class="app">

		<div class="cardList">
			<button class="cardList__btn btn btn--left">
				<div class="icon">
					<svg>
						<use xlink:href="#arrow-left"></use>
					</svg>
				</div>
			</button>

			<div class="cards__wrapper">

				<?php 

					// first post
	
					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 0
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
					<div class="card current--card">
						<a href="<?php the_field( 'link' ); ?>">
							<div class="card__image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
							</div>
						</a>
					</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>

				<?php 

					// second post					

					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 1
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
					<div class="card next--card">
						<a href="<?php the_field( 'link' ); ?>">
							<div class="card__image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
							</div>
						</a>
					</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>

				<?php 

					// third post
	
					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 2
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
					<div class="card previous--card">
						<a href="<?php the_field( 'link' ); ?>">
							<div class="card__image">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
							</div>
						</a>
					</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>

			</div>

			

			<button class="cardList__btn btn btn--right">
				<div class="icon">
					<svg>
						<use xlink:href="#arrow-right"></use>
					</svg>
				</div>
			</button>
		</div>

		<div class="infoList">
			<div class="info__wrapper">

				<?php 

					// first post

					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 0
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
				
				<div class="info current--info">
					<h2 class="text name"><?php the_title(); ?></h2>
					<h4 class="text location"><?php the_date(); ?></h4>
					<div class="text description">
						<strong><?php the_field( 'client' ); ?></strong>
						<?php the_excerpt(); ?>
					</div>
				</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>

				<?php 

					// second post

					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 1
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
				
				<div class="info next--info">
					<h2 class="text name"><?php the_title(); ?></h2>
					<h4 class="text location"><?php the_date(); ?></h4>
					<div class="text description">
						<strong><?php the_field( 'client' ); ?></strong>
						<?php the_excerpt(); ?>
					</div>
				</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>
				
				<?php 

					// third post

					$query = new WP_Query([
						'post_type' => 'work',
						'posts_per_page' => 1,
						'offset' => 2
					]);

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
				?>
				
				<div class="info previous--info">
					<h2 class="text name"><?php the_title(); ?></h2>
					<h4 class="text location"><?php the_date(); ?></h4>
					<div class="text description">
						<strong><?php the_field( 'client' ); ?></strong>
						<?php the_excerpt(); ?>
					</div>
				</div>

				<?php 
					wp_reset_postdata();
					endwhile;
					endif;
				?>

			</div>
		</div>

		<div class="app__bg">

			<?php 

				// first post

				$query = new WP_Query([
					'post_type' => 'work',
					'posts_per_page' => 1,
					'offset' => 0
				]);

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
			?>

			<div class="app__bg__image current--image">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
			</div>

			<?php 
				wp_reset_postdata();
				endwhile;
				endif;
			?>
			
			<?php 

				// second post

				$query = new WP_Query([
					'post_type' => 'work',
					'posts_per_page' => 1,
					'offset' => 1
				]);

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
			?>

			<div class="app__bg__image next--image">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
			</div>

			<?php 
				wp_reset_postdata();
				endwhile;
				endif;
			?>
			
			<?php 

				// third post

				$query = new WP_Query([
					'post_type' => 'work',
					'posts_per_page' => 1,
					'offset' => 2
				]);

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post()
			?>

			<div class="app__bg__image previous--image">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
			</div>

			<?php 
				wp_reset_postdata();
				endwhile;
				endif;
			?>
			
		</div>

	</div>

	<div class="loading__wrapper">
		<div class="loader--text">Hello, welcome to my portfólio...</div>
		<div class="loader">
			<span></span>
		</div>
	</div>


	<svg class="icons" style="display: none;">
		<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
			<polyline points='328 112 184 256 328 400'
						style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
		</symbol>
		<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
			<polyline points='184 112 328 256 184 400'
						style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
		</symbol>
	</svg>
	
	<?php wp_footer(); ?>

	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
</body>
</html>
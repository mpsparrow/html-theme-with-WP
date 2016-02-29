<title>Matthew's Blog - Blog</title>
<link rel="stylesheet" href="css/style.css">
<link rel="html" href="header.html">
<html>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		<div id="main-body" class="main-body">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-single">
				<div class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<span class="post-time"><?php the_time('F j, Y'); ?></span>
					<?php if(get_the_author() != "adam"): ?>, by <span class="post-author"><?php the_author_posts_link() ?></span><?php endif; ?>
					</span>
				</div>
			</div><!--.post-single-->
		<?php endwhile; else: ?>
			<div class="no-results">
				<p><strong>There has been an error.</strong></p>
				<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
				<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
			</div><!--noResults-->
		<?php endif; ?>

		</div>
	</body>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</html>
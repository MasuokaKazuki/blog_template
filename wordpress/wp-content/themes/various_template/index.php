<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php 
    	while (have_posts()) : the_post(); ?>
		<div class="main_contents">
			<article class="entry_body">
				<header class="entry_header">
					<?php 
						$img_id = "";
						if(in_category('2')){
							$img_id = "01";
							$cate_id = "2";
						}elseif(in_category('3')){
							$img_id = "02";		
							$cate_id = "3";
						}elseif(in_category('4')){
							$img_id = "03";		
							$cate_id = "4";
						}
					?>
					<a href="./?cat=<?php echo $cate_id; ?>">
						<img src="<?php bloginfo('template_directory'); ?>/common/image/icon_<?php echo $img_id; ?>.png" alt="Category:カテゴリー" />
					</a>
					<div class="entry_title">
						<time datetime="<?php the_time('Y-m-j') ?>">
							<span class="entry_year"><?php the_time('Y') ?></span>
							<span class="entry_date"><?php the_time('m.j') ?></span>
						</time>
						<h1>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h1>
					</div>
				</header><!--.entry_header-->

				<section class="entry_paragraph">
					<?php the_content('+ 続きを見る'); ?>
				</section><!--.entry_paragraph-->

				<footer class="entry_footer footer_color<?php echo $img_id; ?>">
					<a href="<?php comments_link('file', display); ?>">コメント(<?php echo get_comments_number(); ?>)</a>
				</footer><!--.entry_footer-->
			</article><!--.entry_body-->
		</div>
<?php
	if( is_singular('post') ) {
	    comments_template();
	}
?>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<div id="nextprev">
	<?php previous_posts_link('« 前のページ');?>
	<?php next_posts_link('次のページ»'); ?>
</div>
<?php get_footer(); ?>

	<footer id="site_footer">
		<div class="wrapper">
			<div class="footer_block">
				<section>
					<h1>プロフィール</h1>
					<article id="profile_article">
						<img src="<?php bloginfo('template_directory'); ?>/common/image/photo.jpg" width="60px" height="60px" alt="プロフィール画像" />
						<span id="name">Masuoka Kazuki</span>
						<span id="description">WEBに関する仕事をしてるよ。</span>
					</article>
				</section>
			</div>
			<div class="footer_block">
				<section>
					<h1>カテゴリ</h1>
					<ul>
						<li><a href="./?cat=2">Diary</a></li>
						<li><a href="./?cat=3">Program</a></li>
						<li><a href="./?cat=4">Music</a></li>
					</ul>
				</section>
			</div>
			<div class="footer_block">
				<section>
					<h1>最近の投稿</h1>
					<ul>
			<?php
				query_posts(
					Array('post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC')
				);
				if (have_posts()) : while (have_posts()) : the_post();
			?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> (<?php the_time('m/j') ?>)</a></li>
			<?php
				endwhile; endif;
				wp_reset_query();
			?>
					</ul>
				</section>
			</div>
			<div class="footer_block">
				<section>
					<h1>月別アーカイブ</h1>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</section>
			</div>
			<div style="float:left; width:100%; text-align:center; font-size:14px;">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
			</div>
		</div>
	</footer><!--#site_footer-->
</body>
</html>
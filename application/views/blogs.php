<div id="content_bar">
	<div id="container">
		<div id="blog_container">
			<div id="blog_card">
				<?php foreach ($blogs as $index => $blog_info): ?>
					<div id="blog_title"><?php echo $blog_info['title']; ?></div>
					<div id="blog_desc"><?php echo $blog_info['description']; ?></div>
					<a id="read_more_btn">Read more</a>
					<div id="blog_date"><?php echo $blog_info['createdon']; ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
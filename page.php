<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<a href="<?php echo $page->permalink() ?>">
			<h1 class="page-title"><?php echo $page->title() ?></h1>
		</a>
		<div class="page-date"><?php echo $page->date() ?></div>

		<div class="page-content">
		<?php echo $page->content() ?>
		</div>

		<?php Theme::plugins('pageEnd'); ?>
	</div>
</article>
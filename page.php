<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<a href="<?php echo $page->permalink() ?>">
			<h1 class="page-title m-0"><?php echo $page->title() ?></h1>
		</a>
		<div class="page-date mb-3"><?php echo $page->date() ?></div>

		<div class="page-content mb-5">
		<?php echo $page->content() ?>
		</div>

		<?php Theme::plugins('pageEnd'); ?>
	</div>
</article>
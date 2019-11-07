<?php defined('BLUDIT') or die('Bludit CMS.'); ?>
<article class="doc__content">
<?php if (empty($content)): ?>
<p>There's no content yet.</p>
<?php endif; ?>

<?php foreach ($content as $page): ?>
	<div class="page">
		<?php Theme::plugins('pageBegin') ?>

		<a href="<?php echo $page->permalink() ?>">
			<h2 class="page-title m-0"><?php echo $page->title() ?></h2>
		</a>
		<div class="page-date mb-3"><?php echo $page->date() ?></div>

		<div class="page-content">
		<?php echo $page->contentBreak() ?>
		</div>

		<?php Theme::plugins('pageEnd') ?>
	</div>
	<?php if ($page->readMore()): ?>
		<a class="read-more" href="<?php echo $page->permalink() ?>">Read more</a>
	<?php endif; ?>
	<hr>
<?php endforeach; ?>

<div class="clearfix">
<?php
	if (Paginator::showNext()) {
		echo '<a class="btn btn-primary float-left" href="'.Paginator::nextPageUrl().'">&larr; '.$language->get('Previous page').'</a>';
	}

	if (Paginator::showPrev()) {
		echo '<a class="btn btn-primary float-right" href="'.Paginator::previousPageUrl().'">'.$language->get('Next page').' &rarr;</a>';
	}
?>
</div>

</article>

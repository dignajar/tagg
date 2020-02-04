<?php defined('BLUDIT') or die('Bludit CMS.');
/*
	Template for a page.
	Variables defined from Bludit:
		- $page (page object for the current page)
*/
?>

<!--
	Plugins configured before the pages
-->
<?php Theme::plugins('pageBegin') ?>

<!--
	Page
-->
<article class="page">
	<a href="<?php echo $page->permalink() ?>">
		<h1 class="page-title m-0"><?php echo $page->title() ?></h1>
	</a>
	<div class="page-date mb-3"><?php echo $page->date() ?> <?php echo ($page->dateModified()?' - <i>Last updated: '.$page->dateModified().'</i>':'')?></div>

	<div class="page-content mb-5">
	<?php echo $page->content() ?>
	</div>
</article>

<!--
	Next and previous page only if they are defined
-->
<div class="clearfix">
<?php
	if ($page->previousKey()) {
		$previousPage = buildPage($page->previousKey());
		echo '<a class="btn btn-primary float-left" href="'.$previousPage->permalink().'">&larr; '.$previousPage->title().'</a>';
	}

	if ($page->nextKey()) {
		$nextPage = buildPage($page->nextKey());
		echo '<a class="btn btn-primary float-right" href="'.$nextPage->permalink().'">'.$nextPage->title().' &rarr;</a>';
	}
?>
</div>

<!--
	Plugins configured after the pages
-->
<?php Theme::plugins('pageEnd') ?>

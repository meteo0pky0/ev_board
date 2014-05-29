<div class="col-md-10">	
	<article>
		<h1><?=$topic->title?></h1>
		<div>
			<?=kdate($topic->created)?>
			<?=$topic->description?>
		</div>
	</article>
	<div>
		<a href="<?EV_PATH?>/index.php/topic/add" class="btn btn-primary">추가</a>
	</div>
</div>
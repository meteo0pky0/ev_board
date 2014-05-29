<div class="col-md-2">
	<div class="list-group">
		<?php
		//var_dump($topics);
		foreach($topics as $entry){
		?>
		<a href="/index.php/topic/get/<?=$entry->id?>" class="list-group-item"><?=$entry ->title?></a>
		<?
		}
		?>
	</div>
</div>
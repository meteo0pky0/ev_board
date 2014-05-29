<form action="<?EV_PATH?>/index.php/topic/add" method ="post" class="col-md-10" >
	<?php echo validation_errors(); ?>
	<div class="form-group">
	<input type="text" name ="title" placeholder="제목"  class="form-control" />
	</div>
	<div class="form-group">
	<textarea name="description" placeholder="본문"  class="form-control" rows ="15"></textarea>
	</div>
	<div class="form-group">
	<input type='submit' class="btn btn-default">
	</div>
</form>
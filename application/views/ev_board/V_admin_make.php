<!--작성 관리자 = 이메일주소, 페스워드md5 ,페스워드확인,아이디,닉네임-->
<!--자바스크립트 답제하여 관리자 패스워드 확인 체크-->



<form name="admin_add" action="<?=EV_PATH?>/index.php/ev_board/C_make/db_make" method="post">
	<div class="input-group ">
	  <span class="input-group-addon">관리자 ID  </span>
	  <input type="text" class="form-control" placeholder="admin ID" name="ev_id">
	</div>
	</br>
	<div class="input-group">
	  <span class="input-group-addon">관리자 PW </span>
	  <input type="password" class="form-control" placeholder="admin PW" name="ev_pw">
	</div>
	</br>
	<div class="input-group">
	  <span class="input-group-addon">PW 확인 </span>
	  <input type="password" class="form-control" placeholder="PW rewrite" name="ev_pw_re">
	</div>
	</br>
	<div class="input-group">
	  <span class="input-group-addon">닉 네 임 </span>
	  <input type="text" class="form-control" placeholder="nick name" name="ev_nick">
	</div>
	</br>
	<div class="row">
		<div class="col-md-6">
			<div class="input-group">
			  <span class="input-group-addon">email </span>
			  <input type="text" class="form-control" placeholder="email"name="ev_email" >
			</div>
		</div>
		<div class="col-md-6">
			<select class="form-control" name="ev_email_last">
			  <option value ="gmail.com">gmail.com</option>
			  <option value ="hotmail.net">hotmail.net</option>
			 </select>
		 </div>
	</div>
	<input type="submit" name ="ok">
</form>

<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');
$db = new Db();
$crypt = new Crypt();
$user = $db->getUser($_GET['userid']);

    ?>
<input id="update_user_id" type="hidden" value="<?=$user->id?>">
<div><input id="update_user_firstname" class="form-control" type="text" value="<?=$user->first_name?>"></div>
<div><input id="update_user_lastname" class="form-control" type="text" value="<?=$user->last_name?>"></div>
<div><input id="update_user_personalid" class="form-control" type="text" placeholder="(YYYYMMDD-XXXX)" value="<?=$crypt->simple_decrypt($user->personal_id)?>"></div>
<div><input id="update_user_employmentdate" class="form-control" type="date"  value="<?=$user->employment_date?>" placeholder="Datum (YYYY-MM-DD)"></div>
<div>
	<span class="glyphicon glyphicon-ok glyphIconBig clickable" onclick="updateUser()"></span>
	<span class="glyphicon glyphicon-trash glyphIconBig clickable" style="float:right"  onclick="deleteUser()"></span>
</div>

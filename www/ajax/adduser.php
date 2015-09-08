<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');

    ?>
	<div class="popupHeader">Skapa persondata</div>
	<div><input id="create_user_firstname" class="form-control" type="text" placeholder="Förnamn"></div>
	<div><input id="create_user_lastname" class="form-control" type="text" placeholder="Efternamn"></div>
	<div><input id="create_user_personalid" class="form-control" type="text" placeholder="Personnummer(yyyymmdd-xxxx)"></div>
	<div><input id="create_user_employmentdate" class="form-control" type="date" placeholder="Datum (YYYY-MM-DD)"></div>
	<div>
		<span class="glyphicon glyphicon-ok glyphIconBig" style="cursor:pointer" onclick="addUser()"></span>
	</div>

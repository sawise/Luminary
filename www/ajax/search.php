<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/includes.php');

$searchresult = '';
$searchstring = $_GET['searchstring'];
 if (isset($_GET['searchstring'])) {
 	$db = new Db();
 	$crypt = new Crypt();
 	$searchstring = $_GET['searchstring'];	
    $searchresult = $db->search($searchstring);
  }  ?>
  <table class="table table-hover">
  	 <thead>
	    <tr>
	      <th>Förnamn</th>
	      <th>Efternamn</th>
	      <th>Personnummer</th>
	      <th>Anställningsdatum</th>
	    </tr>	
    </thead>
     <tbody>
	<?php
		foreach($searchresult AS $searchitem)
		{ ?>
			<tr title="Klicka för att redigera" class="clickable" onclick="toggleEdit(<?=$searchitem->id?>)">
		      <td><?=$searchitem->first_name?></td>
		      <td><?=$searchitem->last_name?></td>
		      <td><?=$crypt->simple_decrypt($searchitem->personal_id)?></td>
		      <td><?=$searchitem->employment_date?></td>
		    </tr>		 
		<?php
		}
        ?>
    </tbody>
</table>


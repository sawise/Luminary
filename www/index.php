<!DOCTYPE html>

<?php
  require_once('../config.php');
  require_once(ROOT_PATH.'/includes.php');
?>
<head>
  <meta charset="utf-8" /> 
  <title>Sams persondatabas</title>
  <script src="js/jquery-2.0.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <LINK REL="SHORTCUT ICON" HREF="img/favico.png">
</head>
<body onload="pageLoaded()">

  <div id="shadow" class="shadow hideWithShadow clickable" onclick="hideShadow()"></div>
  <div id="editUser" class="popup hideWithShadow"></div>
  <div id="addUser" class="popup hideWithShadow"></div>

    <div class="container centered mainDiv">
      <div class="row-fluid">
        <div class="span12">
          <div class="addUser">
            <span class="glyphicon glyphicon-plus glyphIconBig clickable" onclick="toggleAdd()"></span>
          </div>
            <div class="searchInput">
              <input id="search" name="search" type="text" placeholder="Sök..." onkeyup="searchUsers(this)" class="input-xxlarge search-query" style="width: 80%">
            </div>
          <div id="searchresult"></div>
        </div>
      </div>


</body>




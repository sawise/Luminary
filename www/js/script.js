function showHideDiv(div1, div2){
    var x = document.getElementById(div1);
    var y = document.getElementById(div2);

    if(x.style.display == 'none'){
        x.style.display = 'block';
        y.style.display = 'none';
    } else {
        x.style.display = 'none';
         y.style.display = 'block';
    }

    return false;
}

function searchUsers(input){
    var str=$(input).val();
    if(/\s/g.test(str)){ // If there are whitespaces it will replace it will __ and search for firstname and lastname
        var strsplit = str.split(/[ ,]+/);
        str = strsplit[0]+"__"+strsplit[1];
    }
    
    if(str.length < 2) {
        str = 0; //if string is 0 it will show all data
    }
    $("#searchresult").load("ajax/search.php?searchstring="+str);
}

function toggleEdit(userID){
    $("#editUser").load("ajax/edituser.php?userid="+userID,function(){
        $("#editUser").slideToggle("fast");
        $("#shadow").fadeToggle("fast");
    });
}

function toggleAdd(){
    $("#editUser").load("ajax/adduser.php",function(){
        $("#editUser").slideToggle("fast");
        $("#shadow").fadeToggle("fast");
    });
}

function updateUser(){
    if( $("#update_user_firstname").val().length == 0 ||
        $("#update_user_lastname").val().length == 0 ||
        $("#update_user_personalid").val().length == 0 ||
        $("#update_user_employmentdate").val().length == 0){
        alert("Du måste fylla i alla fälten!");
    }else if( $("#update_user_personalid").val().length == 11 ||
        $("#update_user_personalid").val().length == 10) {
        alert("Personnumret ska skrivas såhär: YYYYMMDD-XXXX");
    } else {
        $.post("ajax/sendupdateuser.php",
        {
          id: $("#update_user_id").val(),
          firstname: $("#update_user_firstname").val(),
          lastname: $("#update_user_lastname").val(),
          personalid: $("#update_user_personalid").val(),
          employmentdate: $("#update_user_employmentdate").val()
        },
        function(){
            hideShadow();
            pageLoaded();
        });
    }
}

function addUser(){
    if($("#create_user_firstname").val().length == 0 ||
        $("#create_user_lastname").val().length == 0 ||
        $("#create_user_personalid").val().length == 0 ||
        $("#create_user_employmentdate").val().length == 0 ){
        alert("Du måste fylla i alla fälten!")
    } else if( $("#create_user_personalid").val().length == 11 ||
        $("#create_user_personalid").val().length == 10) {
        alert("Personnumret ska skrivas såhär: YYYYMMDD-XXXX");
    } else{
        $.post("ajax/sendcreateuser.php",
        {
          firstname: $("#create_user_firstname").val(),
          lastname: $("#create_user_lastname").val(),
          personalid: $("#create_user_personalid").val(),
          employmentdate: $("#create_user_employmentdate").val()
        },
        function(){
            hideShadow();
            pageLoaded();
        });    
    }
    
}

function deleteUser(){
    if(confirm("Vill du verkligen ta bort användaren?")){
        $.post("ajax/deleteuser.php",
        {
          id: $("#update_user_id").val()
        },
        function(){
            hideShadow();
            pageLoaded();
        });    
    }
}

function validatePersonalId(personalId){
    alert(personalId.length);
    return false;
}

function hideShadow(){
    $(".hideWithShadow").fadeOut("fast");
}

function pageLoaded(){
    $("#searchresult").load("ajax/search.php?searchstring=0",function(){
        $("#searchresult").slideDown("fast");
    });
}

<div class="clear">&nbsp;</div>

<!-- start content-outer -->
<div id="content-outer">
    <!-- start content -->
    <div id="content">
        <div id="page-heading"><h1>Ajouter Manager</h1></div>
            <!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">

			<!--  start table-content  -->
			<div id="table-content">

                            <div style="float: left;" class="loader"><img src="images/ajax-loader.gif" alt="Loading..." title="Loading..." id="loading" style="display:none" /></div><div style="float: left; margin-left:5px;" id="info"><p>Veuillez remplir le formulaire pour l'ajout d'un Collaborateur ..</p><div id="error" style="color: red; display:none"></div><br /></div>
                            <div class="clear">&nbsp;</div>
                            <img src="images/arrow-right.jpg" alt="Add This" title="Add This .." id="arrow-right" style="float:right; opacity: .6; display: none; margin: 15px 50px 0 0;" />
                            <a href="index.php?module=collab&option=add" class="addnew" id="addnew" style="display: none;">Ajouter un autre Collaborateur</a>
                            <!-- start id-form -->
                                <form id="add-collab" action="" method="POST">
                                    <fieldset style="float: left; padding: 10px 10px 0 10px;">
                                        <legend style="color: red;">Account Information</legend>
                                        <table border="0" cellpadding="" cellspacing="" class="id-form">
                                            <tbody>
                                                <tr>
                                                    <th valign="top">Login :</th>
                                                    <td><input name="login" type="text" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Password :</th>
                                                    <td><input name="pwd1" type="password" required="required" id="pwd1" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Retype Password :</th>
                                                    <td><input name="pwd2" type="password" required="required" id="pwd2" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">E-Mail :</th>
                                                    <td><input name="email" type="email" required="required" id="email" /></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Service :</th>
                                                    <td><input name="id-service" type="text" required="required" id="id-service" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Account State :</th>
                                                    <td><div style="float: left;"><input name="state" type="radio" value="1" id="active_acc" required="required" />&nbsp; <label class="radio-label" for="active_acc"><b>Active</b></label></div><div style="float:left; margin-left: 20px;"><input name="state" type="radio" value="0" required="required" id="inactive_acc" />&nbsp <label class="radio-label" for="inactive_acc"><b>Inactive</b></label></div></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                     </fieldset>
                                    <fieldset style="float: right; padding: 10px 10px 0 10px;" class="sectionwrap">
                                        <legend style="color: red">Contact Information</legend>
                                        <table border="0" cellpadding="" cellspacing="" class="id-form">
                                            <tbody>
                                                <tr>
                                                    <th valign="top">Nom :</th>
                                                    <td><input name="nom" type="text" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Prenom :</th>
                                                    <td><input name="prenom" type="text"  required="required"/></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Genre :</th>
                                                    <td><div style="float: left;"><input name="genre" type="radio" value="Homme" required="required" id="male-gender" />&nbsp; <label class="radio-label" for="male-gender"><b>Homme</b></label></div><div style="float:left; margin-left: 20px;"><input name="genre" type="radio" value="Femme" required="required" id="femal-gender" />&nbsp <label class="radio-label" for="femal-gender"><b>Femme</b></label></div></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Date de naissance :</th>
                                                    <td><input name="date_naiss" type="date"  required="required"/></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Etat Civil :</th>
                                                    <td><input name="etat_civil" type="text" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Adresse :</th>
                                                    <td><textarea name ="adresse" rows="3" cols="" class="form-textarea" required="required"></textarea></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">N° Telephone :</th>
                                                    <td><input name="ntel" id="ntel" type="text" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Diplôme :</th>
                                                    <td><input name="diplome" type="text" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                     </fieldset>
                                    <fieldset style="float: left; width: 337px; padding: 10px 10px 0 10px;" class="sectionwrap">
                                        <legend style="color: red">Professional Information</legend>
                                        <table border="0" cellpadding="" cellspacing="" class="id-form">
                                            <tbody>
                                                <tr>
                                                    <th valign="top">Année du Diplôme :</th>
                                                    <td><input name="annee_dip" id="annee_dip" type="number" maxlength="4" min="1931" required="required" /></td>
                                                    <td></td>
                                                </tr>
                                                <!-- <tr>
                                                    <th valign="top">Hire Date :</th>
                                                    <td><input name="hire" type="date" required="required" /></td>
                                                    <td></td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </fieldset>
                                    <input type="submit" name="submit" style="float: right; margin: 35px 50px 0px 15px; width: 100px;color: green;font-weight: bold;cursor: pointer;" value="Ajouter" />
                                    <input type="reset" value="" style="float: right; margin: 34px 0 0 0;" id="reset" class="form-reset" />
                                </form>
                            <!-- end id-form  -->
                            <div class="clear">&nbsp;</div>
                        </div>
			<!--  end content-table  -->

		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>
        </div>
        <!--  end content -->
        <div class="clear">&nbsp;</div>
</div>
<script type="text/javascript">
var d = new Date();
$("#annee_dip").attr("max", d.getFullYear());

$("#pwd1").blur(function() {
    if($("#pwd1").val()!=""){
        if($("#pwd2").val() != "") {
            if($("#pwd2").val()!=$("#pwd1").val()){
                  $("#pwd1").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
                  $("#pwd1").css("-moz-box-shadow", "0px 0px 5px #ff0000");
                  $("#pwd1").css("box-shadow", "0px 0px 5px #ff0000");
                  $("#pwd2").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
                  $("#pwd2").css("-moz-box-shadow", "0px 0px 5px #ff0000");
                  $("#pwd2").css("box-shadow", "0px 0px 5px #ff0000");
                  $("#error").html("");
                  $("#error").append("<p>Veuillez verifier la correspondences des mots de passes entrés !</p>").fadeIn("normal");
                  $("#pwd1").val("");
                  $("#pwd2").val("");
                  $("#pwd1").focus();
              }else {
                  $("#pwd1").css("-webkit-box-shadow", null);
                  $("#pwd1").css("-moz-box-shadow", null);
                  $("#pwd1").css("box-shadow", null);
                  $("#pwd2").css("-webkit-box-shadow", null);
                  $("#pwd2").css("-moz-box-shadow", null);
                  $("#pwd2").css("box-shadow", null);
                  $("#error").fadeOut("normal", function(){$("#error").html("");});
                  $("#email").focus();
              }
        } else {
            $("#pwd1").css("-webkit-box-shadow", null);
            $("#pwd1").css("-moz-box-shadow", null);
            $("#pwd1").css("box-shadow", null);
            $("#pwd2").css("-webkit-box-shadow", null);
            $("#pwd2").css("-moz-box-shadow", null);
            $("#pwd2").css("box-shadow", null);
            $("#error").fadeOut("normal", function(){$("#error").html("");});
            $("#pwd2").focus();
        }
    } else {
        $("#pwd1").focus();
    }
});

$("#pwd2").blur(function() {
  if($("#pwd2").val()!=$("#pwd1").val()){
      $("#pwd1").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
      $("#pwd1").css("-moz-box-shadow", "0px 0px 5px #ff0000");
      $("#pwd1").css("box-shadow", "0px 0px 5px #ff0000");
      $("#pwd2").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
      $("#pwd2").css("-moz-box-shadow", "0px 0px 5px #ff0000");
      $("#pwd2").css("box-shadow", "0px 0px 5px #ff0000");
      $("#error").html("");
      $("#error").append("<p>Veuillez verifier la correspondences des mots de passes entrés !</p>").fadeIn("normal");
      $("#pwd1").val("");
      $("#pwd2").val("");
      $("#pwd1").focus();
    }else {
      $("#pwd1").css("-webkit-box-shadow", null);
      $("#pwd1").css("-moz-box-shadow", null);
      $("#pwd1").css("box-shadow", null);
      $("#pwd2").css("-webkit-box-shadow", null);
      $("#pwd2").css("-moz-box-shadow", null);
      $("#pwd2").css("box-shadow", null);
      $("#error").fadeOut("normal", function(){$("#error").html("");});
      $("#email").focus();
  }
});

$("#email").blur(function(){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test($("#email").val())){
        $("#email").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
        $("#email").css("-moz-box-shadow", "0px 0px 5px #ff0000");
        $("#email").css("box-shadow", "0px 0px 5px #ff0000");
        $("#email").val("");
        $("#email").focus();
        $("#error").html("");
        $("#error").append("<p>Veuillez verifier l'adresse e-mail !</p>").fadeIn("normal");
    } else {
        $("#email").css("-webkit-box-shadow", null);
        $("#email").css("-moz-box-shadow", null);
        $("#email").css("box-shadow", null);
        $("#error").fadeOut("normal", function(){$("#error").html("");});
    }
});

$("#id-service").blur(function() {
    if(isNaN($("#id-service").val()) || $("#id-service").val()<=0){
        $("#id-service").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
        $("#id-service").css("-moz-box-shadow", "0px 0px 5px #ff0000");
        $("#id-service").css("box-shadow", "0px 0px 5px #ff0000");
        $("#error").html("");
        $("#error").append("<p>Veuillez verifier l'id du service \"doit être > 0\" !</p>").fadeIn("normal");
        $("#id-service").val("");
        $("#id-service").focus();
    } else{
        $("#id-service").css("-webkit-box-shadow", null);
        $("#id-service").css("-moz-box-shadow", null);
        $("#id-service").css("box-shadow", null);
        $("#error").fadeOut("normal", function(){$("#error").html("");});
    }
});

$("#ntel").blur(function() {
    if(isNaN($("#ntel").val())){
        $("#ntel").css("-webkit-box-shadow", "0px 0px 5px #ff0000");
        $("#ntel").css("-moz-box-shadow", "0px 0px 5px #ff0000");
        $("#ntel").css("box-shadow", "0px 0px 5px #ff0000");
        $("#error").html("");
        $("#error").append("<p>Veuillez verifier le numéro de téléphone !</p>").fadeIn("normal");
        $("#ntel").val("");
        $("#ntel").focus();
    } else{
        $("#ntel").css("-webkit-box-shadow", null);
        $("#ntel").css("-moz-box-shadow", null);
        $("#ntel").css("box-shadow", null);
        $("#error").fadeOut("normal", function(){$("#error").html("");});
    }
});

$('#add-collab').submit(function(){
        $("#info").fadeOut("fast", function(){$("#info").text("Processing ...")}).fadeIn("slow");
        $("#add-collab").fadeOut("fast", function(){$("#loading").fadeIn("normal");});
        $("#content-outer").height($("#sidebar").height());
        var collab = new Array(
                    $("input[name=login]").val(),
                    $("input[name=pwd1]").val(),
                    $("input[name=pwd2]").val(),
                    $("input[name=email]").val(),
                    $("input[name=id-service]").val(),
                    $("input[name=state]:checked").val(),
                    $("input[name=nom]").val(),
                    $("input[name=prenom]").val(),
                    $("input[name=genre]:checked").val(),
                    $("input[name=date_naiss]").val(),
                    $("input[name=etat_civil]").val(),
                    $("textarea[name=adresse]").val(),
                    $("input[name=ntel]").val(),
                    $("input[name=diplome]").val(),
                    $("input[name=annee_dip]").val()
                );
    var dataString = 'login='+ collab[0]
                     + '&pwd1=' + collab[1]
                     + '&pwd2=' + collab[2]
                     + '&email=' + collab[3]
                     + '&id-service=' + collab[4]
                     + '&state=' + collab[5]
                     + '&nom=' + collab[6]
                     + '&prenom=' + collab[7]
                     + '&genre=' + collab[8]
                     + '&date_naiss=' + collab[9]
                     + '&etat_civil=' + collab[10]
                     + '&adresse=' + collab[11]
                     + '&tel_mobile=' + collab[12]
                     + '&diplome=' + collab[13]
                     + '&annee_dip=' + collab[14]
                     + '&submit=true'
                     ;

        $.ajax({
                type: "POST",
                url: "admin/modules/collab/actions/addcollab.php",
                data: dataString,
                cache: false,
                success: function (a) {
                        if (a == 1) {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: green;\">Un nouveau compte Collaborateur vient d'etre ajouté.</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("normal");$("#arrow-right").fadeIn("normal");});
                        } else if(a == "test") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />No Submit !</p>")}).fadeIn("normal");
                        } else if(a == "login") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le login !</p>")}).fadeIn("normal");
                        } else if(a == "pwd") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le password !</p>")}).fadeIn("normal");
                        } else if(a == "email") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'adresse email !</p>")}).fadeIn("normal");
                        } else if(a == "nom") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le nom !</p>")}).fadeIn("normal");
                        } else if(a == "prenom") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le prenom</p>")}).fadeIn("normal");
                        } else if(a == "genre") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le genre !</p>")}).fadeIn("normal");
                        } else if(a == "id-service") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'id du service !</p>")}).fadeIn("normal");
                        } else if(a == "date_naiss") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez la date de naissance !</p>")}).fadeIn("normal");
                        } else if(a == "etat_civil") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'état civil !</p>")}).fadeIn("normal");
                        } else if(a == "adresse") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'adresse !</p>")}).fadeIn("normal");
                        } else if(a == "tel_mobile") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le Numéro de téléphone mobile</p>")}).fadeIn("normal");
                        } else if(a == "diplome") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez le diplome !</p>")}).fadeIn("normal");
                        } else if(a == "annee_dip") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'année du diplome !</p>")}).fadeIn("normal");
                        } else if(a == "state") {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! <br />Vérifiez l'état du compte !</p>")}).fadeIn("normal");
                        }else if(a == 0) {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Adresse e-mail utilisée par un autre collaborateur !</p>")}).fadeIn("normal");
                        }else {
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue !</p>")}).fadeIn("normal");
                        }
                }
        });
        return false;
});
</script>

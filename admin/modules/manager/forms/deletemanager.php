<div class="clear"></div>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Suppression de Collaborateurs</h1>
	</div>
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
                            <div style="float: left;" class="loader"><img src="images/ajax-loader.gif" alt="Loading..." title="Loading..." id="loading" style="display: none" /></div><div style="float: left; margin-left:5px; margin-bottom: 10px;" id="info">Veuillez valider la suppressions !</div>
                            <input type="button" style="float: left; cursor: pointer; width: 60px;margin: -7px 0 0 25px;" name="validsupp" id="valid_supp" value="Valider" />
                            <input type="button" style="float: left; cursor: pointer; width: 70px; margin: -7px 0 0 8px;" name="cancelsupp" id="cancel_supp" value="Annuler" />
                            <div class="clear">&nbsp;</div>
                            <img src="images/arrow-right.jpg" alt="Add This" title="Add This .." id="arrow-right" style="float:right; display: none; opacity: .6; margin: 15px 50px 0 0;" />
                            <a href="index.php?module=collab&option=list" class="addnew" id="addnew" style="left: 48%; display: none;">Lister Collaborateurs</a>
			</div>
			<!--  end content-table  -->

			<div class="clear"></div>

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
$("#content-outer").height($("#sidebar").height());
$("#cancel_supp").click(function(){
    document.location.href = "index.php?module=collab&option=list";
});

$("#valid_supp").click(function(){
    $("#valid_supp").hide();
    $("#cancel_supp").hide();
    $("#info").fadeOut("fast", function(){$("#info").text("Processing ...")}).fadeIn("slow");
    $("#content-outer").height($("#sidebar").height());

    var dataString = 'id='+ $.cookie("userstodelete");
    $.cookie("userstodelete", "",{expires: -30,path: '/'});

    $.ajax({
            type: "POST",
            url: "admin/modules/collab/actions/deletecollab.php",
            data: dataString,
            cache: false,
            success: function (a) {
                    if (a == 1) {
                            $("#loading").hide();
                            $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: green;\">Comptes Collaborateurs supprimés avec succès.</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("normal");$("#arrow-right").fadeIn("normal");});
                    } else if(a == 0) {
                            $("#loading").hide();
                            $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue ! Collaborateur introuvable dans la base!</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("normal");$("#arrow-right").fadeIn("normal");});
                    }else {
                            $("#loading").hide();
                            $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Une erreure est survenue !</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("normal");$("#arrow-right").fadeIn("normal");});
                    }
            }
    });
    return false;
});
</script>
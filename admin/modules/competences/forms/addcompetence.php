<div class="clear">&nbsp;</div>

<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Ajouter Competence</h1></div>


<table border="0" width="100%"  id="content-table">
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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" >
	<tr valign="top">
	<td>
	
		<!-- start id-form -->
			<form action="" method="POST">
		<table border="0" cellpadding="" cellspacing=""  id="id-form">
	
			
		<tr>
			<th valign="top">Nom Competence:</th>
			
			<td><input name="nom" type="text" required="required" /></td>
			<td></td>
		</tr>
		
		<tr>
		<th valign="top">Description :</th>
		<td><textarea name ="desc" rows="3" cols="" class="form-textarea" required="required"></textarea></td>
		<td></td>
		</tr>
		
		<tr>
		<th valign="top">Niveau :</th>
		<td><input name="niv" type="radio" value="Débutant" />Débutant</td>
		</tr>
		<tr>
		<th valign="top"></th>
		<td><input name="niv" type="radio" value="Confirmé" />Confirmé</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top"></th>
		<td><input name="niv" type="radio" value="Certifié" />Certifié</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top"></th>
		<td><input name="niv" type="radio" value="Expérimenté" />Expérimenté</td>
		<td></td>
		</tr>
		<tr>
		<th>&nbsp;</th>
		<td valign="top" >
			<input type="submit" value=" Ajouter" />
		</td>
		<td><input type="reset" value="" class="form-reset"  /></td>
	</tr>
	</table>
	 </form>
	<!-- end id-form  -->
	
 <tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>

<div class="clear"></div>
</div>
<!--  end content-table-inner  -->
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
<!--  end content-outer -->

<div class="clear">&nbsp;</div>
<?php 
require_once("config/config.php");
 require_once "class/business/Competence.php";
 require_once "class/dao/CompetenceDAO.class.php";
$competence = new Competence($_POST['nom'], $_POST['desc'], null);

$comp = new CompetenceDAO();
$comp->insertCompetence($competence);


?>
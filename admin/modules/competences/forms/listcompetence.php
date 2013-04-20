<?php
include_once(DAO_PATH. "/CompetenceDAO.class.php" );
?>

<!DOCTYPE html>

<body>
<div class="clear"></div>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

<!-- start page-heading -->
<div id="page-heading">
<h1>Liste des competences </h1>
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
<!-- start content-table-inner ...................................................................... START -->
<div id="content-table-inner">
<!-- start table-content -->
<div id="table-content">
	<div style="float: left;" class="loader"><img src="images/ajax-loader.gif" alt="Loading..." title="Loading..." id="loading" style="display: none" /></div><div style="float: left; margin-left:5px; margin-bottom: 10px;" id="info"></div>
                                <div class="clear">&nbsp;</div>
                                <img src="images/arrow-right.jpg" alt="Add This" title="Add This .." id="arrow-right" style="float:right; display: none; opacity: .6; margin: 15px 50px 0 0;" />
                                <a href="index.php?module=competence&option=add" class="addnew" id="addnew" style="left: 48%; display: none;">Ajouter un Collaborateur</a>
<!-- start product-table ..................................................................................... -->
<form id="mainform" action="">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
<tr>
<th class="table-header-repeat line-left minwidth-1"><a href="">Id</a> </th>
<th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a> </th>
<th class="table-header-repeat line-left minwidth-1"><a href="">Description</a></th>
<th class="table-header-repeat line-left minwidth-1" style="color: black;"><a href="">Option</a></th>


</tr>
<?php
$usr = new CompetenceDAO;
$arrValues=$usr->selectCompetence();
foreach ($arrValues as $row){
    
?>
<tr>

<td><?php echo $row["id_competence"]?></td>
<td><?php echo $row["nom_competence"]?></td>
<td><?php echo $row["description_competence"]?></td>

<td class="options-width">
<a href="index.php?module=competence&option=edit&id=<?php echo $row["id_competence"] ?>" title="Edit" class="icon-1 info-tooltip"></a>
<a href="index.php?module=competence&option=delete&id=<?php echo $row["id_competence"] ?>" title="Edit" class="icon-2 info-tooltip"></a>
</td>
</tr>
<?php }?>

</table>
<!-- end product-table................................... -->
</form>
</div>
<!-- end content-table -->

<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table" style="display: none">
			<tr>
			<td>
				<a href="javascript:void(0)" class="page-far-left"></a>
				<a href="javascript:void(0)" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="javascript:void(0)" class="page-right"></a>
				<a href="javascript:void(0)" class="page-far-right"></a>
			</td>
			<td>
			<select id="nb-collabs-show">
				<option id="3-c" value="3">3</option>
                                <option id="5-c" value="5">5</option>
				<option id="8-c" value="8">8</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
<div class="clear"></div>
</div>
<!-- end content-table-inner ............................................END -->
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
<!-- end content -->
<div class="clear">&nbsp;</div>
</div>
</body>
</html>

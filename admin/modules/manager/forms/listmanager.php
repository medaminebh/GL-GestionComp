<div class="clear"></div>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Liste des Collaborateurs</h1>
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
                    
                        <!--  start actions-box ............................................... -->
                        <div id="actions-box" style="display: none; float: right; margin: 0 10px 10px 10px;">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="javascript:void(0)" id="edit-action" style="color: black;" class="action-edit">Edit</a>
					<a href="javascript:void(0)" id="multidelete-action" style="color: black;" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->

			<!--  start table-content  -->
			<div id="table-content">
                            <div style="float: left;" class="loader"><img src="images/ajax-loader.gif" alt="Loading..." title="Loading..." id="loading" style="display: none" /></div><div style="float: left; margin-left:5px; margin-bottom: 10px;" id="info"></div>
                                <div class="clear">&nbsp;</div>
                                <img src="images/arrow-right.jpg" alt="Add This" title="Add This .." id="arrow-right" style="float:right; display: none; opacity: .6; margin: 15px 50px 0 0;" />
                                <a href="index.php?module=collab&option=add" class="addnew" id="addnew" style="left: 48%; display: none;">Ajouter un Collaborateur</a>
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="" method="POST" style="display:none">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                        
                                    </table>
				<!--  end product-table................................... -->
				</form>
			</div>
			<!--  end content-table  -->

                        <!--  start actions-box ............................................... -->
                        <!--<div id="actions-box" style="">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>-->
			<!-- end actions-box........... -->

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
    $("#"+$.cookie('nb-collabs-show')+"-c").attr("selected", "selected");
    $.cookie("nb-collabs-show", $('#nb-collabs-show').val(),{expires: 30,path: '/'});
    $.cookie("begin", 0,{expires: 30,path: '/'});
    if($.cookie("fromeditpage") == "true") {
        $.cookie("fromeditpage", "false",{expires: 30,path: '/'});
    } else {
    $.cookie("list", 1,{expires: 30,path: '/'});
    }
    
        $(".page-right").click(function(){
            if($.cookie("nb-collabs-show") == 3) {
                $.cookie("begin", (parseInt($.cookie("begin"))+3),{expires: 30,path: '/'});
                var maxlist = Math.ceil(parseInt($.cookie("total-collabs"))/3);
                if(parseInt($.cookie("total-collabs")) > parseInt($.cookie("begin"))){
                    $.cookie("list", (parseInt($.cookie("list")) < maxlist) ? (parseInt($.cookie("list"))+1) : maxlist,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }else {
                    $.cookie("begin", (parseInt($.cookie("begin"))-3),{expires: 30,path: '/'});
                }
            }else if($.cookie("nb-collabs-show") == 5) {
                $.cookie("begin", (parseInt($.cookie("begin"))+5),{expires: 30,path: '/'});
                var maxlist = Math.ceil(parseInt($.cookie("total-collabs"))/5);
                if(parseInt($.cookie("total-collabs")) > parseInt($.cookie("begin"))){
                    $.cookie("list", (parseInt($.cookie("list")) < maxlist) ? (parseInt($.cookie("list"))+1) : maxlist,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }else {
                    $.cookie("begin", (parseInt($.cookie("begin"))-5),{expires: 30,path: '/'});
                }
            }else if($.cookie("nb-collabs-show") == 8) {
                $.cookie("begin", (parseInt($.cookie("begin"))+8),{expires: 30,path: '/'});
                var maxlist = Math.ceil(parseInt($.cookie("total-collabs"))/8);
                if(parseInt($.cookie("total-collabs")) > parseInt($.cookie("begin"))){
                    $.cookie("list", (parseInt($.cookie("list")) < maxlist) ? (parseInt($.cookie("list"))+1) : maxlist,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
            }   }else {
                    $.cookie("begin", (parseInt($.cookie("begin"))-8),{expires: 30,path: '/'});
                }
        });

        $(".page-left").click(function(){
            if($.cookie("nb-collabs-show") == 3) {
                $.cookie("begin", parseInt($.cookie("begin")) > 0 ? (parseInt($.cookie("begin"))-3) : -1,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) >= 0){
                    $.cookie("list", (parseInt($.cookie("list")) > 1) ? (parseInt($.cookie("list"))-1) : 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }else {
                    $.cookie("begin", 0,{expires: 30,path: '/'});
                }
            }else if($.cookie("nb-collabs-show") == 5) {
                $.cookie("begin", parseInt($.cookie("begin")) > 0 ? (parseInt($.cookie("begin"))-5) : -1,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) >= 0){
                    $.cookie("list", (parseInt($.cookie("list")) > 1) ? (parseInt($.cookie("list"))-1) : 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }else {
                    $.cookie("begin", 0,{expires: 30,path: '/'});
                }
            }else if($.cookie("nb-collabs-show") == 8) {
                $.cookie("begin", parseInt($.cookie("begin")) > 0 ? (parseInt($.cookie("begin"))-8) : -1,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) >= 0){
                    $.cookie("list", (parseInt($.cookie("list")) > 1) ? (parseInt($.cookie("list"))-1) : 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
            }   }else {
                    $.cookie("begin", 0,{expires: 30,path: '/'});
                }
        });

        $(".page-far-right").click(function(){
            if($.cookie("nb-collabs-show") == 3) {
                var rest = parseInt($.cookie("total-collabs")) % 3;
                var list = Math.ceil(parseInt($.cookie("total-collabs"))/3);
                $.cookie("begin", rest != 0 ? (parseInt($.cookie("total-collabs"))- rest) : (parseInt($.cookie("total-collabs"))- 3) ,{expires: 30,path: '/'});
                if((parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- rest) || parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- 3)) && parseInt($.cookie("list")) != list){
                    $.cookie("list", list,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }else if($.cookie("nb-collabs-show") == 5) {
                var rest = parseInt($.cookie("total-collabs")) % 5;
                var list = Math.ceil(parseInt($.cookie("total-collabs"))/5);
                $.cookie("begin", rest != 0 ? (parseInt($.cookie("total-collabs"))- rest) : (parseInt($.cookie("total-collabs"))- 5) ,{expires: 30,path: '/'});
                if((parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- rest) || parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- 5)) && parseInt($.cookie("list")) != list){
                    $.cookie("list", list,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }else if($.cookie("nb-collabs-show") == 8) {
                var rest = parseInt($.cookie("total-collabs")) % 8;
                var list = Math.ceil(parseInt($.cookie("total-collabs"))/8);
                $.cookie("begin", rest != 0 ? (parseInt($.cookie("total-collabs"))- rest) : (parseInt($.cookie("total-collabs"))- 8) ,{expires: 30,path: '/'});
                if((parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- rest) || parseInt($.cookie("begin")) == (parseInt($.cookie("total-collabs"))- 8)) && parseInt($.cookie("list")) != list){
                    $.cookie("list", list,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }
        });

        $(".page-far-left").click(function(){
            if($.cookie("nb-collabs-show") == 3) {
                $.cookie("begin", 0,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) == 0 && parseInt($.cookie("list")) != 1){
                    $.cookie("list", 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }else if($.cookie("nb-collabs-show") == 5) {
                $.cookie("begin", 0,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) == 0 && parseInt($.cookie("list")) != 1){
                    $.cookie("list", 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }else if($.cookie("nb-collabs-show") == 8) {
                $.cookie("begin", 0,{expires: 30,path: '/'});
                if(parseInt($.cookie("begin")) == 0 && parseInt($.cookie("list")) != 1){
                    $.cookie("list", 1,{expires: 30,path: '/'});
                    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
                }
            }
        });

        $("#nb-collabs-show").change(function(){
            $.cookie("nb-collabs-show", $('#nb-collabs-show').val(),{expires: 30,path: '/'});
            $.cookie("begin", 0,{expires: 30,path: '/'});
            $.cookie("list", 1,{expires: 30,path: '/'});
            loadCollabs(0, $.cookie("nb-collabs-show"));
        });

    function loadCollabs(begin, limit) {
        $("#loading").fadeIn("fast");
        $("#info").fadeOut("fast", function(){$("#info").html("<p>Processing ...</p>")}).fadeIn("slow");
        var dataString = 'begin='+ begin + '&limit=' + limit;

        $.ajax({
                type: "GET",
                url: "admin/modules/collab/actions/listcollab.php",
                contentType: "text/xml; charset=utf-8",
                data: dataString,
                cache: false,
                success: function (xml) {
                    var hasChildren = ($(xml).children('collabs').length > 0 && $(xml).find('collabs').attr('total')!=0);
                        if (hasChildren) {
                            $("#mainform").fadeIn("fast");
                            $("#page-info").html("Page <strong>"+$.cookie("list")+"</strong> / "+Math.ceil($(xml).find('collabs').attr('total')/$.cookie("nb-collabs-show")));
                            reloadCollabHeader();
                            $(xml).find("collab").each(function() {
                                var tr = "<tr>"
                                tr+= "<td><input name=\"check-collab\" id=\"check-collab"+$(this).find('collab_id').text()+"\" value=\""+$(this).find('collab_id').text()+"\" type=\"checkbox\"/></td>";
                                tr+= "<td>"+$(this).find('collab_id').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_nom').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_prenom').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_genre').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_email').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_hire_date').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_last_login').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_expire_date').text()+"</td>";
                                tr+= "<td>"+$(this).find('collab_state').text()+"</td>";
                                tr+= "<td class=\"options-width\">";
                                tr+= "<a href=\"index.php?module=collab&option=edit&id="+$(this).find('collab_id').text()+"\" title=\"Edit\" class=\"icon-1 info-tooltip\" onClick=\"$.cookie('usertoedit', parseInt("+$(this).find('collab_id').text()+"),{expires: 30,path: '/'});\"></a>";
				tr+= "<a href=\"index.php?module=collab&option=delete&id"+$(this).find('collab_id').text()+"\" title=\"Delete\" class=\"icon-2 info-tooltip\"></a>";
				tr+= "</td>";
                                tr+= "</tr>";
                                $("#product-table").append(tr).hide().fadeIn("fast");
                            });
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: green;\"><span id=\"nb-collab\">"+$(xml).find('collabs').attr('total')+"</span> collaborateurs trouvés.</p>")}).fadeIn("normal");
                                $("#paging-table").fadeIn("fast");
                                //table sorter
                                $(".tablesorter").tablesorter();
                                //tabs
                                $(".tab_content").hide(); //Hide all content
                                $("ul.tabs li:first").addClass("active").show(); //Activate first tab
                                $(".tab_content:first").show(); //Show first tab content

                                //On Click Event
                                $("ul.tabs li").click(function() {

                                        $("ul.tabs li").removeClass("active"); //Remove any "active" class
                                        $(this).addClass("active"); //Add "active" class to selected tab
                                        $(".tab_content").hide(); //Hide all tab content

                                        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                                        $(activeTab).fadeIn(); //Fade in the active ID content
                                        return false;
                                });

                                //checkbox
                                $('input').checkBox();
                                $('#toggle-all').click(function(){
                                $('#toggle-all').toggleClass('toggle-checked');
                                $('#mainform input[type=checkbox]').checkBox('toggle');
                                return false;
                                });
                                $.cookie("total-collabs", parseInt($(xml).find('collabs').attr('total')),{expires: 30,path: '/'});
                                $("#actions-box").show();
                        }else {
                                $("#actions-box").hide();
                                $.cookie("list", 0,{expires: 30,path: '/'});
                                $.cookie("total-collabs", 0,{expires: 30,path: '/'});
                                $("#loading").hide();
                                $("#info").fadeOut("fast", function(){$("#info").html("<p style=\"color: red;\">Vous n'avez pas ajouté des Coallabrateurs ! Veuillez ajouter des Collaborateurs pour pouvoir les lister ..</p>")}).fadeIn("normal", function(){$("#addnew").fadeIn("normal");$("#arrow-right").fadeIn("normal");});
                        }
                }
        });
        return false;
    }

    function reloadCollabHeader(){
        var tabheader = '<tr>';
            tabheader+= '<th class="table-header-check"><a id="toggle-all" ></a> </th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 40px;"><a href="">Id</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 40px;"><a href="">Nom</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 70px;"><a href="">Prenom</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="width: 66px;"><a href="">Genre</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 90px;"><a href="">E-mail</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 85px;"><a href="">Hire Date</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 135px;"><a href="">Last Login</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 135px;"><a href="">Expire date</a></th>';
            tabheader+= '<th class="table-header-repeat line-left" style="min-width: 65px;"><a href="">State</a></th>';
            tabheader+= '<th class="table-header-options line-left" style="width: 80px;min-width: 80px;"><a href="">Options</a></th>';
            tabheader+= '</tr>';
            $("#product-table").html(tabheader).hide().fadeIn("fast");
    }

    $("#edit-action").click(function(){
        var nb_checked = $("input[name=check-collab]:checked").length;
        if(nb_checked == 0) {
            alert("Veuillez selectionner le compte à modifier !");
        } else if(nb_checked == 1) {
            $.cookie("usertoedit", parseInt($("input[name=check-collab]:checked").val()),{expires: 30,path: '/'});
            document.location.href = "index.php?module=collab&option=edit&id="+parseInt($("input[name=check-collab]:checked").val());
        } else {
            alert("Modification multiple impossible !");
        }
    });

    $("#multidelete-action").click(function(){
        var nb_checked = $("input[name=check-collab]:checked").length;
        if(nb_checked == 0) {
            alert("Veuillez selectionner au moins 1 compte à supprimer !");
        } else {
            var id_todelete = "";
            var i = 0;
            $("input[name=check-collab]:checked").each(function(){
                   id_todelete+= $(this).val();
                   i++;
                   if(nb_checked > i) {
                      id_todelete+= "-";
                   }
            });
            $.cookie("userstodelete", id_todelete,{expires: 30,path: '/'});
            document.location.href = "index.php?module=collab&option=delete&id="+id_todelete;
        }
    });

    $("#content-outer").height($("#sidebar").height());
    loadCollabs($.cookie("begin"), $.cookie("nb-collabs-show"));
</script>

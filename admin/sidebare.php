<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<aside id="sidebar" class="column">
    <form class="quick_search">
        <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
    </form>
    <hr/>

    <h3>Managers</h3>
    <ul class="toggle">
        <li class="icn_add_user"><a href="#">Ajouter Manager</a></li>
        <li class="icn_view_users"><a href="#">Voir Managers</a></li>
    </ul>

    <h3>Collaborateurs</h3>
    <ul class="toggle">
        <li class="icn_add_user"><a href="index.php?module=collab&option=add">Ajouter Collaborateur</a></li>
        <li class="icn_view_users"><a href="#">Voir Collaborateurs</a></li>
    </ul>

    <h3>Competences</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="ajouterCompetence">Ajouter competence</a></li>
        <li class="icn_edit_article"><a href="#">Modifier competence</a></li>
        <li class="icn_categories"><a href="#">Categories</a></li>
    </ul>

    <h3>Services</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="#">Ajouter Service</a></li>
        <li class="icn_edit_article"><a href="#">Modifier Service</a></li>
    </ul>
</aside>
<!-- end of sidebar -->
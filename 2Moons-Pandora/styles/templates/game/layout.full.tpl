<!-- Header start -->
{include file="main.header.tpl" bodyclass="full"}
<!-- Header end -->
{if $hasAdminAccess}
<div class="globalWarning">
{$LNG.admin_access_1} <a id="drop-admin">{$LNG.admin_access_link}</a>{$LNG.admin_access_2}
</div>
{/if}
<!-- Topnav start -->
{include file="main.topnav.tpl"}
<!-- Topnav end -->
<br>
<!-- Navigation start -->
{include file="main.navigation.tpl"}
<!-- Navigation end -->
<!-- Content start -->
<div id="content">{block name="content"}{/block}</div>
<!-- Content end -->
<!-- Navigation start -->
{include file="rightmenu.tpl"}
<!-- Navigation end -->
{foreach $cronjobs as $cronjob}<img src="cronjob.php?cronjobID={$cronjob}" alt="">{/foreach}
<!-- Footer start -->
{include file="main.footer.tpl" nocache}
<!-- Footer end -->
<!-- Planet_menu start -->
{include file="planet_menu.tpl" nocache}
<!-- Planet_menu end -->

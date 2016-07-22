{block name="title" prepend}{/block}
{block name="content"}

<div class="row">
<div class="span9">

<h3 class="spec">{$LNG.alliance}</h3>
<div class="tabbable">
<div class="tab-content">

<div class="tab-pane fade in active" id="tab1">
    <table class="redesign">
        <tr>
			<th colspan="2">{$LNG.al_alliance}</th>
        </tr>
        <tr>
			<td style="width:50%"><a href="game.php?page=alliance&amp;mode=create">{$LNG.al_alliance_make}</a></td>
			<td style="width:50%"><a href="game.php?page=alliance&amp;mode=search">{$LNG.al_alliance_search}</a></td>
        </tr>
    </table>
</div>

</div>{/block}
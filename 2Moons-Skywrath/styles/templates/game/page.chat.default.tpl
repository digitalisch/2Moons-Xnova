{block name="title" prepend}{$LNG.lm_chat}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_chat}</div>
<div class="contents">
<table style="width:100%">
<iframe src="./chat/index.php?action={$smarty.get.action|default:''|escape:'html'}" style="border: 0px;width:100%;height:800px;" ALLOWTRANSPARENCY="true"></iframe>
</div>
</div>
</div>
</div>
</section>
{/block}
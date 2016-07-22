{block name="content"}
<section id="header">
<header>
<h1>Fallen Black Skin Preview</h1>
<p>
• Login : <b>Demo</b> • Password : <b>123456demo</b> •</p>
<div class="login">
   <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
    	<input class="main-form" name="username" id="username" type="text" placeholder="Username" required="required" />
        <input class="main-form" name="password" id="password" type="password" placeholder="Password" required="required" />
        <button type="submit" class="button style2 scrolly">Login</button><br><br>
    </form>
</div>
</header>

</section>

{/block}
{block name="script" append}
<script>{if $code}alert({$code|json});{/if}</script>
{/block}
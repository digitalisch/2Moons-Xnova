{block name="title" prepend}Paypal{/block}
{block name="content"}
 <script>
	  $(function(){
		$("#paypal_form").submit();
	  });
	  </script>
	  <form method="post" id="paypal_form" name="paypal_form" action="https://www.paypal.com/cgi-bin/webscr">
	  {foreach from=$fields item=i key=k}
		{$i.text}
	  {/foreach}
	  <table style="width:70%;position:absolute;top:30%;bottom:50%;left:22%;right:10%;" align="center">
	  <tr>
	  <th class="c">
	  Informationen:
	  </th>
	  </tr>
	  <tr>
      <td class="errormessage"><h3>{$LNG.p_info14}</h3><br>{$LNG.p_info15}<br></h3><br>{$LNG.p_info16}<br><br><input type="submit" value="{$LNG.p_click}"></td>
	  </tr>
	  </table>
	  </form>
{/block}
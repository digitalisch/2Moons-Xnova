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
      <td class="errormessage"><h3>Your request is being processed and you will be redirected to the PayPal site.</h3><br>This process takes 5 seconds. If you are not redirected automatically ...<br></h3><br>After Payment do no forget to hit the BACK BUTTON ,it will deposit the DM to your account....<br><br><input type="submit" value="CLICK here"></td>
	  </tr>
	  </table>
	  </form>
{/block}
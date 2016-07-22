{block name="title" prepend}Buy Dark Matter{/block}
{block name="content"}


	

 <table>
        <tbody><tr>
            <th colspan="2">{$LNG.p_info1}</th>
        </tr>
        <tr>
            <td>
                <table width="90%">
                    <tbody>
					<tr>
                        <th colspan="3">{$LNG.p_info2} {$donate} {$LNG.p_info3}</th>
                    </tr>
					<tr>
                        <th colspan="3">{$LNG.p_info4}</th>
                    </tr>
                    <tr>
                        <td><a href="?page=ticket">Technical support - [Links]</a></td>
                        <td>Skype: crowler9</td>
                        <td>Email: <a href="mailto:flocke_dittrich@gmx.de">Calypso-Team</a></td>
                    </tr>
                </tbody></table>
                <table width="90%">
                    <tbody><tr>
                        <th colspan="5">{$LNG.p_info5}</th>
                    </tr>
                    <tr>
                        <td>{$LNG.tech.{921}}</td>
                        <td>{$LNG.p_cost}<br>[EUR]</td>
						<td>{$LNG.p_select}</td>
                        
                        
                    </tr>
            <form name="one" action="?page=paypal" method="post">
                   
                    <tr>
                        <td><font color="#b8efcd">50.000</font></td>
                        <td><font color="#b8efcd">10</font></td>
            <td><input name="amount" type="radio" value="50000"></td>
                        
                    </tr>
                    <tr>
                        <td><font color="#ffff00">110.000</font></td>
                        <td><font color="#ffff00">20</font></td>
            <td><input name="amount" type="radio" value="110000"></td>
                    
                    </tr>
                    <tr>
                        <td><font color="#75eaff">230.000 </font></td>
                        <td><font color="#75eaff">40</font></td>
            <td><input name="amount" type="radio" value="230000"></td>
                        
                    </tr>
                    <tr>
                        <td><font color="#ffe88b">490.000</font></td>
                        <td><font color="#ffe88b">80</font></td>
            <td><input name="amount" type="radio" value="490000"></td>
                        
                    </tr>
                    <tr>
                        <td><font color="#ffcec6">1.100.000</font></td>
                        <td><font color="#ffcec6">160</font></td>
            <td><input name="amount" type="radio" value="1100000"></td>
                      
                    </tr>
            <tr><td></td><td></td>
                        <td><input type="image" name="formSubmit" src="styles/theme/gow/images/checkout_but.gif" border="0">
</form></td>
                    
                      
                    </tr>
            
                </tbody></table>
              
                <table width="90%">
                    <tbody><tr>
                        <th colspan="3">{$LNG.p_info6}</th>
                    </tr>
                    <tr>
                        <td>{$LNG.p_info7}</td>
                        <td>{$LNG.p_info8}</td>
                    </tr>
                </tbody></table>
                <table width="90%">
                    <tbody><tr>
                        <td><font color="red">
                            </font><ul align="left"><font color="red">
                            <li>{$LNG.p_info9}</li>
                            <li>{$LNG.p_info10}</li> 
							<li>{$LNG.p_info11}</li>
							<li>{$LNG.p_info12}</li>
							</font>
                            </ul>
                        </td>
                    </tr>
                </tbody></table>
                </td></tr>
				
				</tbody></table>
{/block}

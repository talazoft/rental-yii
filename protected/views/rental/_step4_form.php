<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
    });
</script>
<form method="POST" class="step4-form" id="empinfo-<?php echo $cnt; ?>">
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td colspan="6">
                    <table border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <b> <div id="name<?php echo $cnt; ?>">Employment Status of </div></b> 
                                </td>
                                <td>
                                    <select id="selectstatus1" name="selectstatus1">
                                        <option value="fulltime">Full Time </option>
                                        <option value="parttime">Part Time </option>
                                        <option value="student">Student </option>
                                        <option value="unemployed">Unemployed </option>
                                        <option value="other">Other </option>
                                    </select>						  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <div id="subeii1">
                        <table width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe" id='tbl-employed<?php echo $cnt; ?>'>
                            <tbody>
                                <tr>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Employer</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Occupation</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Date Employed</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Month Salary (US$)</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Supervisor Name</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Supervisor Phone</th>
                                </tr>
                                <tr>
                                    <td align="center" height="36" style="border-right-color:#dddddd"><input type="text" style="width:70%" value="" name="employer1" id="employer1"></td>
                                    <td align="center" style="border-right-color:#dddddd"><input type="text" value="" style="width:70%" name="occupation1" id="occupation1" size="12"></td>
                                    <td align="center" style="border-right-color:#dddddd"><input type="text" value="" style="width:70%" name="dateemployed1" id="dateemployed1" size="8" class="hasDatepicker"></td>

                                    <td align="center" style="border-right-color:#dddddd"><input type="text" style="width:70%" value="" name="monthsalary1" id="monthsalary1" size="5"></td>
                                    <td align="center" style="border-right-color:#dddddd"><input type="text" value="" style="width:70%" name="supervisorname1" id="supervisorname1" size="12"></td>
                                    <td align="center" style="border-right-color:#dddddd"><input type="text" style="width:70%" value="" name="supervisorphone11" id="supervisorphone11" size="3" maxlength="13"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table width="100%"  border=1 style="border-collapse:collapse; border-color:#bebebe" id='tbl-student<?php echo $cnt; ?>'>
                            <tr>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">School Name</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Grade</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">School Contact</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">School Phone</th>
                            </tr>
                            <tr>
                                <td height="36" align="center" style="border-right-color:#dddddd"><input type="text" id="schoolname1" name="schoolname1" value="" style="width:70%"  /></td>
                                <td align="center" style="border-right-color:#dddddd"><input type="text"   id="grade1" name="grade1" value="" style="width:70%"/></td>
                                <td align="center" style="border-right-color:#dddddd"><input type="text"  id="schoolcontact1" name="schoolcontact1" value="" style="width:70%"></td>
                                <td align="center" style="border-right-color:#dddddd"><input type="text" maxlength=13 size=3 id="schoolphone11" name="schoolphone11" value="" /><input type="hidden" maxlength=3 size=3 id="schoolphone21" name="schoolphone21" onkeypress="return isNumberKey(event)" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);"/><input type="hidden" maxlength=3 size=3 id="schoolphone31" name="schoolphone31"/></td>
                            </tr>				  
                        </table>
                        
                        <table width="100%"  border=1 style="border-collapse:collapse; border-color:#bebebe" id='tbl-other<?php echo $cnt; ?>'>
                            <tr>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Income Amount</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Source / Contact</th>

                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                            </tr>
                            <tr>
                                <td height="36" align="center" style="border-right-color:#dddddd"><input type="text" id="incomeamount1" name="incomeamount1" value="" style="width:40%"/></td>
                                <td align="center" style="border-right-color:#dddddd"><input type="text"   id="sourcecontact1" name="sourcecontact1" value="" style="width:70%"/></td>
                                <td align="center" style="border-right-color:#dddddd"><input type="text" maxlength=13 size=3 id="otherphone11" name="otherphone11" value="" onkeypress="return isNumberKey(event)" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" style="width:90%"/><input type="hidden" maxlength=3 size=3 id="otherphone21" name="otherphone21"/><input type="hidden" maxlength=3 size=3 id="otherphone31" name="otherphone31"/></td>
                            </tr>				  
                        </table>
			
                    </div>			  
                </td>
            </tr>
        </tbody>
    </table> 
    <div id="plusminuseii1">
    </div>
    <table width="100%">
        <tbody>
            <tr>
                <td align="center" colspan="6"> <a id="pluseii1"> <img border="0" src="images/plus.png"> </a><a id="minuseii1"><img src="images/minus.png"></a></td>
            </tr>
            <tr>
                <td align="center" colspan="6"> <hr class="dashed"></td>
            </tr>
        </tbody>
    </table>
</form>
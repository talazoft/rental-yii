<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
        
        var eiicnt = <?php echo Yii::app()->session['step4']["eii$cnt"] ? Yii::app()->session['step4']["eii$cnt"]+1 : 2 ?>;
        $("#pluseii<?php echo $cnt; ?>").click(function(){
            var eiinewrowurl = "<?php echo Yii::app()->createUrl('/rental/eiinewrow'); ?>";
            var type = $("#employment_type<?php echo $cnt ?> option:selected").val();
            $.post(eiinewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:eiicnt, type:type}, function(response){
                if(type == "fulltime" || type == "parttime"){
                    $("#tbl-employed<?php echo $cnt; ?>").append(response);
                } else {
                    $("#tbl-selfemployed<?php echo $cnt; ?>").append(response);
                } 
            });
        });
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
                                    <select id="employment_type<?php echo $cnt ?>" name="employment_type<?php echo $cnt ?>">
                                        <option value="fulltime">Full Time</option>
                                        <option value="parttime">Part Time</option>
                                        <option value="selfemployed">Self Employed</option>
                                        <option value="unemployed">Unemployed</option>
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
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Department</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Position/Title</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Length of Employmnet</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Salary</th>
                                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Supervisor's Name</th>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table width="100%"  border=1 style="border-collapse:collapse; border-color:#bebebe" id='tbl-selfemployed<?php echo $cnt; ?>'>
                            <tr>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Bussiness Name</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Bussiness Type</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Years in Bussiness</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Stay Length</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Landlord</th>
                                <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
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
                <td align="center" colspan="6"> 
                    <a id="pluseii<?php echo $cnt; ?>"> 
                        <img border="0" src="images/plus.png"> 
                    </a>
                    <a id="minuseii<?php echo $cnt; ?>">
                        <img src="images/minus.png">
                    </a>
                </td>
                <?php 
                    echo CHtml::hiddenField("eii$cnt", Yii::app()->session['step4']["eii$cnt"] ? Yii::app()->session['step4']["eii$cnt"] : "", array('id'=>"eii$cnt"));
                ?>
            </tr>
            <tr>
                <td align="center" colspan="6"> <hr class="dashed"></td>
            </tr>
        </tbody>
    </table>
</form>
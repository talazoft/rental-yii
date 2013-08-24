<script>
    $(function(){
        var cricnt2 = <?php echo isset(Yii::app()->session['step6']["cricnt2$cnt"]) ? Yii::app()->session['step6']["cricnt2$cnt"] : 2 ?>;
        $("#pluscrix<?php echo $cnt; ?>").unbind("click").click(function(event){
            
            var crinewrowurl = "<?php echo Yii::app()->createUrl('/rental/crinewrow'); ?>";
            $.post(crinewrowurl, {cnt:<?php echo $cnt; ?>, cnt2:cricnt2}, function(response){
                $("#cribody<?php echo $cnt; ?>").append(response);
            });
            
            $("#CreditInfo_cricnt2<?php echo $cnt; ?>").val(cricnt2);
            
            cricnt2++;
            
            if(cricnt2 > 2){
                $("#minuscrix<?php echo $cnt; ?>").show();
            }
            
            event.stopPropagation();
            return false;
        });
        
        $("#minuscrix<?php echo $cnt; ?>").unbind("click").click(function(event){
            $(".crirow<?php echo $cnt; ?> :last").remove();
            
            cricnt2--;
            
            $("#CreditInfo_cricnt2<?php echo $cnt; ?>").val(cricnt2);
            
            if(cricnt2 == 2){
                $(this).hide();
            }
            
            event.stopPropagation();
            return false;
        });
        
        if(cricnt2 == 2){
            $("#minuscrix<?php echo $cnt; ?>").hide();
        }
    });
</script>
<tr>
    <td>
        <b><div id="firstnamepr<?php echo $cnt; ?>">Credit Information :</div></b>
    </td>
</tr>
<tr>
    <td>
        <table id="tblcri<?php echo $cnt; ?>" border="1" style="border-collapse:collapse; border-color:#bebebe" width="100%">
            <tbody id="cribody<?php echo $cnt; ?>">
                <tr class="crirow<?php echo $cnt; ?>">
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Name of Bank
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Branch
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Phone
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Account
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Approx. Balance
                    </th>
                </tr>
                <?php 
                    $this->renderPartial("_credit_info_row", array('cnt'=>$cnt,'cnt2'=>$cnt2));
                ?>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td align="center" colspan="5"> 
        <a name="pluscrix<?php echo $cnt; ?>" id="pluscrix<?php echo $cnt; ?>">
            <img border="0" src="images/plus.png"> 
        </a> 
        <a name="minuscrix<?php echo $cnt; ?>" id="minuscrix<?php echo $cnt; ?>">
            <img src="images/minus.png">
        </a>
        <?php 
            echo CHtml::hiddenField("CreditInfo[cricnt2$cnt]", isset(Yii::app()->session['step6']['CreditInfo']["cricnt2$cnt"]) ? Yii::app()->session['step6']['CreditInfo']["cricnt2$cnt"] : "", array('id'=>"CreditInfo_cricnt2$cnt"));
        ?>
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
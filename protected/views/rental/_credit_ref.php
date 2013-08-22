<script>
    $(function(){
        var crfcnt2 = <?php echo isset(Yii::app()->session['step6']["crfcnt2$cnt"]) ? Yii::app()->session['step6']["crfcnt2$cnt"] : 2 ?>;
        $("#pluscrf<?php echo $cnt; ?>").unbind("click").click(function(){
            
            var crfnewrowurl = "<?php echo Yii::app()->createUrl('/rental/crfnewrow'); ?>";
            $.post(crfnewrowurl, {cnt:<?php echo $cnt; ?>, cnt2:crfcnt2}, function(response){
                $("#crfbody<?php echo $cnt; ?>").append(response);
            });
            
            $("#CreditRef_crfcnt2<?php echo $cnt; ?>").val(crfcnt2);
            
            crfcnt2++;
            
            if(crfcnt2 > 2){
                $("#minuscrfx<?php echo $cnt; ?>").show();
            }
            
            return false;
        });
        
        $("#minuscrfx<?php echo $cnt; ?>").unbind("click").click(function(){
            $("#crfbody<?php echo $cnt; ?> tr:last").remove();
            
            crfcnt2--;
            
            $("#CreditRef_crfcnt2<?php echo $cnt; ?>").val(crfcnt2);
            
            if(crfcnt2 == 2){
                $(this).hide();
            }
            
            return false;
        });
        
        if(crfcnt2 == 2){
            $("#minuscrfx<?php echo $cnt; ?>").hide();
        }
    });
</script>
<tr>
    <td>
        <b><div id="firstnamepr<?php echo $cnt; ?>">Credit Reference :</div></b>
    </td>
</tr>
<tr>
    <td>
        <table id="tblcrf<?php echo $cnt; ?>" border="1" style="border-collapse:collapse; border-color:#bebebe">
            <tbody id="crfbody<?php echo $cnt; ?>">
                <tr class="crfrow<?php echo $cnt; ?>">
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Credit Reference
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Address
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Phone
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Account
                    </th>
                    <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                        Credit Amount
                    </th>
                </tr>
                <?php
                    $this->renderPartial('_credit_ref_row', array('cnt'=>$cnt2, 'cnt2'=>$cnt2));
                ?>
            </tbody>
        </table>
    </td>
</tr>
<tr>
    <td align="center" colspan="5"> 
        <a name="pluscrf<?php echo $cnt; ?>" id="pluscrf<?php echo $cnt; ?>">
            <img border="0" src="images/plus.png"> 
        </a> 
        <a name="minuscrfx<?php echo $cnt; ?>" id="minuscrfx<?php echo $cnt; ?>">
            <img src="images/minus.png">
        </a>
        <?php 
            echo CHtml::hiddenField("CreditRef[crfcnt2$cnt]", isset(Yii::app()->session['step6']['CreditRef']["crfcnt2$cnt"]) ? Yii::app()->session['step6']['CreditRef']["crfcnt2$cnt"] : "", array('id'=>"CreditRef_crfcnt2$cnt"));
        ?>
    </td>
</tr>
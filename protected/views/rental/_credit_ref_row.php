<tr class="crfrow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <script>
            $(function(){
                $(".phone").mask("(999) 999-9999");
                $(".currency").autoNumeric();
            });
        </script>
        <?php 
            echo CHtml::textField("CreditRef[$cnt][$cnt2][credit_ref]", isset(Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["credit_ref"]) ? Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["credit_ref"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[$cnt][$cnt2][address]", isset(Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["address"]) ? Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["address"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[$cnt][$cnt2][phone]", isset(Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["phone"]) ? Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["phone"] : "", array('style'=>'width:70%','class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[$cnt][$cnt2][account]", isset(Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["account"]) ? Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["account"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[$cnt][$cnt2][amount]", isset(Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["amount"]) ? Yii::app()->session['step6']["CreditRef"][$cnt][$cnt2]["amount"] : "", array('style'=>'width:70%','class'=>'currency'));
        ?>
    </td>
</tr>
<tr class="crirow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <script>
            $(function(){
                $(".phone").mask("(999) 999-9999");
                $(".currency").autoNumeric();
            });
        </script>
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][bank_name]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["bank_name"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["bank_name"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][branch]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["branch"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["branch"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][phone_no]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["phone_no"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["phone_no"] : "", array('style'=>'width:70%','class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][account_type]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["account_type"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["account_type"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][approx_balance]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["approx_balance"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["approx_balance"] : "", array('style'=>'width:70%','class'=>'currency'));
        ?>
    </td>
</tr>
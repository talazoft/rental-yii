<tr class="crirow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
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
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][phone]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["phone"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["phone"] : "", array('style'=>'width:70%','class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][account]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["account"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["account"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[$cnt][$cnt2][balance]", isset(Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["balance"]) ? Yii::app()->session['step6']["CreditInfo"][$cnt][$cnt2]["balance"] : "", array('style'=>'width:70%','class'=>'currency'));
        ?>
    </td>
</tr>
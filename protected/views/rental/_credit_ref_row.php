<tr class="crfrow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[credit_ref$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditRef"]["credit_ref$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditRef"]["credit_ref$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[address$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditRef"]["address$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditRef"]["address$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[phone$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditRef"]["phone$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditRef"]["phone$cnt$cnt2"] : "", array('style'=>'width:70%','class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[account$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditRef"]["account$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditRef"]["account$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditRef[amount$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["amount$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditRef"]["amount$cnt$cnt2"] : "", array('style'=>'width:70%','class'=>'currency'));
        ?>
    </td>
</tr>
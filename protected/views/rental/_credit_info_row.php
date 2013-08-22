<tr class="crirow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[bank_name$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["bank_name$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditInfo"]["bank_name$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[branch$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["branch$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditInfo"]["branch$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[phone$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["phone$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditInfo"]["phone$cnt$cnt2"] : "", array('style'=>'width:70%','class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[account$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["account$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditInfo"]["account$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("CreditInfo[balance$cnt$cnt2]", isset(Yii::app()->session['step6']["CreditInfo"]["balance$cnt$cnt2"]) ? Yii::app()->session['step6']["CreditInfo"]["balance$cnt$cnt2"] : "", array('style'=>'width:70%','class'=>'currency'));
        ?>
    </td>
</tr>
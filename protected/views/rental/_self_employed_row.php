<tr>
    <td height="36" align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("bussiness_name$cnt$cnt2", isset(Yii::app()->session['step4']["bussiness_name$cnt$cnt2"]) ? Yii::app()->session['step4']["bussiness_name$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("bussiness_type$cnt$cnt2", isset(Yii::app()->session['step4']["bussiness_type$cnt$cnt2"]) ? Yii::app()->session['step4']["bussiness_type$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("years_in_bussiness$cnt$cnt2", isset(Yii::app()->session['step4']["years_in_bussiness$cnt$cnt2"]) ? Yii::app()->session['step4']["years_in_bussiness$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("employer_address$cnt$cnt2", isset(Yii::app()->session['step4']["employer_address$cnt$cnt2"]) ? Yii::app()->session['step4']["employer_address$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("phone$cnt$cnt2", isset(Yii::app()->session['step4']["phone$cnt$cnt2"]) ? Yii::app()->session['step4']["phone$cnt$cnt2"] : "", array('class'=>'phone', 'style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("stay_length$cnt$cnt2", isset(Yii::app()->session['step4']["stay_length$cnt$cnt2"]) ? Yii::app()->session['step4']["stay_length$cnt$cnt2"] : "", array('style'=>'width:70%', 'style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("landlord_name$cnt$cnt2", isset(Yii::app()->session['step4']["landlord_name$cnt$cnt2"]) ? Yii::app()->session['step4']["landlord_name$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("landlord_phone$cnt$cnt2", isset(Yii::app()->session['step4']["landlord_phone$cnt$cnt2"]) ? Yii::app()->session['step4']["landlord_phone$cnt$cnt2"] : "", array('class'=>'phone', 'style'=>'width:70%'));
        ?>
    </td>
</tr>
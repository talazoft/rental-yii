<tr>
    <td height="36" align="center" style="border-right-color:#dddddd">
        <script>
            $(function(){
                $(".phone").mask("(999) 999-9999");
                $(".currency").autoNumeric();
            });
        </script>
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][bussiness_name]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["bussiness_name"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["bussiness_name"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][bussiness_type]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["bussiness_type"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["bussiness_type"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][years_in_bussiness]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["years_in_bussiness"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["years_in_bussiness"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][employer_address]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employer_address"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employer_address"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][phone]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["phone"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["phone"] : "", array('class'=>'phone', 'style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][stay_length]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["stay_length"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["stay_length"] : "", array('style'=>'width:70%', 'style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][landlord_name]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["landlord_name"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["landlord_name"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][landlord_phone]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["landlord_phone"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["landlord_phone"] : "", array('class'=>'phone', 'style'=>'width:70%'));
        ?>
    </td>
</tr>
<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
    });
</script>
<tr>
    <td align="center" height="36" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][employer]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employer"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employer"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][address]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["address"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["address"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][phone]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["phone"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["phone"] : "", array("style"=>"width:70%", 'class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][department]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["department"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["department"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][position]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["position"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["department"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][employment_length]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employment_length"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["employment_length"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][salary]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["salary"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["salary"] : "", array("style"=>"width:70%", 'class'=>'currency'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("EmploymentInfo[$cnt][$cnt2][supervisor_name]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["supervisor_name"]) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt][$cnt2]["supervisor_name"] : "", array("style"=>"width:70%"));
        ?>
    </td>
</tr>
<tr>
    <td align="center" height="36" style="width:20%">
        <?php 
            if($required){
                $htmlOptions = array("style"=>"width:70%", 'required' => 'required');
            } else {
                $htmlOptions = array("style"=>"width:70%");
            }
            echo CHtml::textField(
                    "PersonalRefrence[$cnt][$cnt2][name]", 
                    isset(Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["name"]) ? Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["name"] : "", 
                    $htmlOptions
                );
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php             
            echo CHtml::textField("PersonalRefrence[$cnt][$cnt2][relation]", isset(Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["relation"]) ? Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["relation"] : "", $htmlOptions);
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("PersonalRefrence[$cnt][$cnt2][address]", isset(Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["address"]) ? Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["address"] : "", $htmlOptions);
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php 
            $phone = array('class'=>'phone');
            
            echo CHtml::textField("PersonalRefrence[$cnt][$cnt2][phone]", isset(Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["phone"]) ? Yii::app()->session['step5']['PersonalRefrence'][$cnt][$cnt2]["phone"] : "", array_merge($htmlOptions,$phone));
        ?>
    </td>
</tr>
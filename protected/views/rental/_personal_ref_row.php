<tr>
    <td align="center" height="36" style="width:20%">
        <?php 
            if($required){
                $htmlOptions = array("style"=>"width:70%", 'required' => 'required');
            } else {
                $htmlOptions = array("style"=>"width:70%");
            }
            echo CHtml::textField(
                    "name$cnt$cnt2", 
                    isset(Yii::app()->session['step5']["name$cnt$cnt2"]) ? Yii::app()->session['step5']["name$cnt$cnt2"] : "", 
                    $htmlOptions
                );
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php             
            echo CHtml::textField("relation$cnt$cnt2", isset(Yii::app()->session['step5']["relation$cnt$cnt2"]) ? Yii::app()->session['step5']["relation$cnt$cnt2"] : "", $htmlOptions);
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("address$cnt$cnt2", isset(Yii::app()->session['step5']["address$cnt$cnt2"]) ? Yii::app()->session['step5']["address$cnt$cnt2"] : "", $htmlOptions);
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php 
            $phone = array('class'=>'phone');
            
            echo CHtml::textField("phone$cnt$cnt2", isset(Yii::app()->session['step5']["phone$cnt$cnt2"]) ? Yii::app()->session['step5']["phone$cnt$cnt2"] : "", array_merge($htmlOptions,$phone));
        ?>
    </td>
</tr>
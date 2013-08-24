    <tr id="deprowdata<?php echo $cnt.$cnt2 ?>">
        <td align="center" height="36" style="width:20%">
            <?php 
                echo CHtml::textField("DependantInfo[$cnt][$cnt2][name]", isset(Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["name"]) ? Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["name"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_name$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="width:20%">
            <?php 
                echo CHtml::textField("DependantInfo[$cnt][$cnt2][relation]", isset(Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["relation"]) ? Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["relation"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_relation$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="border-right-color:#dddddd">
            <?php 
                echo CHtml::textField("DependantInfo[$cnt][$cnt2][age]", isset(Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["age"]) ? Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["age"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_age$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="width:20%">
            <?php 
                echo CHtml::dropdownList("DependantInfo[$cnt][$cnt2][stay_in]", isset(Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["stay_in"]) ? Yii::app()->session['step2']['DependantInfo'][$cnt][$cnt2]["stay_in"] : "", array('1' => 'Yes', '0' => 'No'), array("style"=>"width:50%", 'id' => "DependantInfo_stay_in$cnt$cnt2", 'empty'=>'Choose one'));
            ?>
        </td>
        <?php /*
        <td align="center" style="border-right-color:#dddddd">
            <?php 
                echo CHtml::textField("DependantInfo[stay_in$cnt$cnt2]", isset(Yii::app()->session['step2']['DependantInfo']["stay_in$cnt$cnt2"]) ? Yii::app()->session['step2']['DependantInfo']["stay_in$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_stay_in$cnt$cnt2"));
            ?>
        </td>
         * 
         */ ?>
    </tr>
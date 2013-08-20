    <tr id="deprowdata<?php echo $cnt.$cnt2 ?>">
        <td align="center" height="36" style="width:20%">
            <?php 
                echo CHtml::textField("DependantInfo[name$cnt$cnt2]", isset(Yii::app()->session['step2']['DependantInfo']["name$cnt$cnt2"]) ? Yii::app()->session['step2']['DependantInfo']["name$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_name$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="width:20%">
            <?php 
                echo CHtml::textField("DependantInfo[relation$cnt$cnt2]", isset(Yii::app()->session['step2']['DependantInfo']["relation$cnt$cnt2"]) ? Yii::app()->session['step2']['DependantInfo']["relation$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_relation$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="border-right-color:#dddddd">
            <?php 
                echo CHtml::textField("DependantInfo[age$cnt$cnt2]", isset(Yii::app()->session['step2']['DependantInfo']["age$cnt$cnt2"]) ? Yii::app()->session['step2']['DependantInfo']["age$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "DependantInfo_age$cnt$cnt2"));
            ?>
        </td>
        <td align="center" style="width:20%">
            <?php 
                echo CHtml::dropdownList("DependantInfo[stay_in$cnt$cnt2]", isset(Yii::app()->session['step2']['DependantInfo']["stay_in$cnt$cnt2"]) ? Yii::app()->session['step2']['DependantInfo']["stay_in$cnt$cnt2"] : "", array('1' => 'Yes', '0' => 'No'), array("style"=>"width:50%", 'id' => "DependantInfo_stay_in$cnt$cnt2"));
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
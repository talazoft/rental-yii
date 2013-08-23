<tr id="vehrowdata<?php echo $cnt.$cnt2 ?>">
    <td align="center" height="36" style="width:20%">
        <?php 
            echo CHtml::textField("VehicleInfo[$cnt][$cnt2][license_plate]", isset(Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["license_plate"]) ? Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["license_plate"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_license_plate$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php 
            echo CHtml::textField("VehicleInfo[$cnt][$cnt2][maker_model]", isset(Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["maker_model"]) ? Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["maker_model"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_maker_model$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("VehicleInfo[$cnt][$cnt2][year]", isset(Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["year"]) ? Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["year"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_year$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("VehicleInfo[$cnt][$cnt2][color]", isset(Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["color"]) ? Yii::app()->session['step2']['VehicleInfo'][$cnt][$cnt2]["color"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_color$cnt$cnt2"));
        ?>
    </td>
</tr>
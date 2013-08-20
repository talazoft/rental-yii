<tr id="vehrowdata<?php echo $cnt.$cnt2 ?>">
    <td align="center" height="36" style="width:20%">
        <?php 
            echo CHtml::textField("VehicleInfo[license_plate$cnt$cnt2]", isset(Yii::app()->session['step2']['VehicleInfo']["license_plate$cnt$cnt2"]) ? Yii::app()->session['step2']['VehicleInfo']["license_plate$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_license_plate$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="width:20%">
        <?php 
            echo CHtml::textField("VehicleInfo[maker_model$cnt$cnt2]", isset(Yii::app()->session['step2']['VehicleInfo']["maker_model$cnt$cnt2"]) ? Yii::app()->session['step2']['VehicleInfo']["maker_model$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_maker_model$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("VehicleInfo[year$cnt$cnt2]", isset(Yii::app()->session['step2']['VehicleInfo']["year$cnt$cnt2"]) ? Yii::app()->session['step2']['VehicleInfo']["year$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_year$cnt$cnt2"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("VehicleInfo[color$cnt$cnt2]", isset(Yii::app()->session['step2']['VehicleInfo']["color$cnt$cnt2"]) ? Yii::app()->session['step2']['VehicleInfo']["color$cnt$cnt2"] : "", array("style"=>"width:70%", 'id' => "VehicleInfo_color$cnt$cnt2"));
        ?>
    </td>
</tr>
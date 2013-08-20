<tr>
    <td align="center" height="36" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("employer$cnt$cnt2", isset(Yii::app()->session['step4']["employer$cnt$cnt2"]) ? Yii::app()->session['step4']["employer$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("address$cnt$cnt2", isset(Yii::app()->session['step4']["address$cnt$cnt2"]) ? Yii::app()->session['step4']["address$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("phone$cnt$cnt2", isset(Yii::app()->session['step4']["phone$cnt$cnt2"]) ? Yii::app()->session['step4']["phone$cnt$cnt2"] : "", array("style"=>"width:70%", 'class'=>'phone'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("department$cnt$cnt2", isset(Yii::app()->session['step4']["department$cnt$cnt2"]) ? Yii::app()->session['step4']["department$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("position$cnt$cnt2", isset(Yii::app()->session['step4']["position$cnt$cnt2"]) ? Yii::app()->session['step4']["department$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("employment_length$cnt$cnt2", isset(Yii::app()->session['step4']["employment_length$cnt$cnt2"]) ? Yii::app()->session['step4']["employment_length$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("salary$cnt$cnt2", isset(Yii::app()->session['step4']["salary$cnt$cnt2"]) ? Yii::app()->session['step4']["salary$cnt$cnt2"] : "", array("style"=>"width:70%", 'class'=>'currency'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("supervisor_name$cnt$cnt2", isset(Yii::app()->session['step4']["supervisor_name$cnt$cnt2"]) ? Yii::app()->session['step4']["supervisor_name$cnt$cnt2"] : "", array("style"=>"width:70%"));
        ?>
    </td>
</tr>
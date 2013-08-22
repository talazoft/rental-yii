<form class="step7-form" id="other-<?php echo $cnt ?>">
    <table width="100%" border="0" style="margin: 0px; display: table;" class="tbl-bi" id="bi-<?php echo $cnt ?>">
        <tbody>
            <tr>
                <td colspan="6">&nbsp;</td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    Have you ever filled any petition under Bankruptcy Act? 
                </td>
                <td>
                    <?php 
                        echo CHtml::radioButtonList("bankrupt$cnt", isset(Yii::app()->session['step7']["bankrupt$cnt"]) ? Yii::app()->session['step7']["bankrupt$cnt"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ")); 
                    ?>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("bankrupted_at$cnt", isset(Yii::app()->session['step7']["bankrupted_at$cnt"]) ? Yii::app()->session['step7']["bankrupted_at$cnt"] : "");
                    ?>
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    Has your income tax return ever been questioned by the IRS? 
                </td>
                <td>
                    <?php 
                        echo CHtml::radioButtonList("is_questioned$cnt", isset(Yii::app()->session['step7']["is_questioned$cnt"]) ? Yii::app()->session['step7']["is_questioned$cnt"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ")); 
                    ?>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("questioned_at$cnt", isset(Yii::app()->session['step7']["questioned_at$cnt"]) ? Yii::app()->session['step7']["questioned_at$cnt"] : "");
                    ?>
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    Have you ever been evicted for nonpayment of rent or any other reason? 
                </td>
                <td colspan="2">
                    <?php 
                        echo CHtml::radioButtonList("is_evicted$cnt", isset(Yii::app()->session['step7']["is_evicted$cnt"]) ? Yii::app()->session['step7']["is_evicted$cnt"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ")); 
                    ?>
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td valign="top">
                    Please explain any yes answers here:
                </td>
                <td colspan="3">
                    <?php 
                        echo CHtml::textArea("explanation$cnt", isset(Yii::app()->session['step7']["explanation$cnt"]) ? Yii::app()->session['step7']["explanation$cnt"] : "", array('rows'=>4, 'cols'=>100, 'style'=>'width: 340px')); 
                    ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td align="center" colspan="8"> 
                    <hr class="dashed">
                </td>
            </tr>
        </tbody>
    </table>
</form>
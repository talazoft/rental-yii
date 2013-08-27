<script>
    $(function(){
        $('#bankrupt input:radio').on('change', function(){
            alert($('#bankrupt input:radio').val());
        });
    });
</script>
<form class="step7-form" id="other-<?php echo $cnt ?>" postable>
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
                    <div id="bankrupt<?php echo $cnt ?>" >
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][bankrupt]", isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupt"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupt"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ", 'required'=>'required')); 
                    ?>
                    </div>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("GeneralInfo[$cnt][bankrupted_at]", isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupted_at"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupted_at"] : "", array('id'=>"bankrupted_at$cnt"));
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
                    <div id="is_questioned<?php echo $cnt ?>" >
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][is_questioned]", isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_questioned"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_questioned"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ", 'id'=>"is_questioned$cnt", 'required'=>'required')); 
                    ?>
                    </div>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("GeneralInfo[$cnt][questioned_at]", isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["questioned_at"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["questioned_at"] : "", array('id'=>"questioned_at$cnt"));
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
                    <div id="is_evicted<?php echo $cnt ?>" >
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][is_evicted]", isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_evicted"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_evicted"] : "",array('1'=>'Yes','0'=>'No'), array( 'separator' => "  ", 'id'=>"is_evicted$cnt", 'required'=>'required')); 
                    ?>
                    </div>
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
                        echo CHtml::textArea("GeneralInfo[$cnt][explanation]", isset(Yii::app()->session['step7']['GeneralInfo'][$cnt]["explanation"]) ? Yii::app()->session['step7']['GeneralInfo']["$cnt"]["explanation"] : "", array('rows'=>4, 'cols'=>100, 'style'=>'width: 340px', 'id'=>"explanation$cnt")); 
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
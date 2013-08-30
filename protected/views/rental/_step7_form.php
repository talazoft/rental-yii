<script>
    $(function(){
        //bankrupt
        function bankrupt(val){
            if(val == 1){
                $("#bankrupted_at<?php echo $cnt ?>").attr('required', 'required');
                $("#explanation<?php echo $cnt ?>").attr('required', 'required');
            } else {
                $("#bankrupted_at<?php echo $cnt ?>").removeAttr('required');
                $("#bankrupted_at<?php echo $cnt ?>").css({border:"", color:""});
                
                $("#explanation<?php echo $cnt ?>").removeAttr('required');
                $("#explanation<?php echo $cnt ?>").css({border:"", color:""});
            }
        }
        $('.bankrupt<?php echo $cnt; ?>').on('change', function(){
            var val = $(this).val();
            bankrupt(val);
        });   
        bankrupt($('.bankrupt<?php echo $cnt; ?>').val());
        
        if($('.bankrupt<?php echo $cnt; ?>').is(":checked")){
            var val = $(this).val();
            bankrupt(val);
        }
        
        //questioned
        function is_questioned(val){
            if(val == 1){
                $("#questioned_at<?php echo $cnt ?>").attr('required', 'required');
                $("#explanation<?php echo $cnt ?>").attr('required', 'required');
            } else {
                $("#questioned_at<?php echo $cnt ?>").removeAttr('required');
                $("#questioned_at<?php echo $cnt ?>").css({border:"", color:""});
                
                $("#explanation<?php echo $cnt ?>").removeAttr('required');
                $("#explanation<?php echo $cnt ?>").css({border:"", color:""});
            }
        }
        
        $('.is_questioned<?php echo $cnt; ?>').on('change', function(){
            var val = $(this).val();
            is_questioned(val);
        });
        is_questioned($('.is_questioned<?php echo $cnt; ?>').val());
        if($('.is_questioned<?php echo $cnt; ?>').is(":checked")){
            var val = $(this).val();
            is_questioned(val);
        }
        
        function is_evicted(val){
            if(val == 1){
                $("#explanation<?php echo $cnt ?>").attr('required', 'required');
            } else {
                $("#explanation<?php echo $cnt ?>").removeAttr('required');
                $("#explanation<?php echo $cnt ?>").css({border:"", color:""});
            }
        }
        is_evicted($(".is_evicted<?php echo $cnt; ?>").val());
        $(".is_evicted<?php echo $cnt; ?>").on('change', function(){
            var val = $(this).val();
            is_evicted(val);
        });
        
        if($(".is_evicted<?php echo $cnt; ?>").is(":checked")){
            var val = $(this).val();
            is_evicted(val);
        }
        
        function skipgi(){
            for(var i=2;i<=<?php echo $cnt ?>;i++){
                var form = $("#other-"+i);
                if($("#skip-gi").is(":checked")){
                    form.find("input[required='required'], textarea[required='required']").each(function(){
                         var elem = $(this);
                         if(elem.hasAttr('required')){
                             elem.removeAttr("required");
                             elem.attr("notrequired","notrequired");
                            $("#explanation"+i).removeAttr('required');
                            $("#explanation"+i).css({border:"", color:""});
                         }
                    });
                } else {
                    form.find("input[notrequired='notrequired'], textarea[notrequired='notrequired']").each(function(){
                        var elem = $(this);
                        if(elem.hasAttr('notrequired')){
                            elem.removeAttr("notrequired");
                            elem.attr('required', 'required');
                        }
                    });
                }
            }
        }
        $("#skip-gi").unbind('change').on('change', function(){
            skipgi();
        });
        
        skipgi();
    });
</script>

<form class="step7-form" id="other-<?php echo $cnt ?>" postable>
    <table width="100%" border="0" style="margin: 0px; display: table;" class="tbl-bi" id="bi-<?php echo $cnt ?>">
        <tbody>
            <tr>
                <td colspan="6">
                    <?php 
                    if($cnt >= 2){
                    echo CHtml::checkbox("skip-gi", 
                            isset(Yii::app()->session['step7']['skip-gi']) ? true : false, 
                            array('id'=>'skip-gi'))." skip to continue"; 
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>
                <td>
                    Have you ever filled any petition under Bankruptcy Act? 
                </td>
                <td>
                    <div id="bankruptdiv<?php echo $cnt ?>" style="height: 23px;">
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][bankrupt]", 
                                isset(Yii::app()->session['step7']['GeneralInfo'][$cnt]["bankrupt"]) ? 
                                Yii::app()->session['step7']['GeneralInfo'][$cnt]["bankrupt"] : "",
                                array('1'=>'Yes','0'=>'No'), 
                                array( 'separator' => "  ", 
                                    'required'=>'required', 
                                    'class'=>"bankrupt$cnt")); 
                    ?>
                    </div>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("GeneralInfo[$cnt][bankrupted_at]", 
                                isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupted_at"]) ? 
                                Yii::app()->session['step7']['GeneralInfo']["$cnt"]["bankrupted_at"] : "", 
                                array('id'=>"bankrupted_at$cnt"));
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
                    <div id="questioneddiv<?php echo $cnt ?>"  style="height: 23px;">
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][is_questioned]", 
                                isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_questioned"]) ? 
                                Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_questioned"] : "",
                                array('1'=>'Yes','0'=>'No'), 
                                array( 'separator' => "  ", 
                                    'required'=>'required', 
                                    'class'=>"is_questioned$cnt")); 
                    ?>
                    </div>
                </td>
                <td>
                    if so, When?
                </td>
                <td>
                    <?php 
                        echo CHtml::textField("GeneralInfo[$cnt][questioned_at]", 
                                isset(Yii::app()->session['step7']['GeneralInfo'][$cnt]["questioned_at"]) ? 
                                Yii::app()->session['step7']['GeneralInfo']["$cnt"]["questioned_at"] : "", 
                                array('id'=>"questioned_at$cnt"));
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
                    <div id="is_evicted<?php echo $cnt ?>"  style="height: 23px;">
                    <?php 
                        echo CHtml::radioButtonList("GeneralInfo[$cnt][is_evicted]", 
                                isset(Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_evicted"]) ? 
                                Yii::app()->session['step7']['GeneralInfo']["$cnt"]["is_evicted"] : "",
                                array('1'=>'Yes','0'=>'No'), 
                                array( 'separator' => "  ", 'class'=>"is_evicted$cnt", 'required'=>'required')); 
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
                        echo CHtml::textArea("GeneralInfo[$cnt][explanation]", 
                                isset(Yii::app()->session['step7']['GeneralInfo'][$cnt]["explanation"]) ? 
                                Yii::app()->session['step7']['GeneralInfo']["$cnt"]["explanation"] : "", 
                                array('rows'=>4, 'cols'=>100, 'style'=>'width: 340px', 'id'=>"explanation$cnt", 'required'=>'required')); 
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
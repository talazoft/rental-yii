<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
        $(".zip").mask("99999");
        
        var rescnt = <?php echo Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"] ? Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"] : 2 ?>;
        $("#plusri<?php echo $cnt; ?>").unbind("click").click(function(event){
            var resnewrowurl = "<?php echo Yii::app()->createUrl('/rental/resnewrow'); ?>";
            $.post(resnewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:rescnt}, function(response){
                $("#restbl-body<?php echo $cnt; ?>").append(response);
            });

            $("#ResidentalHistory_rescnt2<?php echo $cnt; ?>").val(rescnt);
            
            rescnt++;
            
            if(rescnt > 2){
                $("#minusri<?php echo $cnt; ?>").show();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        $("#minusri<?php echo $cnt; ?>").unbind("click").click(function(event){
        
            $("#restbl-body<?php echo $cnt; ?> tr.restblrow:last").remove();

            rescnt--;
            
            $("#ResidentalHistory_rescnt2<?php echo $cnt; ?>").val(rescnt);
            
            if(rescnt == 2){
                $(this).hide();
            }
            
            event.stopPropagation();

            return false;
        });
        
        if(rescnt == 2){
            $("#minusri<?php echo $cnt; ?>").hide();
        }
        
        $("#skip-resident").change(function(){
            skipstatusaction();     
        });
        
        skipstatusaction();     
        
        function skipstatusaction(){
            for(var i=2;i<=<?php echo $cnt ?>;i++){
                var form = $("#resident-"+i);
                if($("#skip-resident").is(":checked")){
                    form.find(":required").each(function(){
                        $(this).removeAttr("required");
                        $(this).attr("notrequired","notrequired");
                    });
                } else {
                    $('input[notrequired="notrequired"]').each(function(){
                        $(this).removeAttr("notrequired");
                        $(this).attr('required', 'required');
                    });
                }
            }
        }
    });
</script>
<form class="step3-form" id="resident-<?php echo isset($cnt) ? $cnt : "" ?>" method="POST" postable>
    <table id="restbl<?php echo $cnt; ?>">
        <tbody id="restbl-body<?php echo $cnt; ?>">
        <?php 
        if(!isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"])){
            echo $this->renderPartial("_residental_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
        } else {
            if(Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"] > 1){
                $t = Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"];
                for($i=1;$i<=$t;$i++){
                    echo $this->renderPartial("_residental_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                }
            } else {
                echo $this->renderPartial("_residental_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
            }
        }
        ?>
        </tbody>
    </table>
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td align="center" colspan="8"> 
                    <a name="plusri<?php echo $cnt; ?>" id="plusri<?php echo $cnt; ?>">
                        <img border="0" src="images/plus.png"> 
                    </a> 
                    <a name="minusri<?php echo $cnt; ?>" id="minusri<?php echo $cnt; ?>">
                        <img src="images/minus.png">
                    </a>
                    <?php
                        echo CHtml::hiddenField("ResidentalHistory[$cnt][rescnt2]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt]["rescnt2"] : "", array('id'=>"ResidentalHistory_rescnt2$cnt"));
                    ?>
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

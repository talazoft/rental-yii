<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
        $(".zip").mask("99999");
        
        var rescnt = <?php echo Yii::app()->session['step3']["rescnt2$cnt"] ? Yii::app()->session['step3']["rescnt2$cnt"] : 2 ?>;
        $("#plusri<?php echo $cnt; ?>").unbind("click").click(function(event){
            var resnewrowurl = "<?php echo Yii::app()->createUrl('/rental/resnewrow'); ?>";
            $.post(resnewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:rescnt}, function(response){
                $("#restbl-body<?php echo $cnt; ?>").append(response);
            });

            $("#rescnt2<?php echo $cnt; ?>").val(rescnt);
            
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
            
            $("#rescnt2<?php echo $cnt; ?>").val(rescnt);
            
            if(rescnt == 2){
                $(this).hide();
            }
            
            event.stopPropagation();

            return false;
        });
        
        if(rescnt == 2){
            $("#minusri<?php echo $cnt; ?>").hide();
        }
    });
</script>
<form class="step3-form" id="resident-<?php echo isset($cnt) ? $cnt : "" ?>" method="POST">
    <table id="restbl<?php echo $cnt; ?>">
        <tbody id="restbl-body<?php echo $cnt; ?>">
        <?php 
        if(!isset(Yii::app()->session['step3']["rescnt2$cnt"])){
            echo $this->renderPartial("_residental_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
        } else {
            if(Yii::app()->session['step3']["rescnt2$cnt"] > 1){
                $t = Yii::app()->session['step3']["rescnt2$cnt"];
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
                        echo CHtml::hiddenField("rescnt2$cnt", Yii::app()->session['step3']["rescnt2$cnt"] ? Yii::app()->session['step3']["rescnt2$cnt"] : "", array('id'=>"rescnt2$cnt"));
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

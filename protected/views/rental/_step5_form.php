<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();  
        
        var prcnt2 = <?php echo isset(Yii::app()->session['step5']["prcnt2$cnt"]) ? Yii::app()->session['step5']["prcnt2$cnt"] : 4 ?>;
        $("#pluspr<?php echo $cnt; ?>").unbind("click").click(function(event){
            var prnewrowurl = "<?php echo Yii::app()->createUrl('/rental/prnewrow'); ?>";
            $.post(prnewrowurl, {cnt:<?php echo $cnt; ?>, cnt2:prcnt2}, function(response){
                $("#prtbl<?php echo $cnt; ?> tbody:last").append(response);
            });
            
            $("#prcnt2<?php echo $cnt; ?>").val(prcnt2);
            
            prcnt2++;
            
            if(prcnt2 > 4){
                $("#minuspr<?php echo $cnt; ?>").show();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        $("#minuspr<?php echo $cnt; ?>").unbind("click").click(function(event){
            $("#prtbl<?php echo $cnt; ?> tr:last").remove();
            
            prcnt2--;
            
            $("#prcnt2<?php echo $cnt; ?>").val(prcnt2);
            
            if(prcnt2 == 2){
                $(this).hide();
            }
            
            event.stopPropagation();

            return false;
        });
        
        if(prcnt2 == 4){
            $("#minuspr<?php echo $cnt; ?>").hide();
        }
    });
</script>
<form class="step5-form" method="post" name="personalref-<?php echo $cnt ?>" id="personalref-<?php echo $cnt ?>"> 
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td colspan="5">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <b>
                                        <div id="firstnamepr1">Personal Reference</div>
                                    </b> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <table id="prtbl<?php echo $cnt; ?>" width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe">
                        <tbody>
                            <tr>
                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Name</th>
                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Relationship</th>
                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                            </tr>
                            <?php 
                                if(!isset(Yii::app()->session['step5']["prcnt2$cnt"])){
                                    for($i=1;$i<=3;$i++){
                                        echo $this->renderPartial("_personal_ref_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                    }
                                } else {
                                    if(Yii::app()->session['step5']["prcnt2$cnt"] > 3){
                                        $t = Yii::app()->session['step5']["prcnt2$cnt"];
                                        for($i=1;$i<=$t;$i++){
                                            echo $this->renderPartial("_personal_ref_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                        }
                                    } else {
                                        for($i=1;$i<=3;$i++){
                                            echo $this->renderPartial("_personal_ref_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                        }
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table> 
    <div id="subpr1">
    </div>
</form>
<table width="100%">
    <tbody>
        <tr>
            <td align="center" colspan="5"> 
                <a name="pluspr<?php echo $cnt; ?>" id="pluspr<?php echo $cnt; ?>">
                    <img border="0" src="images/plus.png"> 
                </a> 
                <a name="minuspr<?php echo $cnt; ?>" id="minuspr<?php echo $cnt; ?>">
                    <img src="images/minus.png">
                </a>
                <?php 
                    echo CHtml::hiddenField("prcnt2$cnt", isset(Yii::app()->session['step4']["prcnt2$cnt"]) ? Yii::app()->session['step4']["prcnt2$cnt"] : "", array('id'=>"prcnt2$cnt"));
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
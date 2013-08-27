<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();  
        
        $("#skip-cfi").change(function(){
            skipcfi();     
        });
        
        skipcfi();     
        
        function skipcfi(){
            for(var i=2;i<=<?php echo $cnt ?>;i++){
                var form = $("#creditfinance-"+i);
                if($("#skip-cfi").is(":checked")){
                    form.find("input[required='required']").each(function(){
                         var elem = $(this);
                         if(elem.hasAttr('required')){
                             elem.removeAttr("required");
                             elem.attr("notrequired","notrequired");
                         }
                    });
                } else {
                    form.find("input[required='required']").each(function(){
                        var elem = $(this);
                        if(elem.hasAttr('notrequired')){
                            elem.removeAttr("notrequired");
                            elem.attr('required', 'required');
                        }
                    });
                }
            }
        }
    });
</script>
<form class="step6-form" method="post" name="creditfinance-<?php echo $cnt ?>" id="creditfinance-<?php echo $cnt ?>" postable>
    <?php if($cnt == 2){ ?>
    <table>
        <tbody>
            <tr>
                <td><?php echo CHtml::checkbox("skip-cfi", isset(Yii::app()->session['step6']['skip-cfi']) ? true : false, array('id'=>'skip-cfi'))." skip to continue"; ?></td>
            </tr>
        </tbody>
    </table><?php 
    } ?>
    <table>
        <tbody>
            <tr>
                <td>Credit & Financial Condition of <?php echo Utils::fullname($cnt); ?></td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tbody>
            <?php 
                $this->renderPartial("_credit_info", array('cnt'=>$cnt, 'cnt2'=>$cnt2))
            ?>
            <?php 
                $this->renderPartial("_credit_ref", array('cnt'=>$cnt, 'cnt2'=>$cnt2));
            ?>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>
                    <b>Financial Condition:</b>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <?php $this->renderPartial("_monthly_income", array('cnt'=>$cnt, 'cnt2'=>$cnt2)); ?>
                                </td>
                                <td>
                                    <?php $this->renderPartial("_expenditures", array('cnt'=>$cnt, 'cnt2'=>$cnt2)); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        $this->renderPartial("_stock_bonds", array('cnt'=>$cnt, 'cnt2'=>$cnt2));
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="6"> <hr class="dashed"></td>
            </tr>
        </tbody>
    </table>
</form>
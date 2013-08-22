<script>
    $(function(){
        var stockcnt2 = <?php echo isset(Yii::app()->session['step6']["stockcnt2$cnt"]) ? Yii::app()->session['step6']["stockcnt2$cnt"] : 2 ?>;
        $("#plusstock<?php echo $cnt; ?>").unbind('click').click(function(event){
            var stocknewrowurl = "<?php echo Yii::app()->createUrl('/rental/stocknewrow'); ?>";
            
            $.post(stocknewrowurl, {cnt:<?php echo $cnt; ?>, cnt2:stockcnt2}, function(response){
                $("#stockbody<?php echo $cnt; ?>").append(response)
            });
            
            $("#StockBonds_stockcnt2<?php echo $cnt; ?>").val(stockcnt2);
            
            stockcnt2++;
            
            if(stockcnt2 > 2){
                $("#minusstock<?php echo $cnt; ?>").show();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        $("#minusstock<?php echo $cnt; ?>").unbind("click").click(function(event){
            $(".stockrow<?php echo $cnt; ?> :last").remove();
            
            stockcnt2--;
            
            $("#StockBonds_stockcnt2<?php echo $cnt; ?>").val(stockcnt2);
            
            if(stockcnt2 == 2){
                $(this).hide();
            }
            
            event.stopPropagation();

            return false;
        });
        
        if(stockcnt2 == 2){
            $("#minusstock<?php echo $cnt; ?>").hide();
        }
    });
</script>
<table width="100%">
    <tbody>
        <tr>
            <td>
                <b>Stock & Bonds</b>
            </td>
        </tr>
        <tr>
            <td>
                <table id="tblstock<?php echo $cnt; ?>" width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe">
                    <tbody id="stockbody<?php echo $cnt; ?>">
                        <tr class="stockrow<?php echo $cnt; ?>">
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                Stock & Bonds
                            </th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                Where Quote
                            </th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                Cost or Market
                            </th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                Title in Name of
                            </th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                Quantity
                            </th>
                              <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">
                                value
                            </th>
                        </tr>
                        <?php
                            $this->renderPartial('_stock_bonds_row', array('cnt'=>1, 'cnt2'=>1));
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="5"> 
                <a name="plusstock<?php echo $cnt; ?>" id="plusstock<?php echo $cnt; ?>">
                    <img border="0" src="images/plus.png"> 
                </a> 
                <a name="minusstock<?php echo $cnt; ?>" id="minusstock<?php echo $cnt; ?>">
                    <img src="images/minus.png">
                </a>
                <?php 
                    echo CHtml::hiddenField("StockBonds[stockcnt2$cnt]", isset(Yii::app()->session['step6']['StockBonds']["stockcnt2$cnt"]) ? Yii::app()->session['step6']['StockBonds']["stockcnt2$cnt"] : "", array('id'=>"StockBonds_stockcnt2$cnt"));
                ?>
            </td>
        </tr>
    </tbody>
</table>
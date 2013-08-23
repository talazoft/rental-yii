<tr class="stockrow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][stock_bonds]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["stock_bonds"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["stock_bonds"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][where_bonds]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["where_bonds"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["where_bonds"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][market_cost]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["market_cost"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["market_cost"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][title_name]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["title_name"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["title_name"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][quantity]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["quantity"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["quantity"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[$cnt][$cnt2][value]", isset(Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["value"]) ? Yii::app()->session['step6']["StockBonds"][$cnt][$cnt2]["value$cnt$cnt2"] : "", array('style'=>'width:70%', 'class'=>'currency'));
        ?>
    </td>
</tr>
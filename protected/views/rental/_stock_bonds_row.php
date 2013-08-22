<tr class="stockrow<?php echo $cnt; ?>">
    <td height="36" align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[stock_bonds$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["stock_bonds$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["stock_bonds$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[where_bonds$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["where_bonds$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["where_bonds$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[market_cost$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["market_cost$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["market_cost$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[title_name$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["title_name$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["title_name$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[quantity$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["quantity$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["quantity$cnt$cnt2"] : "", array('style'=>'width:70%'));
        ?>
    </td>
    <td align="center" style="border-right-color:#dddddd">
        <?php 
            echo CHtml::textField("StockBonds[value$cnt$cnt2]", isset(Yii::app()->session['step6']["StockBonds"]["value$cnt$cnt2"]) ? Yii::app()->session['step6']["StockBonds"]["value$cnt$cnt2"] : "", array('style'=>'width:70%', 'class'=>'currency'));
        ?>
    </td>
</tr>
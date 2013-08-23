<table>
    <tbody>
        <tr>
            <td>
                <table width="791px" border=1 style="border-collapse:collapse; border-color:#bebebe" id='tbl-selfemployed<?php echo $cnt; ?>' style="width:790px; display: none">
                    <tr>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Business Name</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Business Type</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Years in Business</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Stay Length</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Landlord Name</th>
                        <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                    </tr>
                    <?php 
                        if(!isset(Yii::app()->session['step4']["eiiself$cnt"])){
                            echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                        } else {
                            if(Yii::app()->session['step4']["eiiself$cnt"] > 1){
                                $t = Yii::app()->session['step4']["eiiself$cnt"];
                                for($i=1;$i<=$t;$i++){
                                    echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                }
                            } else {
                                echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                            }
                        }
                    ?>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <div id="plusminuseiiself<?php echo $cnt; ?>">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td align="center" colspan="6"> 
                                    <a id="pluseiiself<?php echo $cnt; ?>"> 
                                        <img border="0" src="images/plus.png"> 
                                    </a>
                                    <a id="minuseiiself<?php echo $cnt; ?>">
                                        <img src="images/minus.png">
                                    </a>
                                </td>
                                <?php 
                                    echo CHtml::hiddenField("eiiself$cnt", isset(Yii::app()->session['step4']["eiiself$cnt"]) ? Yii::app()->session['step4']["eiiself$cnt"] : "", array('id'=>"eiiself$cnt"));
                                ?>
                            </tr>
                            <tr>
                                <td align="center" colspan="6"> <hr class="dashed"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<table>
    <tbody>
        <tr>
            <td>
                <table width="791px" border="1" style="border-collapse:collapse; border-color:#bebebe" id='tbl-employed<?php echo $cnt; ?>' style="width:790px">
                    <tbody>
                        <tr>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Employer</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Department</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Position/Title</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Length of Employment</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Salary</th>
                            <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Supervisor's Name</th>
                        </tr>
                        <?php 
                        if(!isset(Yii::app()->session['step4']["eiiempl$cnt"])){
                            echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                        } else {
                            if(Yii::app()->session['step4']["eiiempl$cnt"] > 1){
                                $t = Yii::app()->session['step4']["eiiempl$cnt"];
                                for($i=1;$i<=$t;$i++){
                                    echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                }
                            } else {
                                echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <div id="plusminuseiiempl<?php echo $cnt; ?>">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td align="center" colspan="6"> 
                                    <a id="pluseiiempl<?php echo $cnt; ?>"> 
                                        <img border="0" src="images/plus.png"> 
                                    </a>
                                    <a id="minuseiiempl<?php echo $cnt; ?>">
                                        <img src="images/minus.png">
                                    </a>
                                </td>
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
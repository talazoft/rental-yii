<tr class="restblrow">
    <td>
        <table width="100%" border="0" id="tblresident<?php echo isset($cnt) && isset($cnt2) ? $cnt.$cnt2 : "" ?>">
            <tbody>
                <td valign="top" colspan="8">
                    <?php
                        if($cnt == 2){
                            echo CHtml::checkbox("chk-resident-2", isset(Yii::app()->session['step3']['chk-resident-2']) ? true : false, array('class'=>'skipstep3'))." skip to continue";
                        }
                    ?>  
                </td>
                <?php /*
                <tr>
                    <td valign="top" colspan="8">
                        <div style="color:red" id="msgboxrh<?php echo isset($cnt) && isset($cnt2) ? $cnt.$cnt2 : "" ?>">    
                        </div>
                    </td>
                </tr> */ ?>
                <tr>
                    <td colspan="8">

                        <table border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="firstnamerh<?php echo isset($cnt) && isset($cnt2) ? $cnt.$cnt2 : "" ?>">
                                            <b>
                                                Residential History of <?php echo Utils::fullname($cnt);?>
                                            </b>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="17%"><label>Current Address</label></td>
                    <td>:</td>
                    <td width="32%">
                        <?php 
                            echo CHtml::textField("address$cnt$cnt2", isset(Yii::app()->session['step3']["address$cnt$cnt2"]) ? Yii::app()->session['step3']["address$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"address$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>				

                    <td><label>Unit</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("unit$cnt$cnt2", isset(Yii::app()->session['step3']["unit$cnt$cnt2"]) ? Yii::app()->session['step3']["unit$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"address$cnt$cnt2")); 
                        ?>
                    </td>
                </tr>

                <tr>
                    <td><label>City</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("city$cnt$cnt2", isset(Yii::app()->session['step3']["city$cnt$cnt2"]) ? Yii::app()->session['step3']["city$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"city$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>	

                    <td><label>State</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("state$cnt$cnt2", isset(Yii::app()->session['step3']["state$cnt$cnt2"]) ? Yii::app()->session['step3']["state$cnt$cnt2"] : "", array('style'=>'width:84px', 'id'=>"state$cnt$cnt2", 'required'=>'required'))." Zip Code : ".CHtml::textField("zip$cnt$cnt2", Yii::app()->session['step3']["zip$cnt$cnt2"] ? Yii::app()->session['step3']["zip$cnt$cnt2"] : "", array('style'=>'width:94px', 'id'=>"zip$cnt$cnt2", 'maxlength'=>"5", 'size'=>"5", 'class'=>'zip', 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Month / Year Moved In</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            $months = array(
                                "January" => "January",
                                "February" => "February",
                                "March" => "March",
                                "April" => "April",
                                "May" => "May",
                                "June" => "June",
                                "July" => "July",
                                "August" => "August",
                                "September" => "September",
                                "October" => "October",
                                "November" => "November",
                                "December" => "December"
                            );

                            $years = array();
                            for($i = date('Y'); $i >= date('Y')-10; $i--){
                                $years[$i] = $i;
                            }

                            echo CHtml::dropDownList("month$cnt$cnt2", isset(Yii::app()->session['step3']["month$cnt$cnt2"]) ? Yii::app()->session['step3']["month$cnt$cnt2"] : "", $months, array('style'=>"width:41%", 'required'=>'required'))
                                    ." / ".CHtml::dropDownList("year$cnt$cnt2", isset(Yii::app()->session['step3']["year$cnt$cnt2"]) ? Yii::app()->session['step3']["year$cnt$cnt2"] : "", $years, array('style'=>"width:30%", 'required'=>'required'));
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                    <td><label>Rent $</label><input type="hidden" value="0" name="counterrh1" id="counterrh1"></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("rent$cnt$cnt2", isset(Yii::app()->session['step3']["rent$cnt$cnt2"]) ? Yii::app()->session['step3']["rent$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"rent$cnt$cnt2", 'class'=>'currency', 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>
                <tr>
                <td><label>Lanlord / Agent </label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::dropDownList("agent_landlord_type$cnt$cnt2", isset(Yii::app()->session['step3']["agent_landlord_type$cnt$cnt2"]) ? Yii::app()->session['step3']["agent_landlord_type$cnt$cnt2"] : "", array("Lanlord"=>"Lanlord", "Agent"=>"Agent"),array('style'=>'width:75%', 'required'=>'required'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td colspan="4">
                    <label>Reason For Leaving</label>
                </td>
                </tr>
                <tr>
                    <td><label>Name</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("agent_landlord_name$cnt$cnt2", isset(Yii::app()->session['step3']["agent_landlord_name$cnt$cnt2"]) ? Yii::app()->session['step3']["agent_landlord_name$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"agent_landlord_name$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                    <td valign="top" rowspan="2" colspan="4">
                        <?php 
                            echo CHtml::textArea("leave_reason$cnt$cnt2", isset(Yii::app()->session['step3']["leave_reason$cnt$cnt2"]) ? Yii::app()->session['step3']["leave_reason$cnt$cnt2"] : "", array('style'=>'width:78%; height:70%', 'id'=>"leave_reason$cnt$cnt2", 'rows'=>"2", 'cols'=>"46", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>

                <tr>
                    <td><label>Phone</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("agent_landlord_phone$cnt$cnt2", isset(Yii::app()->session['step3']["agent_landlord_phone$cnt$cnt2"]) ? Yii::app()->session['step3']["agent_landlord_phone$cnt$cnt2"] : "", array('style'=>'width:75%', 'id'=>"agent_landlord_phone$cnt", 'class'=>'phone', 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
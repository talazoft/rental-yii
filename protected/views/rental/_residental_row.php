<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
    });
</script>
<tr class="restblrow">
    <td>
        <table width="100%" border="0" id="tblresident<?php echo isset($cnt) && isset($cnt2) ? $cnt.$cnt2 : "" ?>">
            <tbody>
                <td valign="top" colspan="8">
                    <?php
                        if($cnt == 2){
                            echo CHtml::checkbox("skip-resident", isset(Yii::app()->session['step3']['skip-resident']) ? true : false, array('class'=>'skip-resident'))." skip to continue";
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
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][address]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["address"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["address"] : "", array('style'=>'width:75%', 'id'=>"address$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>				

                    <td><label>Unit</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][unit]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["unit"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["unit"] : "", array('style'=>'width:75%', 'id'=>"address$cnt$cnt2")); 
                        ?>
                    </td>
                </tr>

                <tr>
                    <td><label>City</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][city]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["city"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["city"] : "", array('style'=>'width:75%', 'id'=>"city$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>	

                    <td><label>State</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][state]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["state"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["state"] : "", array('style'=>'width:84px', 'id'=>"state$cnt$cnt2", 'required'=>'required'))." Zip Code : ".CHtml::textField("ResidentalHistory[$cnt][$cnt2][zip]", Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["zip"] ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["zip"] : "", array('style'=>'width:94px', 'id'=>"zip$cnt$cnt2", 'maxlength'=>"5", 'size'=>"5", 'class'=>'zip', 'required'=>'required')); 
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

                            echo CHtml::dropDownList("ResidentalHistory[$cnt][$cnt2][month]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["month"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["month"] : "", $months, array('style'=>"width:41%", 'required'=>'required'))
                                    ." / ".CHtml::dropDownList("ResidentalHistory[$cnt][$cnt2][year]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["year"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["year"] : "", $years, array('style'=>"width:30%", 'required'=>'required'));
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                    <td><label>Rent $</label><input type="hidden" value="0" name="counterrh1" id="counterrh1"></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][rent]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["rent"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["rent"] : "", array('style'=>'width:75%', 'id'=>"rent$cnt$cnt2", 'class'=>'currency', 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>
                <tr>
                <td><label>Lanlord / Agent </label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::dropDownList("ResidentalHistory[$cnt][$cnt2][agent_landlord_type]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_type"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_type"] : "", array("Lanlord"=>"Lanlord", "Agent"=>"Agent"),array('style'=>'width:75%', 'required'=>'required'));
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
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][agent_landlord_name]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_name"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_name"] : "", array('style'=>'width:75%', 'id'=>"agent_landlord_name$cnt$cnt2", 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                    <td valign="top" rowspan="2" colspan="4">
                        <?php 
                            echo CHtml::textArea("ResidentalHistory[$cnt][$cnt2][leave_reason]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["leave_reason"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["leave_reason"] : "", array('style'=>'width:78%; height:70%', 'id'=>"leave_reason$cnt$cnt2", 'rows'=>"2", 'cols'=>"46")); 
                        ?>
                    </td>
                </tr>

                <tr>
                    <td><label>Phone</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo CHtml::textField("ResidentalHistory[$cnt][$cnt2][agent_landlord_phone]", isset(Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_phone"]) ? Yii::app()->session['step3']['ResidentalHistory'][$cnt][$cnt2]["agent_landlord_phone"] : "", array('style'=>'width:75%', 'id'=>"agent_landlord_phone$cnt", 'class'=>'phone', 'required'=>'required')); 
                        ?>
                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
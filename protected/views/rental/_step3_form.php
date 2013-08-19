<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
    });
</script>

<form class="step3-form" id="resident-<?php echo isset($cnt) ? $cnt : "" ?>" method="POST">
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td valign="top" colspan="8">
                    <div style="color:red" id="msgboxrh<?php echo isset($cnt) ? $cnt : "" ?>">    
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">

                    <table border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <div id="firstnamerh<?php echo isset($cnt) ? $cnt : "" ?>">
                                        <b>Residential History of</b>
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
                        echo CHtml::textField("address$cnt", "", array('style'=>'width:75%', 'id'=>"address$cnt", 'required'=>'required')); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>				

                <td><label>Unit</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("unit$cnt", "", array('style'=>'width:75%', 'id'=>"unit$cnt")); 
                    ?>
                </td>
            </tr>

            <tr>
                <td><label>City</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("city$cnt", "", array('style'=>'width:75%', 'id'=>"city$cnt")); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>	

                <td><label>State</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("state$cnt", "", array('style'=>'width:100px', 'id'=>"state$cnt"))." Zip Code : ".CHtml::textField("zip$cnt", "", array('style'=>'width:94px', 'id'=>"zip$cnt", 'maxlength'=>"5", 'size'=>"5")); 
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
                        
                        echo CHtml::dropDownList("month$cnt", Yii::app()->session["month$cnt"], $months, array('style'=>"width:41%"))
                                ." / ".CHtml::dropDownList("year$cnt", Yii::app()->session["year$cnt"], $years, array('style'=>"width:30%"));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td><label>Rent $</label><input type="hidden" value="0" name="counterrh1" id="counterrh1"></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("rent$cnt", "", array('style'=>'width:75%', 'id'=>"rent$cnt", 'class'=>'currency')); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
            </tr>
            <tr>
            <td><label>Lanlord / Agent </label></td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::dropDownList("agent_landlord_type$cnt", Yii::app()->session["agent_landlord_type$cnt"], array("Lanlord"=>"Lanlord", "Agent"=>"Agent"),array('style'=>'width:75%'));
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
                        echo CHtml::textField("agent_landlord_name$cnt", "", array('style'=>'width:75%', 'id'=>"agent_landlord_name$cnt")); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td valign="top" rowspan="2" colspan="4">
                    <?php 
                        echo CHtml::textArea("leave_reason$cnt", "", array('style'=>'width:78%; height:70%', 'id'=>"leave_reason$cnt", 'rows'=>"2", 'cols'=>"46")); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
            </tr>

            <tr>
                <td><label>Phone</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("agent_landlord_phone$cnt", "", array('style'=>'width:75%', 'id'=>"agent_landlord_phone$cnt", 'class'=>'phone')); 
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
            </tr>
        </tbody>
        <tr>
            <td align="center" colspan="8"> 
                <hr class="dashed">
            </td>
        </tr>
    </table>
</form>

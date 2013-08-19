<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/auto-numeric.js" ></script>
<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".ssn").mask("999-99-9999");
        $(".currency").autoNumeric();    
    });
</script>
<form class="step2-form" method="POST" id="applicant<?php echo isset($cnt) ? "-".$cnt:"" ?>">
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td valign="top" colspan="8">
                    <div style="color:red" id="msgboxai1">    
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" colspan="8">
                    <div><b>Application Information #<?php echo isset($cnt) ? $cnt: "1" ?></b></div>  
                </td>
            </tr>
            <tr width="50%">
                <td><label>First Name</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[firstname$cnt]", Yii::app()->session['step2']["firstname$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_firstname$cnt", 'required'=>'required')); 
                    ?>
                    
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>

                <td><label>Middle Initial</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[middlename$cnt]", Yii::app()->session['step2']["middlename$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_middlename$cnt")); 
                    ?> 
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>Last Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[lastname$cnt]", Yii::app()->session['step2']["lastname$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_lastname$cnt")); 
                    ?> 
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>Date of Birth</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => "ApplicantInfo[birthday$cnt]",
                            'value' => Yii::app()->session['step2']["birthday$cnt"],
                            'options'=>array(
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                'dateFormat'=>'yy/mm/dd',
                                'timeFormat' => 'hh:mm:ss',
                                'yearRange' => "-50:-18",
                                'mode'=>'date',
                            ), // jquery plugin options
                            'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                                'style'=>'width:75%'
                            ),
                        ));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><label>SSN</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[ssn$cnt]", Yii::app()->session['step2']["ssn$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_ssn$cnt", 'class'=>'ssn'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("ApplicantInfo[listname$cnt]", Yii::app()->session['step2']["listname$cnt"], 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[idnum$cnt]", Yii::app()->session['step2']["idnum$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_idnum$cnt"));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>Email Address</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[email$cnt]", Yii::app()->session['step2']["email$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_email$cnt"));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>Verify Email</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[verifyemail$cnt]", "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_verifyemail$cnt"));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><label>Cell Phone</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[cellphone$cnt]", Yii::app()->session['step2']["cellphone$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_cellphone$cnt", 'class'=>'phone'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>How long will you live? (year/years)</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[years_live_planned$cnt]", Yii::app()->session['step2']["years_live_planned$cnt"], array('style'=>'width:75%', 'id'=>"ApplicantInfo_years_live_planned$cnt"));
                    ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                            echo CHtml::checkbox("ApplicantInfo[has_pet$cnt]", Yii::app()->session['step2']["has_pet$cnt"], array('id'=>"ApplicantInfo_has_pet$cnt"))."Pets; List of All Pets";
                        ?><!-- 
                        <input type="checkbox" value="on" name="cekpet1" id="cekpet1"> ets; List of All Pets-->
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::dropDownList("ApplicantInfo[pet_num$cnt]", Yii::app()->session['step2']["pet_num$cnt"], 
                            array(
                                '1 - $600' => '1 - $600', 
                                '2 - $800' => '2 - $800', 
                                '3 - $1000' => '3 - $1000'
                            ),
                            array(
                                'empty' => 'Choose one',
                                'style' => 'width:75%',
                                'disabled' => "disabled"
                            )
                        ); 
                    ?>
                </td>
                <td>&nbsp;</td>

                <td><!--<label>Pet Deposit</label>--></td>
                <td><!--:--></td>
                <td><!--<input type="text" id="depositpet1" name="depositpet1" size="27" style="width:75%"  disabled="disabled" onblur="this.value=formatCurrency(this.value)"> -->
                <!--<select  id="depositpet1" name="depositpet1" disabled="disabled" >
                <option >1 - $600</option>
                <option>2 - $800</option>
                <option>3 - $1000</option>
                </select>-->
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center" colspan="8">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td colspan="5">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>List of Depandants:</b> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <table width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe">
                                        <tbody>
                                            <tr>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Name</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Relationship</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Age</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Stay in</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Stay duration</th>
                                            </tr>
                                            <tr>
                                                <td align="center" height="36" style="width:20%">
                                                    <?php 
                                                        echo CHtml::textField("ApplicantInfo[name$cnt]", Yii::app()->session['step2']["name$cnt"], array("style"=>"width:70%", 'id' => "DependantInfo_name$cnt"));
                                                    ?>
                                                </td>
                                                <td align="center" style="width:20%">
                                                    <?php 
                                                        echo CHtml::textField("ApplicantInfo[relation$cnt]", Yii::app()->session['step2']["relation$cnt"], array("style"=>"width:70%", 'id' => "DependantInfo_relation$cnt"));
                                                    ?>
                                                </td>
                                                <td align="center" style="border-right-color:#dddddd">
                                                    <?php 
                                                        echo CHtml::textField("ApplicantInfo[age$cnt]", Yii::app()->session['step2']["age$cnt"], array("style"=>"width:70%", 'id' => "DependantInfo_age$cnt"));
                                                    ?>
                                                </td>
                                                <td align="center" style="width:20%">
                                                    <?php 
                                                        echo CHtml::dropdownList("ApplicantInfo[stay_in$cnt]", Yii::app()->session['step2']["stay_in$cnt"], array('1' => 'Yes', '0' => 'No'), array("style"=>"width:50%"));
                                                    ?>
                                                </td>
                                                <td align="center" style="border-right-color:#dddddd">
                                                    <?php 
                                                        echo CHtml::textField("ApplicantInfo[age$cnt]", Yii::app()->session['step2']["age$cnt"], array("style"=>"width:70%", 'id' => "DependantInfo_age$cnt"));
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="8"> 
                    <hr class="dashed">
                </td>
            </tr>
        </tbody>
    </table>
</form>
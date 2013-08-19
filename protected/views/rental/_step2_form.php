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
                        echo CHtml::textField("firstname$cnt", "", array('style'=>'width:75%', 'id'=>"firstname$cnt", 'required'=>'required')); 
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>

                <td><label>Middle Initial</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("middlename$cnt", "", array('style'=>'width:75%', 'id'=>"middlename$cnt")); 
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
                        echo CHtml::textField("lastname$cnt", "", array('style'=>'width:75%', 'id'=>"lastname$cnt")); 
                    ?> 
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>Date of Birth</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => "birthday$cnt",
                            'value' => Yii::app()->session["birthday$cnt"],
                            'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                            ),
                        ));
                        //echo CHtml::textField("birthday$cnt", "", array('style'=>'width:75%', 'id'=>"birthday$cnt", 'class'=>'hasDatepicker'));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><label>SSN</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ssn$cnt", "", array('style'=>'width:75%', 'id'=>"ssn$cnt", 'class'=>'ssn'));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("listname$cnt", Yii::app()->session["idtype$cnt"], 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("idnum$cnt", "", array('style'=>'width:75%', 'id'=>"idnum$cnt"));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
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
                        echo CHtml::textField("email$cnt", "", array('style'=>'width:75%', 'id'=>"email$cnt"));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>Verify Email</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("verifyemail$cnt", "", array('style'=>'width:75%', 'id'=>"verifyemail$cnt"));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><label>Cell Phone</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("cellphone$cnt", "", array('style'=>'width:75%', 'id'=>"cellphone$cnt", 'class'=>'phone'));
                    ?>
                    <?php echo CHtml::image('images'.DIRECTORY_SEPARATOR.'star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                            echo CHtml::checkbox("has_pet$cnt", Yii::app()->session["has_pet$cnt"], array('id'=>"has_pet$cnt"))."Pets; List of All Pets";
                        ?><!-- 
                        <input type="checkbox" value="on" name="cekpet1" id="cekpet1"> ets; List of All Pets-->
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::dropDownList("pet_num$cnt", Yii::app()->session["pet_num$cnt"], 
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
                    <hr class="dashed">
                </td>
            </tr>
        </tbody>
    </table>
</form>
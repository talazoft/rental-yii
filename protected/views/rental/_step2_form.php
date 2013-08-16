<?php 
$form=$this->beginWidget('UActiveForm', array(
    'id'=>"step2-form-1",
    'enableAjaxValidation'=>true,
    'stateful'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); 
?>		 
        <table border="0" width="100%">
            <tbody>
                <tr>
                    <td valign="top" colspan="8">
                        <div style="color:red" id="msgboxai1">
                            <?php 
                                echo $form->error($applicantModel1,'firstname');
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" colspan="8">
                        <div><b>Application Information #<?php echo $count ?></b></div>  
                    </td>
                </tr>
                <tr width="50%">
                    <td><label>First Name</label></td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo $form->textField($applicantModel1, 'firstname', array('style'=>'width:75%', 'size'=>27))
                        ?>
                        <img src="images/star.png">
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <label>Middle Initial</label>
                    </td>
                    <td>:</td>
                    <td>
                        <?php 
                            echo $form->textField($applicantModel1, 'middle', array('style'=>'width:75%', 'size'=>27))
                        ?>
                    </td>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td><label>Last Name</label></td>
                    <td>:</td>
                    <td>
						<?php 
							echo $form->textField($applicantModel1, 'lastname', array('style'=>'width:75%', 'size'=>27))
						?>
                        <img src="images/star.png">
                    </td>
                    <td>&nbsp;</td>
                    <td><label>Date of Birth</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" size="27" name="birth1" id="birth1" class="hasDatepicker"> 
                        <img src="images/star.png">
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>SSN</label></td>
                    <td>:</td>
                    <td><input type="text" style="width:25%" size="5" maxlength="3" id="ssn11" name="ssn11"> - <input type="text" style="width:22%" size="5" maxlength="2" id="ssn21" name="ssn21"> - <input type="text" style="width:20%" size="4" maxlength="4" id="ssn31" name="ss31"> <img src="images/star.png"></td>
                    <td>&nbsp;</td>
                    <td>
                        <label>
                            <select name="driverlicense1" style="width:75%" id="driverlicense1">
                                <option value="Driverlicense">Driver License</option>
                                <option value="Passport">Passport</option>
                                <option value="Personal ID">Personal ID</option>
                            </select>
                        </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" size="27" name="vallicense1" id="vallicense1"> 
                        <img src="images/star.png">
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>Email Address</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" size="27" name="email1" id="email1"> 
                    </td>
                    <td>&nbsp;</td>
                    <td><label>Verify Email</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" size="27" name="vemail1" id="vemail1">
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><label>Cell Phone</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" onkeyup="javascript:backspacerUP(this,event);" onkeydown="javascript:backspacerDOWN(this,event);" onkeypress="return isNumberKey(event)" size="27" maxlength="13" id="cellphone11" name="cellphone11">  
                        <input type="hidden" size="5" maxlength="3" id="cellphone21" name="cellphone21"> 
                        <input type="hidden" size="4" maxlength="4" id="cellphone31" name="cellphone313"> 
                        <img src="images/star.png">
                    </td>
                    <td>&nbsp;</td>
                    <td><label>Home Phone</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" style="width:75%" onkeyup="javascript:backspacerUP(this,event);" onkeydown="javascript:backspacerDOWN(this,event);" onkeypress="return isNumberKey(event)" size="27" maxlength="13" id="homephone11" name="homephone11">  
                        <input type="hidden" size="5" maxlength="3" id="homephone21" name="homephone21">  
                        <input type="hidden" size="4" maxlength="4" id="homephone31" name="homephone31"> 
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" name="cekpet1" id="cekpet1">
                            Pets; List of All Pets
                        </label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="hidden" style="width:75%" size="27" disabled="disabled" name="pet1" id="pet1">
                        <select disabled="disabled" name="depositpet1" id="depositpet1">
                            <option>1 - $600</option>
                            <option>2 - $800</option>
                            <option>3 - $1000</option>
                        </select>
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
                <td align="center" colspan="8"> <hr class="dashed"></td>
                </tr>
            </tbody>
        </table> 
<?php $this->endWidget(); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/auto-numeric.js" ></script>
<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".ssn").mask("999-99-9999");
        $(".currency").autoNumeric();   
        
        $("#<?php echo "ApplicantInfo_has_pet$cnt"; ?>").change(function(){
            var isChecked = this.checked;

            if(isChecked){
                $("#<?php echo "ApplicantInfo_pet_num$cnt"; ?>").removeAttr("disabled");
            } else {
                $("#<?php echo "ApplicantInfo_pet_num$cnt"; ?>").attr("disabled", true);
            }
        });
        
        var depcnt = <?php echo isset(Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"]) ? Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"]+1 : 2 ?>;
        $("#plusrhdep<?php echo $cnt ?>").click(function(){           
            var depnewrowurl = "<?php echo Yii::app()->createUrl('/rental/depnewrow') ?>";
            $.post(depnewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:depcnt}, function(response){
                $("#deptbl<?php echo $cnt ?> tbody:last").append(response);
            });
            
            $("#DependantInfo_depcnt2<?php echo $cnt; ?>").val(depcnt);
            
            depcnt++;
            
            if(depcnt > 2){
                $("#minusrhdep<?php echo $cnt; ?>").show();
            }
        });
        
        $("#minusrhdep<?php echo $cnt; ?>").click(function(){
            $("#deptbl<?php echo $cnt ?> tr:last").remove();

            depcnt--;
            
            $("#DependantInfo_depcnt2<?php echo $cnt; ?>").val(depcnt);
            
            if(depcnt == 2){
                $(this).hide();
            }
            return false;
        });
        
        if(depcnt == 2){
            $("#minusrhdep<?php echo $cnt; ?>").hide();
        }
        
        
        var vehcnt = <?php echo isset(Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"]) ? Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"]+1 : 2 ?>;
        $("#plusrhveh<?php echo $cnt; ?>").click(function(){
            var vehnewrow = "<?php echo Yii::app()->createUrl('/rental/vehnewrow') ?>";
            
            $.post(vehnewrow, {cnt: <?php echo $cnt; ?>, cnt2:vehcnt}, function(response){
                $("#vehtbl<?php echo $cnt ?> tbody:last").append(response);
            });
            
            $("#VehicleInfo_vehcnt2<?php echo $cnt ?>").val(vehcnt);
            vehcnt++;
            
            if(vehcnt > 2){
                $("#minusrhveh<?php echo $cnt; ?>").show();
            }
        });
        
        $("#minusrhveh<?php echo $cnt; ?>").click(function(){
            $("#vehtbl<?php echo $cnt; ?> tr:last").remove();

            vehcnt--;
            
            $("#VehicleInfo_vehcnt2<?php echo $cnt ?>").val(vehcnt);
            
            if(vehcnt == 2){
                $(this).hide();
            }
            return false;
        });
        
        if(vehcnt == 2){
            $("#minusrhveh<?php echo $cnt; ?>").hide();
        }
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
                        echo CHtml::textField("ApplicantInfo[firstname$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["firstname$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["firstname$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_firstname$cnt", 'required'=>'required')); 
                    ?>
                    
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>

                <td><label>Middle Initial</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[middlename$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["middlename$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["middlename$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_middlename$cnt")); 
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
                        echo CHtml::textField("ApplicantInfo[lastname$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["lastname$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["lastname$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_lastname$cnt")); 
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
                            'value' => isset(Yii::app()->session['step2']['ApplicantInfo']["birthday$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["birthday$cnt"] : "",
                            'options'=>array(
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                'dateFormat'=>'yy/mm/dd',
                                'timeFormat' => 'hh:mm:ss',
                                'yearRange' => "-100:-18",
                                'mode'=>'date',
                                'defaultDate' => '-18Y',
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
                        echo CHtml::textField("ApplicantInfo[ssn$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["ssn$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["ssn$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_ssn$cnt", 'class'=>'ssn'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("ApplicantInfo[listname$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["listname$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["listname$cnt"] : "", 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[idnum$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["idnum$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["idnum$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_idnum$cnt"));
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
                        echo CHtml::textField("ApplicantInfo[email$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["email$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["email$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_email$cnt"));
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
                        echo CHtml::textField("ApplicantInfo[cellphone$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["cellphone$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["cellphone$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_cellphone$cnt", 'class'=>'phone'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>How long will you live? (year/years)</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[years_live_planned$cnt]", isset(Yii::app()->session['step2']['ApplicantInfo']["years_live_planned$cnt"]) ? Yii::app()->session['step2']['ApplicantInfo']["years_live_planned$cnt"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_years_live_planned$cnt"));
                    ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                            if(isset(Yii::app()->session['step2']['ApplicantInfo']["has_pet$cnt"]) && Yii::app()->session['step2']['ApplicantInfo']["has_pet$cnt"] > 0){
                                $checked = true;
                            } else {
                                $checked = false;
                            }
                            echo CHtml::checkbox("ApplicantInfo[has_pet$cnt]", $checked , array('id'=>"ApplicantInfo_has_pet$cnt"))."Pets; List of All Pets";
                        ?>
                        
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                    
                        if(isset(Yii::app()->session['step2']['ApplicantInfo']["has_pet$cnt"]) && Yii::app()->session['step2']['ApplicantInfo']["has_pet$cnt"] > 0){
                            $htmlOptions = array(
                                'empty' => 'Choose one',
                                'style' => 'width:75%',
                                'id' => "ApplicantInfo_pet_num$cnt"
                            );
                        } else {
                            $htmlOptions = array(
                                'empty' => 'Choose one',
                                'style' => 'width:75%',
                                'id' => "ApplicantInfo_pet_num$cnt",
                                'disabled' => "disabled"
                            );
                        }
                        
                        if(isset(Yii::app()->session['step2']['ApplicantInfo']["pet_num$cnt"])){
                            $selected_pet = Yii::app()->session['step2']['ApplicantInfo']["pet_num$cnt"];
                        } else {
                            $selected_pet = "";
                        }
                    
                        echo CHtml::dropDownList("ApplicantInfo[pet_num$cnt]", $selected_pet, 
                            array(
                                '1 - $600' => '1 - $600', 
                                '2 - $800' => '2 - $800', 
                                '3 - $1000' => '3 - $1000'
                            ),
                            $htmlOptions
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
                                                    <b>List of Dependants #<?php echo $cnt; ?>: </b> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <table id="deptbl<?php echo $cnt; ?>" width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe">
                                        <tbody>
                                            <tr>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Name</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Relationship</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Age</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Stay in</th>
                                                <!-- <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Stay duration</th> -->
                                            </tr>
                                            <?php 
                                            if(!isset(Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"])) { 
                                                echo $this->renderPartial("_dependant_row", array('cnt'=>$cnt, 'cnt2' => 1), true);
                                            } else {
                                                if(Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"] > 1){
                                                    $t = Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"];
                                                    for($i = 1; $i<=$t; $i++){
                                                        echo $this->renderPartial("_dependant_row", array('cnt'=>$cnt, 'cnt2' => $i), true);
                                                    }
                                                } else {
                                                    echo $this->renderPartial("_dependant_row", array('cnt'=>$cnt, 'cnt2' => 1), true);
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="8"> 
                                    <a name="plusrhdep<?php echo $cnt; ?>" id="plusrhdep<?php echo $cnt; ?>">
                                        <img border="0" src="images/plus.png"> 
                                    </a> 
                                    
                                    <a name="minusrhdep<?php echo $cnt; ?>" id="minusrhdep<?php echo $cnt; ?>">
                                        <img src="images/minus.png">
                                    </a>
                                    <?php 
                                        $depcnt2 = "1";
                                        if(isset(Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"])){
                                            $depcnt2 = Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"];
                                        }
                                        echo CHtml::hiddenField("DependantInfo[depcnt2$cnt]", $depcnt2, array('id'=>"DependantInfo_depcnt2$cnt"));
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
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
                                                    <b>Vehicle Information #<?php echo $cnt; ?>:</b> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <table id="vehtbl<?php echo $cnt ?>" width="100%" border="1" style="border-collapse:collapse; border-color:#bebebe">
                                        <tbody>
                                            <tr>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">License Plate</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Make/Model</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Year</th>
                                                <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Color</th>
                                            </tr>
                                            <?php 
                                            if(!isset(Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"])){
                                                echo $this->renderPartial("_vehicle_row", array('cnt'=>$cnt, 'cnt2'=>1));
                                            } else {
                                                if(Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"] > 1){
                                                    $t = Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"];
                                                    for($i=1;$i<=$t;$i++){
                                                        echo $this->renderPartial("_vehicle_row", array('cnt'=>$cnt, 'cnt2' => $i), true);
                                                    }
                                                } else {
                                                    echo $this->renderPartial("_vehicle_row", array('cnt'=>$cnt, 'cnt2'=>1));
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="8"> 
                                    <a name="plusrhveh<?php echo $cnt ?>" id="plusrhveh<?php echo $cnt ?>">
                                        <img border="0" src="images/plus.png"> 
                                    </a> 
                                    <a name="minusrhveh<?php echo $cnt ?>" id="minusrhveh<?php echo $cnt ?>">
                                        <img src="images/minus.png">
                                    </a>
                                    <?php 
                                        $vehcnt2 = "1";
                                        if(isset(Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"])){
                                            $vehcnt2 = Yii::app()->session['step2']['VehicleInfo']["vehcnt2$cnt"];
                                        }
                                        echo CHtml::hiddenField("VehicleInfo[vehcnt2$cnt]", $vehcnt2, array('id'=>"VehicleInfo_vehcnt2$cnt"));
                                    ?>
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
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
        
        var depcnt = <?php echo isset(Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"]) ? Yii::app()->session['step2']['DependantInfo']["depcnt2$cnt"] : 2 ?>;
        $("#plusrhdep<?php echo $cnt ?>").unbind("click").click(function(){           
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
        
        $("#minusrhdep<?php echo $cnt; ?>").unbind("click").click(function(){
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
        $("#plusrhveh<?php echo $cnt; ?>").unbind("click").click(function(event){
            var vehnewrow = "<?php echo Yii::app()->createUrl('/rental/vehnewrow') ?>";
            
            $.post(vehnewrow, {cnt: <?php echo $cnt; ?>, cnt2:vehcnt}, function(response){
                $("#vehtbl<?php echo $cnt ?> tbody:last").append(response);
            });
            
            $("#VehicleInfo_vehcnt2<?php echo $cnt ?>").val(vehcnt);
            vehcnt++;
            
            if(vehcnt > 2){
                $("#minusrhveh<?php echo $cnt; ?>").show();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        $("#minusrhveh<?php echo $cnt; ?>").unbind("click").click(function(event){
            $("#vehtbl<?php echo $cnt; ?> tr:last").remove();

            vehcnt--;
            
            $("#VehicleInfo_vehcnt2<?php echo $cnt ?>").val(vehcnt);
            
            if(vehcnt == 2){
                $(this).hide();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        if(vehcnt == 2){
            $("#minusrhveh<?php echo $cnt; ?>").hide();
        }
        
        $("#chk-applicant").change(function(){
            skipstatusaction();     
        });
        
        skipstatusaction();     
        
        function skipstatusaction(){
            for(var i=2;i<=<?php echo $cnt ?>;i++){
                var form = $("#applicant-"+i);
                if($("#chk-applicant").is(":checked")){
                    form.find("input[required='required']").each(function(){
                         var elem = $(this);
                         if(elem.hasAttr('required')){
                             elem.removeAttr("required");
                             elem.attr("notrequired","notrequired");
                         }
                    });
                } else {
                    form.find("input[notrequired='notrequired']").each(function(){
                        var elem = $(this);
                        if(elem.hasAttr('notrequired')){
                            elem.removeAttr("notrequired");
                            elem.attr('required', 'required');
                        }
                    });
                }
            }
        }
    });
</script>
<form class="step2-form" method="POST" id="applicant<?php echo isset($cnt) ? "-".$cnt:"" ?>" postable>
    <table width="100%" border="0">
        <tbody>
            <!-- <tr>
                <td valign="top" colspan="8">
                    <div style="color:red" id="msgboxai1">   
                    </div>
                </td>
            </tr> --> 
            <tr>
                <td valign="top" colspan="8">
                    <?php
                        if($cnt == 2){
                            echo CHtml::checkbox("chk-applicant", isset(Yii::app()->session['step2']['chk-applicant']) ? true : false, array('class'=>'skipstep2'))." skip to continue";
                        }
                    ?>  
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
                        echo CHtml::textField("ApplicantInfo[$cnt][firstname]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["firstname"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["firstname"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_firstname$cnt", 'required'=>'required')); 
                    ?>
                    
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>

                <td><label>Middle Initial</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[$cnt][middlename]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["middlename"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["middlename"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_middlename$cnt")); 
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
                        echo CHtml::textField("ApplicantInfo[$cnt][lastname]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["lastname"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["lastname"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_lastname$cnt", 'required'=>'required')); 
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
                            'name' => "ApplicantInfo[$cnt][birthday]",
                            'value' => isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["birthday"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["birthday"] : "",
                            'options'=>array(
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                'dateFormat'=>'yy-mm-dd',
                                'timeFormat' => 'hh:mm:ss',
                                'yearRange' => "-100:-18",
                                'mode'=>'date',
                                'defaultDate' => '-18Y',
                            ), // jquery plugin options
                            'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                                'style'=>'width:75%', 
                                'required'=>'required'
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
                        echo CHtml::textField("ApplicantInfo[$cnt][ssn]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["ssn"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["ssn"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_ssn$cnt", 'class'=>'ssn', 'required'=>'required'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("ApplicantInfo[$cnt][idtype]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["idtype"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["idtype"] : "", 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[$cnt][idnum]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["idnum"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["idnum"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_idnum$cnt", 'required'=>'required'));
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
                        echo CHtml::textField("ApplicantInfo[$cnt][email]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["email"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["email"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_email$cnt", 'required'=>'required'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>Verify Email</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[$cnt][verifyemail]", "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_verifyemail$cnt", 'required'=>'required'));
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
                        echo CHtml::textField("ApplicantInfo[$cnt][cellphone]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["cellphone"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["cellphone"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_cellphone$cnt", 'class'=>'phone', 'required'=>'required'));
                    ?>
                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                </td>
                <td>&nbsp;</td>
                <td><label>How long will you live? (year/years)</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[$cnt][years_live_planned]", isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["years_live_planned"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["years_live_planned"] : "", array('style'=>'width:75%', 'id'=>"ApplicantInfo_years_live_planned$cnt"));
                    ?>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>

                <td><label>Home Phone</label></td>
                <td>:</td>
                <td>
                    <?php 
                    echo CHtml::textField("ApplicantInfo[$cnt][homephone]", 
                            isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["homephone"]) ? Yii::app()->session['step2']['ApplicantInfo'][$cnt]["homephone"] : "", 
                            array('style'=>'width:75%', 'id'=>"ApplicantInfo_homephone$cnt", 'class'=>'phone'));
                    ?>
                </td>
                <td>&nbsp;</td>
                <td>
                    <label>
                        <?php 
                            if(isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["has_pet"]) && Yii::app()->session['step2']['ApplicantInfo'][$cnt]["has_pet"] > 0){
                                $checked = true;
                            } else {
                                $checked = false;
                            }
                            echo CHtml::checkbox("ApplicantInfo[$cnt][has_pet]", $checked , array('id'=>"ApplicantInfo_has_pet$cnt"))."Pets; List of All Pets";
                        ?>
                        
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                    
                        if(isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["has_pet"]) && Yii::app()->session['step2']['ApplicantInfo'][$cnt]["has_pet"] > 0){
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
                        
                        if(isset(Yii::app()->session['step2']['ApplicantInfo'][$cnt]["pet_num"])){
                            $selected_pet = Yii::app()->session['step2']['ApplicantInfo'][$cnt]["pet_num"];
                        } else {
                            $selected_pet = "";
                        }
                    
                        echo CHtml::dropDownList("ApplicantInfo[$cnt][pet_num]", $selected_pet, 
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
                                            
                                            if(!isset(Yii::app()->session['step2']['DependantInfo'][$cnt]["depcnt2"])) { 
                                                echo $this->renderPartial("_dependant_row", array('cnt'=>$cnt, 'cnt2' => 1), true);
                                            } else {
                                                if(Yii::app()->session['step2']['DependantInfo'][$cnt]["depcnt2"] > 1){
                                                    $t = Yii::app()->session['step2']['DependantInfo'][$cnt]["depcnt2"];
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
                                        if(isset(Yii::app()->session['step2']['DependantInfo'][$cnt]["depcnt2"])){
                                            $depcnt2 = Yii::app()->session['step2']['DependantInfo'][$cnt]["depcnt2"];
                                        }
                                        echo CHtml::hiddenField("DependantInfo[$cnt][depcnt2]", $depcnt2, array('id'=>"DependantInfo_depcnt2$cnt"));
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
                                            if(!isset(Yii::app()->session['step2']['VehicleInfo'][$cnt]["vehcnt2"])){
                                                echo $this->renderPartial("_vehicle_row", array('cnt'=>$cnt, 'cnt2'=>1));
                                            } else {
                                                if(Yii::app()->session['step2']['VehicleInfo'][$cnt]["vehcnt2"] > 1){
                                                    $t = Yii::app()->session['step2']['VehicleInfo'][$cnt]["vehcnt2"];
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
                                        if(isset(Yii::app()->session['step2']['VehicleInfo'][$cnt]["vehcnt2"])){
                                            $vehcnt2 = Yii::app()->session['step2']['VehicleInfo'][$cnt]["vehcnt2"];
                                        }
                                        echo CHtml::hiddenField("VehicleInfo[$cnt][vehcnt2]", $vehcnt2, array('id'=>"VehicleInfo_vehcnt2$cnt"));
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
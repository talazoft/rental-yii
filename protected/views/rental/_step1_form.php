<div id="test">
    <p align="justify" >Please take a few extra moments to review your application before submitting it for processing. Please check to make sure we have complete information and phone number so we may expedite you application quickly. Incomplete application will delay processing. Owner/Manager may require additional information. </p>
    <p align="justify" class="padding"> It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the acceptance of this Application and Offer. Time is of the essence. </p>
</div>
<hr class="dashed"/>
<form method="POST" id="step1-form" class="step1-form" postable>
    <div id="hrr">
        <table class="codetype"  width="100%" border=0 cellpadding="0" cellspacing="0" >
            <tr>
                <td width="50%" valign="top">  
                    <label class="required" for="MsRentalInformation_applicant">
                        How many <?php echo Yii::app()->session['selection'] == "Commercial" ? "companies" : "applicant(s)"; ?>
                    </label>
                    <?php 

                        for($i = 1; $i<=10; $i++){
                            $data[$i] = $i;
                        }

                        echo CHtml::dropdownList("ApplicationInformation[num_of_applicant]", 
                                Yii::app()->session['step1']['num_of_applicant'], $data,
                                array(
                                    'empty'=>'Choose one', 
                                    'style'=>'width:50%',
                                    'required'=>'required',
                                    'ajax'=>array(
                                        'type'=>"POST",
                                        'url'=>CController::createUrl('rental/applicantchanged'), //url to call.
                                        'data'=>array('num_of_applicant' => 'js:this.value'),
                                        'success'=>'js:function(data){
                                            var dt = jQuery.parseJSON(data);
                                            $("#ai").html(dt.step2);
                                            $("#rh").html(dt.step3);
                                            $("#eii").html(dt.step4);
                                            $("#pr").html(dt.step5);
                                            $("#cfi").html(dt.step6);
                                            $("#gi").html(dt.step7);
                                         }'
                                    ),
                                )
                            );
                    ?> 

                    <?php echo CHtml::image('images/star.png', 'required'); ?>

                </td>
                <td width="50%" valign="top">
                    <ul type="disc">
                        <li>
                            <label>Applicant #1 will be considered as the primary applicant.</label>
                        </li>
                        <li>
                            <label style="padding-right:10px">All adult applicants( 18 years or older) must complete applicant for  rental.</label>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
    <hr class="dashed"/>
    <div id="msgbox" style="color:red">
    </div>
    <table width="100%" border="0" >
        <tr>
            <td  valign="top" width="50%">
                <table width="100%">
                    <tr>
                        <td><label>Located at (address)</label></td>
                        <td>:</td>
                        <td>
                            <?php               
                                echo CHtml::textField("ApplicationInformation[address]", Yii::app()->session['step1']['address'], array('size'=>10, 'style'=>'width:75%', 'required'=>'required'));
                            ?>
                            <?php echo CHtml::image('images/star.png', 'required'); ?>            
                        </td>
                    </tr>
                    <tr>
                        <td><label>City</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ApplicationInformation[city]", Yii::app()->session['step1']['city'], array('size'=>12, 'style'=>'width:75%', 'required'=>'required'));
                            ?>
                            <?php echo CHtml::image('images/star.png', 'required'); ?>              
                        </td>
                    </tr>
                    <tr>
                        <td><label>Anticipated Move in date of</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                    'name' => "ApplicationInformation[anticipated_date]",
                                    'value' => Yii::app()->session['step1']['anticipated_date'],
                                    'options'=>array(
                                        'changeMonth' => 'true',
                                        'changeYear' => 'true',
                                        'dateFormat'=>'yy/mm/dd',
                                        'timeFormat' => 'hh:mm:ss',
                                        'mode'=>'date',
                                    ), // jquery plugin options
                                    'language' => '',
                                    'htmlOptions' => array(
                                        'style'=>'width:75%',
                                        'value'=>'',
                                        'required'=>'required'
                                    ),
                                ));

                            ?>
                            <?php echo CHtml::image('images/star.png', 'required'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Deposit of $</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ApplicationInformation[save_deposit]", Yii::app()->session['step1']['save_deposit'], array('style'=>'width:75%', 'class'=>'currency'));
                            ?>                 
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td width="50%">
                <table width="100%">
                    <tr>
                        <td valign="top" colspan="3">
                            <table border="0" width="100%">
                                <tr>
                                    <td valign="bottom" colspan="2">
                                        Selection
                                    </td>
                                    <td>
                                        <?php 
                                            echo CHtml::textField("ApplicationInformation[selection]", Yii::app()->session['step1']['selection'], array('style'=>'width:133px', 'required'=>'required'));
                                            echo CHtml::textField("ApplicationInformation[sub_selection]", Yii::app()->session['step1']['sub_selection'], array('style'=>'width:127px; margin-left:9px', 'required'=>'required'));
                                        ?>
                                        <?php echo CHtml::image('images/star.png', 'required'); ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Unit</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ApplicationInformation[unit]", Yii::app()->session['step1']['unit'], array('style'=>'width:221px', 'width'=>'80%'));
                            ?>             
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>State</label>
                        </td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ApplicationInformation[state]", Yii::app()->session['step1']['state'], array('width'=>'31%', 'size'=>7, 'style'=>'width:33%', 'required'=>'required'));
                            ?>
                            <label>Zip Code</label>
                            :
                            <?php 
                                echo CHtml::textField("ApplicationInformation[zipcode]", Yii::app()->session['step1']['zipcode'], array('width'=>'25%', 'size'=>5, 'maxlength'=>5, 'style'=>'width:69px', 'class'=>'zip', 'required'=>'required'));
                            ?>
                            <?php echo CHtml::image('images/star.png', 'required'); ?>              
                        </td>
                    </tr>
                    <tr>
                        <td style="width:96px"><label>Monthly Rent of $</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ApplicationInformation[monthly_rent]", Yii::app()->session['step1']['monthly_rent'], array('style'=>'width:221px', 'class'=>'currency'));
                            ?>               
                        </td>
                    </tr>
                    <tr>
                        <td><label>Refered Lead</label></td>
                        <td>:</td>
                        <td>
                            <?php 
                                $ref_data = array("Sign On Property" => "Sign On Property",
                                                "Advertisement"=>"Advertisement",
                                                "Agents"=>"Agents",
                                                "Tenant"=>"Tenant",
                                                "Other"=>"Other");

                                echo CHtml::dropdownList("ApplicationInformation[refered_lead]", Yii::app()->session['step1']['refered_lead'], $ref_data, array('empty'=>'Choose One', 'style'=>'width:80%', 'id' => 'ApplicationInformation_refered_lead','required'=>'required'));
                            ?>
                            <?php echo CHtml::image('images/star.png', 'required'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=3>
                            <div id="vreference1">
                            </div>
                            <div id="vreference2" style="display: none">
                                <table width="100%">
                                    <tr>
                                    <td width="35%">Venue</td>
                                    <td width="2%">:</td>
                                    <td width="63%">
                                        <?php 
                                            echo CHtml::textField("ApplicationInformation[venue]", isset(Yii::app()->session['step1']['venue']) ? Yii::app()->session['step1']['venue'] : "", array('style'=>'width:75%px'));
                                        ?>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="vreference3" style="display: none">
                                <table width="100%">
                                    <tr>
                                        <td width="35%">Name</td>
                                        <td width="2%">:</td>
                                        <td width="63%">
                                            <?php
                                                echo CHtml::textField("ApplicationInformation[agent_name]", isset(Yii::app()->session['step1']['agent_name']) ? Yii::app()->session['step1']['agent_name'] : "", array('style'=>'width:75%px'));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td>
                                            <?php 
                                                echo CHtml::textField("ApplicationInformation[agent_phone]", isset(Yii::app()->session['step1']['agent_phone']) ? Yii::app()->session['step1']['agent_phone'] : "", array('maxlength'=>13, 'size'=>27, 'class'=>'phone'));
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="vreference4" style="display: none">
                                <table width="100%">
                                    <tr>
                                        <td width="35%">Name</td>
                                        <td width="2%">:</td>
                                        <td width="63%">
                                            <?php 
                                                echo CHtml::textField("ApplicationInformation[tenant_name]", isset(Yii::app()->session['step1']['tenant_name']) ? Yii::app()->session['step1']['tenant_name'] : "", array('style'=>'width:75%px'));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Existing Tenant</td>
                                        <td>:</td>
                                        <td>
                                            <?php 
                                                echo CHtml::dropdownList("ApplicationInformation[is_existing_tenant]", isset(Yii::app()->session['step1']['is_existing_tenant']) ? Yii::app()->session['step1']['is_existing_tenant'] : "", array('1'=>'Yes', '0'=>'No'));
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="vreference5" style="display: none">
                                <table width="100%">
                                    <tr>
                                        <td width="35%">Name</td>
                                        <td width="2%">:</td>
                                        <td width="63%">
                                            <?php 
                                                echo CHtml::textField("ApplicationInformation[other_val]", isset(Yii::app()->session['step1']['other_val']) ? Yii::app()->session['step1']['other_val'] : "", array('style'=>'width:75%px'));
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <br>
        </tr>
    </table>
</form>
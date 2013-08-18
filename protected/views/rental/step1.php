<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/auto-numeric.js" type="text/javascript"></script>
<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".ssn").mask("999-99-9999");
        $(".currency").autoNumeric();
    });
</script>
<div class="step_1 step">
    <div class="titlestep">Rental Information</div>
    <div class="show" id="1"></div>
</div>
<div class="step_content_1 step_content">
    <!--<img style="border:none;" src="img/sample-form-1.jpg">-->
    <div id='ri'>
        <div id="test">
            <p align="justify" >Please take a few extra moments to review your application before submitting it for processing. Please check to make sure we have complete information and phone number so we may expedite you application quickly. Incomplete application will delay processing. Owner/Manager may require additional information. </p>
            <p align="justify" class="padding"> It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the acceptance of this Application and Offer. Time is of the essence. </p>
        </div>
        <hr class="dashed"/>
        <?php 
        $form=$this->beginWidget('UActiveForm', array(
            'id'=>'step1-form',
            'enableAjaxValidation'=>true,
            'stateful'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array('enctype' => 'multipart/form-data'),
        )); 
        ?>
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

                            echo $form->dropdownList($model, 'num_of_applicant', $data, 
                                    array(
                                        'empty'=>'Choose one', 
                                        'style'=>'width:50%',
                                        'ajax'=>array(
                                            'type'=>"POST",
                                            'update'=>"#ai",
                                            'url'=>CController::createUrl('rental/applicantchanged'), //url to call.
                                            'data'=>array('num_of_applicant' => 'js:this.value'),
                                        ),
                                    )
                                );
                        ?> 
                        <img src="<?php echo Yii::app()->baseurl; ?>/images/star.png"/>

                        <?php 
                            //echo $form->hiddenField($model, 'passwordri',array('id'=>'txtpassword', 'value'=>$random_pass));
                            //echo $form->hiddenField($model, 'usernameri',array('id'=>'txtuser2', 'value'=>$random_user));
                        ?>

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
            <?php 
                echo $form->error($model,'num_of_applicant');
                echo $form->error($model,'selection');
                echo $form->error($model,'sub_selection');
                echo $form->error($model,'address');
                echo $form->error($model,'city');
                echo $form->error($model,'anticipated_date');
                echo $form->error($model,'save_deposit');
                echo $form->error($model,'unit');
                echo $form->error($model,'state');
                echo $form->error($model,'zipcode');
                echo $form->error($model,'monthly_rent');
                echo $form->error($model,'refered_lead');
                echo $form->error($model,'venue');
                echo $form->error($model,'agent_name');
                echo $form->error($model,'agent_phone');
                echo $form->error($model,'tenant_name');
                echo $form->error($model,'is_existing_tenant');
                echo $form->error($model,'other_val');
//                echo $form->errorSummary($model);
            ?>
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
                                    echo $form->textField($model, 'address', array('size'=>10, 'style'=>'width:75%')); 
                                ?>
                                <img src="images/star.png" />                  
                            </td>
                        </tr>
                        <tr>
                            <td><label>City</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($model, 'city', array('size'=>12, 'style'=>'width:75%')); 
                                ?>
                                <img src="images/star.png" />                  
                            </td>
                        </tr>
                        <tr>
                            <td><label>Anticipated Move in date of</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                                        $this->widget('CJuiDateTimePicker',array(
                                            'model'=>$model, //Model object
                                            'attribute'=>'anticipated_date', //attribute name
                                            'mode'=>'date', //use "time","date" or "datetime" (default)
                                            'options'=>array(
                                                'changeMonth' => 'true',
                                                'changeYear' => 'true',
                                                'dateFormat'=>'yy/mm/dd',
                                                'timeFormat' => 'hh:mm:ss',
                                                'yearRange' => "-50:-18",
                                            ), // jquery plugin options
                                            'language' => '',
                                            'htmlOptions'=>array(
                                                'style'=>'width:75%',
                                                'value'=>''
                                            )
                                        )
                                    );
                                ?>
                                <img src="images/star.png" />
                            </td>
                        </tr>
                        <tr>
                            <td><label>Deposit of $</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($model, 'save_deposit', array('id'=>'deposit', 'style'=>'width:75%', 'class'=>'currency')); 
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
                                                echo $form->textField($model, 'selection', array('style'=> 'width:133px '));
                                                echo $form->textField($model, 'selection', array('style'=> 'width:127px; margin-left:9px'));
                                            ?>
                                            <img src="images/star.png" />
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
                                    echo $form->textField($model, 'unit', array('width'=>'80%', 'style'=>'width:221px'));
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
                                    echo $form->textField($model, 'state', array('width'=>'31%', 'size'=>7, 'style'=>'width:33%'));
                                ?>
                                <label>Zip Code</label>
                                :
                                <?php 
                                    echo $form->textField($model, 'zipcode', array('width'=>'25%', 'size'=>5, 'maxlength'=>5, 'style'=>'width:69px'));
                                ?>
                                <img src="images/star.png" />               
                            </td>
                        </tr>
                        <tr>
                            <td style="width:96px"><label>Monthly Rent of $</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($model, 'monthly_rent', array('style'=>'width:221px', 'class'=>'currency'));
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
                                    echo $form->dropdownList($model, 'refered_lead',
                                                $ref_data,
                                                array('empty'=>'Choose One', 'style'=>'width:80%')
                                            );
                                ?><img src="images/star.png" />                 
                            </td>
                        </tr>
                        <tr>
                            <td colspan=3>
                                <div id="vreference1">
                                </div>
                                <div id="vreference2">
                                    <table width="100%">
                                        <tr>
                                        <td width="35%">Venue</td>
                                        <td width="2%">:</td>
                                        <td width="63%">
                                            <?php 
                                                echo $form->textField($model, 'venue', array('style'=>'width:75%px'));
                                            ?>
                                        </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="vreference3">
                                    <table width="100%">
                                        <tr>
                                            <td width="35%">Name</td>
                                            <td width="2%">:</td>
                                            <td width="63%">
                                                <?php 
                                                    echo $form->textField($model, 'agent_name', array('style'=>'width:75%px'));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td>
                                                <?php 
                                                    echo $form->textField($model, 'agent_phone', array('maxlength'=>13, 'size'=>27, 'class'=>'phone'));
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="vreference4">
                                    <table width="100%">
                                        <tr>
                                            <td width="35%">Name</td>
                                            <td width="2%">:</td>
                                            <td width="63%">
                                                <?php 
                                                    echo $form->textField($model, 'tenant_name', array('style'=>'width:75%px'));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Existing Tenant</td>
                                            <td>:</td>
                                            <td>
                                                <?php 
                                                    echo $form->dropdownList($model, 'is_existing_tenant', array('1'=>'Yes', '0'=>'No'))
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="vreference5">
                                    <table width="100%">
                                        <tr>
                                            <td width="35%">Name</td>
                                            <td width="2%">:</td>
                                            <td width="63%">
                                                <?php 
                                                    echo $form->textField($model, 'other_val', array('style'=>'width:75%px'));
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
        <?php $this->endWidget(); ?>
    </div>
</div>
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
        <div id="hrr">
            <table class="codetype"  width="100%" border=0 cellpadding="0" cellspacing="0" >
                <tr>
                    <td width="50%" valign="top">  
                        <label class="required" for="MsRentalInformation_applicant">
                            How many applicant(s)
                        </label>
                        <?php 

                            for($i = 1; $i<=10; $i++){
                                $data[$i] = $i;
                            }

                            echo $form->dropdownList($rentalModel, 'applicant', $data, 
                                    array(
                                        'empty'=>'Choose one', 
                                        'style'=>'width:50%',
                                        'ajax'=>array(
                                            'type'=>"POST",
                                            'update'=>"#ai",
                                            'url'=>CController::createUrl('rental/applicantchanged'), //url to call.
                                            'data'=>array('selected_id' => 'js:this.value'),
                                        ),
                                    )
                                );
                        ?> 
                        <img src="<?php echo Yii::app()->baseurl; ?>/images/star.png"/>

                        <?php 
                            echo $form->hiddenField($rentalModel, 'passwordri',array('id'=>'txtpassword', 'value'=>$random_pass));
                            echo $form->hiddenField($rentalModel, 'usernameri',array('id'=>'txtuser2', 'value'=>$random_user));
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
                echo $form->error($rentalModel,'applicant');
                echo $form->error($rentalModel,'company');
                echo $form->error($rentalModel,'address');
                echo $form->error($rentalModel,'city');
                echo $form->error($rentalModel,'anticipated_date');
                echo $form->error($rentalModel,'deposit');
                echo $form->error($rentalModel,'selection1');
                echo $form->error($rentalModel,'selection2');
                echo $form->error($rentalModel,'unit');
                echo $form->error($rentalModel,'state');
                echo $form->error($rentalModel,'zipcode');
                echo $form->error($rentalModel,'monthlyrent');
                echo $form->error($rentalModel,'referedlead');
                echo $form->error($rentalModel,'advertisementvenue');
                echo $form->errorSummary($rentalModel); 
            ?>
        </div>

        <table width="100%" border="0" >
            <tr>
                <td  valign="top" width="50%">
                    <table width="100%">
                        <tr>
                            <td><label>Company</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->dropdownList($rentalModel, 'company', CHtml::listData(MsCompany::model()->findAll(), 'idcompany', 'namecompany'), array('empty'=>'Choose One'));
                                ?><img src="images/star.png" />                  
                            </td>
                        </tr>
                        <tr>
                            <td><label>Located at (address)</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($rentalModel, 'address', array('size'=>10, 'style'=>'width:75%')); 
                                ?>
                                <img src="images/star.png" />                  
                            </td>
                        </tr>
                        <tr>
                            <td><label>City</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($rentalModel, 'city', array('size'=>12, 'style'=>'width:75%')); 
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
                                            'model'=>$rentalModel, //Model object
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
                                    echo $form->textField($rentalModel, 'deposit', array('id'=>'deposit', 'style'=>'width:75%', 'onblur'=>'js:this.value=formatCurrency(this.value)')); 
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
                                        <td valign="bottom">Selection
                                            <?php 
                                                $buildingCriteria = new CDbCriteria;
                                                $buildingCriteria->select = 'distinct namebuilding as namebuilding';
                                                $buildingCriteria->order = 'namebuilding';
                                                $dataList = CHtml::listData(MsBuilding::model()->findAll($buildingCriteria), 'namebuilding', 'namebuilding');
                                                echo $form->dropdownList($rentalModel, 'selection1', $dataList, array('empty'=>'Choose One', 'style'=>'width:70%'));
                                            ?> 
                                        </td>
                                        <td valign="bottom">
                                            <div id="selection11">
                                                <?php 
                                                    $buildingCriteria2 = new CDbCriteria;
                                                    $buildingCriteria2->select = 'idbuilding, type';
                                                    $buildingCriteria2->condition = "namebuilding = 'Apartment'";
                                                    $dataList2 = CHtml::listData(MsBuilding::model()->findAll($buildingCriteria2), 'idbuilding', 'type');
                                                    echo $form->dropdownList($rentalModel, 'selection2', $dataList2, array('empty'=>'Choose One', 'style'=>'width:100%'));
                                                ?>
                                            </div> 
                                        </td>
                                        <td valign="bottom"><img src="images/star.png" /></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Unit</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($rentalModel, 'unit', array('width'=>'80%', 'style'=>'width:221px'));
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
                                    echo $form->textField($rentalModel, 'state', array('width'=>'31%', 'size'=>7, 'style'=>'width:33%'));
                                ?>
                                <label>Zip Code</label>
                                :
                                <?php 
                                    echo $form->textField($rentalModel, 'zipcode', array('width'=>'25%', 'size'=>5, 'maxlength'=>5, 'style'=>'width:69px'));
                                ?>
                                <img src="images/star.png" />               
                            </td>
                        </tr>
                        <tr>
                            <td style="width:96px"><label>Monthly Rent of $</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->textField($rentalModel, 'monthlyrent', array('id'=>'monthlyrent', 'onblur'=>'js:this.value=formatCurrency(this.value)', 'style'=>'width:221px'));
                                ?>               
                            </td>
                        </tr>
                        <tr>
                            <td><label>Refered Lead</label></td>
                            <td>:</td>
                            <td>
                                <?php 
                                    echo $form->dropdownList($rentalModel, 'referedlead',
                                                CHtml::listData(MsReference::model()->findAll(), 'idreference', 'reference'),
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
                                                echo $form->textField($rentalModel, 'advertisementvenue', array('style'=>'width:75%px'));
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
                                                    echo $form->textField($rentalModel, 'agentname', array('style'=>'width:75%px'));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td>
                                                <?php 
                                                    echo $form->textField($rentalModel, 'agentphone1', array('maxlength'=>13, 'size'=>27, 'onkeypress'=>'js:return isNumberKey(event)', 'onkeydown'=>'js:backspacerDOWN(this,event)', 'onkeyup'=>'js:backspacerUP(this,event)', 'style'=>'width:75%'));
                                                ?>
                                                &nbsp; <input type="hidden"  name="pref2" id="pref2" maxlength="3" size="3">	<input type="hidden"  name="pref3" id="pref3" maxlength="4" size="4">
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
                                                    echo $form->textField($rentalModel, 'agentname', array('style'=>'width:75%px'));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Existing Tenant</td>
                                            <td>:</td>
                                            <td>
                                                <?php 
                                                    echo $form->dropdownList($rentalModel, 'tenantexisting', array('Yes'=>'Yes', 'No'=>'No'))
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
                                                    echo $form->textField($rentalModel, 'other', array('style'=>'width:75%px'));
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
    </div>
</div>
<?php $this->endWidget(); ?>
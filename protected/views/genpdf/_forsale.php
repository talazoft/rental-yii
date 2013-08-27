<html>
    <head>
        <!--<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/pdfstyle.css" />-->
        <style>
            @charset "utf-8";
            /* CSS Document */
            .judul_luar
            {
                font:normal 30px Arial, Helvetica, sans-serif; 
                margin:10px 100px 10px 1px;
                font-style:italic;
            }
            table
            {
                padding:5px;
            }
            .judul_luar2
            {
                font:normal 20px Arial, Helvetica, sans-serif;

            }
            .judul_alamat
            {
                font:normal 12px Arial, Helvetica, sans-serif;		
                margin:10px 10px 10px 150px;
                font-style:italic;
            }
            .judul_dalam
            {
                font:normal 20px Arial, Helvetica, sans-serif; 
                text-align:center;
                padding:20px;

            }
            .judul_tabel
            {
                font:normal 17px Arial, Helvetica, sans-serif; 
                font-weight:bold;
                text-align:center;
            }
            body 
            {
                margin: 2px;
                width:100%;
            }
            .name
            {
                float:none;
                text-align:center;
            }
            input[type="text"]
            {
                width:45%;
                border:none;
                border-color: black;
                border-bottom:solid;
                border-bottom-width:2px;
                margin-left:5px;
                margin-right:15px;
                float:right;
            }
            .formulir2 input[type="text"]
            {
                width:55%;
                border:none;
                border-bottom:solid;
                border-bottom-width:2px;
                margin-left:5px;
                margin-right:15px;
                float:none;
            }
            .panjang input[type="text"]
            {
                width:75%;
                border:none;
                border-bottom:solid;
                border-bottom-width:2px;
                margin-left:5px;
                margin-right:15px;
                float:none;
            }
            .panjang2 input[type="text"]
            {
                width:85%;
                border:none;
                border-bottom:solid;
                border-bottom-width:2px;
                margin-left:5px;
                margin-right:15px;
                float:right;
            }
            .nofloat input[type="text"]
            {
                float:none;
            }
            select
            {
                width:200px;
            }
            .terms input[type="text"] 
            {
                float:right;
            }
            html {margin-left: 20px; margin-right: 0px; margin-top: 20px; margin-bottom: 20px}
        </style>
        <title></title>
    </head>
    <body>
        <div class="maincontent_info">

        <div class="head_content">
            <div class="logo-info">
                <img src="<?php echo Yii::app()->baseUrl; ?>/img/logo.png" />
            </div>
        </div><!---head_content end---->

        <div class="content">
            <div>
                <div class="judul">
                    <div class="judul_luar">VANTAGE  ASSET MANAGEMENT LTD.</div>
                </div>
                <div class="judul_alamat">
                    713 west duarte road suite #G-167, arcadia, ca 91007-7564 (626)5747900 fax 382-5572
                </div>
                <div class="judul_dalam">
                    APPLICATION TO RENT APARTMENT
                </div>
            </div><!---jjudul end---->

            <?php 
                $applicationModel = ApplicationInformation::model()->findByPk(Yii::app()->session['applicationID']);
            ?>
            <div class="formulir">
                <table width="100%">
                    <tr>
                        <td width="25%"> Today's Date :<?php /*<input type="text" name="todaydate" value="test" >*/ echo date("M d, Y"); ?> </td>
                        <td width="40%"> Property Name :<?php /*<input type="text" name="propertyname">*/  echo $applicationModel->city.", ".$applicationModel->address; ?></td>
                        <td width="35%"> Unit #   :<?php /*<input type="text" name="unit">*/ echo $applicationModel->unit; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"> Applicant's Work Number :<?php /*<input type="text" name="apwn">*/ ?></td>
                        <td width="35%"> Applicant's Home Number :<?php /*<input type="text" name="aphn">*/ echo $applicationModel->prime_applic_homephone; ?></td>            
                    </tr>
                    <tr>
                        <td colspan="2"> Applicant's Cellphone Number :<?php /*<input type="text" name="apcn">*/ echo $applicationModel->prime_applic_cellphone; ?></td>
                        <td width="35%"> Applicant's Email Address :<?php /*<input type="text" name="apea">*/ echo $applicationModel->prime_applic_email; ?></td>            
                    </tr>
                </table>
            </div>
            
            <?php 
            $applicantModel = ApplicantInfo::model()->findAll("rd_application_information_id = ".Yii::app()->session['applicationID']);
            
            $i=1;
            foreach($applicantModel as $applic){ ?>      
                <div class="judul_dalam">APPLICANT'S PERSONAL INFORMATION #<?php echo $i; ?></div>           	         
                <div class="formulir1">
                    <table width="100%" >
                        <tr>
                            <td width="33%"> First Name :<?php /*<input type="text" name="fname">*/ echo $applic->firstname; ?> </td>
                            <td width="33%"> Middle :<?php /*<input type="text" name="middle">*/ echo $applic->middlename; ?></td>     
                            <td width="34%"> Last :<?php /*<input type="text" name="last">*/ echo $applic->lastname; ?></td>        
                        </tr>
                        <tr>
                            <td> Date of Birth :<?php /*<input type="text" name="dob">*/ echo $applic->birthday; ?></td>
                            <td> <?php /*Driver Lisence No :<input type="text" name="lisence">*/ echo $applic->idtype." No : ".$applic->firstname; ?></td>     
                            <td> S.S.No :<?php /*<input type="text" name="ssno">*/ echo $applic->ssn; ?></td>        
                        </tr>
                    </table>
                </div>
            <?php 
            $i++;
            } ?>
                        
            <div class="formulir2">
                <table width="100%" >
                    <tr>
                        <td colspan="4"> <i>List of Dependants</i> </td> 
                    </tr>
                    <tr>
                        <th width="25%" align="center">Name</th>
                        <th width="25%" align="center">Relation</th>
                        <th width="25%"align="center">Age</th>
                        <th width="25%" align="center">Stay In Yes/No</th>        
                    </tr>
                    <?php 
                    $dependantModel = DependantInfo::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id);
                    foreach ($dependantModel as $dep){ ?>
                    
                    <tr>
                        <td width="25%" align="center"><?php echo isset($dep->name) ? $dep->name : ""; ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->relation) ? $dep->relation : ""; ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->age) ? $dep->age : ""; ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->stay_in) && $dep->stay_in == 1 ? "Yes" : "No"; ?></td>        
                    </tr>
                    
                    <?php 
                    }
                    /*
                    ?>
                    <tr>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>        
                    </tr>
                    <tr>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>        
                    </tr>
                    <tr>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>
                        <td width="25%" align="center"><input type="text" name="name[]"></td>        
                    </tr>
                    */ ?>
                    <tr>
                        <td width="25%">How long you will live here?</td>
                        <td width="25%">One years ? <input type="text" name="1"></td>   
                        <td width="25%">Two years ? <input type="text" name="2"> </td>
                        <td width="25%">Three years ?<input type="text" name="3"> </td> 
                    </tr>
                    <tr>
                        <td colspan="4"> <i>Vehicle information : </i> </td> 
                    </tr>
                    <tr>
                        <th> License Plate</th>
                        <th> Make/Model</th>
                        <th> Year</th>
                        <th>Color</th>        
                    </tr>
                    <?php 
                    $vehicleModel = VehicleInfo::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id);
                    foreach($vehicleModel as $veh){ ?>
                    <tr>
                        <td width="25%" align="center"><?php echo isset($dep->license_plate) ? $dep->license_plate : "" ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->make_model) ? $dep->make_model : ""; ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->year) ? $dep->year : ""; ?></td>
                        <td width="25%" align="center"><?php echo isset($dep->color) ? $dep->color : ""; ?></td>        
                    </tr>
                    <?php
                    }
                    /*
                    ?>
                    <tr>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>        
                    </tr>
                    <tr>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>
                        <td width="25%" align="center"><input type="text"></td>        
                    </tr> */ ?>
                </table>
            </div>
            <br/>
            <br/>
            
            <div class="judul_dalam">APPLICANT'S RESIDENCY INFORMATION</div>
            <div class="formulir3">
                <?php 
                $residentModel = ResidentalHistory::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id);
                foreach($residentModel as $res){ ?>
                <table width="100%">	
                    <tr>
                        <td>Current Address :<?php echo $res->address; ?></td>
                        <td>City :<?php echo $res->city; ?></td> 
                        <td>State :<?php echo $res->state; ?></td> 
                        <td>Zip :<?php echo $res->zip; ?></td>   
                    </tr>
                    <tr>
                        <td>
                            Length of Stay :
                                <?php  
                                $start = $res->year_month_moved_in."-01";
                                
                                $end = date("Y-m")."-01";
                                $diff = Utils::monthsDif($start, $end);
                                echo $start." ".$end;
                                echo floor($diff/12)." ".$diff%12;
                                ?>
                        </td>
                        <td>Land Lord's Name :<input type="text"></td> 
                        <td>Phone No. :<input type="text"></td> 
                    </tr>
                </table> <?php
                }
                ?>
                <table width="100%">	
                    <tr>
                        <td>Current Address :<input type="text"></td>
                        <td>City :<input type="text"></td> 
                        <td>State :<input type="text"></td> 
                        <td>Zip :<input type="text"></td>   
                    </tr>
                    <tr>
                        <td>Length of Stay :<input type="text"></td>
                        <td>Land Lord's Name :<input type="text"></td> 
                        <td>Phone No. :<input type="text"></td> 
                    </tr>
                </table>
                <table>
                    <tr>
                        <td colspan="4"><div class="panjang">Reason for Moving :<input type="text"></div></td>
                    </tr>
                    <tr>
                        <td colspan="4"> <i>Give previous address if less than 5 years </i> </td> 
                    </tr>
                    <tr>
                        <td>Previous Address :<input type="text"></td>
                        <td>City :<input type="text"></td> 
                        <td>State :<input type="text"></td> 
                        <td>Zip :<input type="text"></td>   
                    </tr>
                    <tr>
                        <td>Length of Stay :<input type="text"></td>
                        <td>Land Lord's Name :<input type="text"></td> 
                        <td>Phone No. :<input type="text"></td> 
                    </tr>
                    <tr>
                        <td colspan="4"><div class="panjang"><i>Reason for Moving</i> :<input type="text"></div></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <div class="judul_dalam">WORK OR BUSINESS ENTITY INFORMATION</div>    
            <table width="100%">
                <tr>
                    <td>Employed by : <input type="text"></td>
                    <td colspan="2"><div class="panjang">Address : <input type="text"></div></td> 
                </tr>
                <tr>
                    <td width="45%">Phone No : <input type="text"></td>
                    <td width="25%">Department : <input type="text"></td> 
                    <td width="35%">Position / Title : <input type="text"></td> 
                </tr>
                <tr>
                    <td>Length of Employment : <input type="text"></td>
                    <td>Salary : <input type="text"></td> 
                    <td>Supervisor's Name : <input type="text"></td> 
                </tr>
                <tr>
                    <td colspan="3"> <i>Spouse's Employment Information </i> </td> 
                </tr>
                <tr>
                    <td>Employed by : <input type="text"></td>
                    <td colspan="2"><div class="panjang">Address : <input type="text"></div></td> 
                </tr>
                <tr>
                    <td>Phone No : <input type="text"></td>
                    <td>Department : <input type="text"></td> 
                    <td>Position / Title : <input type="text"></td> 
                </tr>
                <tr>
                    <td>Length of Employment : <input type="text"></td>
                    <td>Salary : <input type="text"></td> 
                    <td>Supervisor's Name : <input type="text"></td> 
                </tr>
                <tr>
                    <td colspan="3"><i>If Self-employed please fill the following</i></td>
                </tr>
                <tr>
                    <td>Business Name : <input type="text"></td>
                    <td>Type of Business : <input type="text"></td> 
                    <td>Years in Business : <input type="text"></td> 
                </tr>
                <tr>
                    <td colspan="2"><div class="panjang">Address : <input type="text"></div></td>
                    <td>Phone No : <input type="text"></td>               
                </tr>
                <tr>
                    <td>Length of Stay in Current Location : <input type="text"></td> 
                    <td>LandLord : <input type="text"></td> 
                    <td>Phone No : <input type="text"></td>               
                </tr>
            </table>
            <br>
            <br>
            <div class="judul_dalam">OTHER CONTACT INFORMATION</div>    
            <table width="100%">
                <tr>
                    <td width="33%"><div class="nofloat">Name : <input type="text"></div></td> 
                    <td width="33%"><div class="nofloat">Relation : <input type="text"></div></td> 
                    <td width="34%"><div class="nofloat">Phone No : <input type="text"></div></td>               
                </tr>
                <tr>
                    <td><div class="nofloat">Name : <input type="text"></div></td> 
                    <td><div class="nofloat">Relation : <input type="text"></div></td> 
                    <td><div class="nofloat">Phone No : <input type="text"></div></td>               
                </tr>
                <tr>
                    <td><div class="nofloat">Name : <input type="text"></div></td> 
                    <td><div class="nofloat">Relation : <input type="text"></div></td> 
                    <td><div class="nofloat">Phone No : <input type="text"></div></td>               
                </tr>
            </table>
            <table>
            <tr>
                <td><p><font size="-2">The undersigned Applicant hereby offers to rent/lease real property described as PROPERTY NAME
                It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the
                approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease
                after notification of the acceptance of this Application and Offer. Time is of the essence.
                A credit check fee of $ 30.00 (per person) to process this Application is required. Money will be given by Applicant to the owner/manager when this Application is turned in for
                processing.
                Applicant represents all information on this Application to be true and accurate and understands that owner/manager will rely upon said information when accepting this Application whether an
                independent investigation has been performed or not. Applicant hereby authorizes owner/manager and his/her/its employees and agents to verify said information and make independent
                investigations in person, by mail, phone, fax, or otherwise, to determine Applicant's rental, credit, financial and character standing. Applicant hereby releases owner/manager, his/her/its employees
                and agents, Vantage Asset Management, Ltd., its employees and agents and any and all other firms or persons investigating or supplying information, from any liability whatsoever concerning the
                release and/or use of said information and further, will hold them all harmless from any suit or reprisal whatsoever. All holders, public and private, of any such information are hereby authorized to
                release, without limitation, any and all such information they have concerning Applicant and in so doing, will be acting on Applicant's behalf at Applicant's request and will be held blameless and
                without any liability whatsoever. A copy or other reproduction of this Authorization shall be as effective as the original.
                NOTICE: The rental for which you are applying may be reported to and monitored by various Consumer Credit Reporting Agencies. Your failure to satisfactorily perform your rental obligations
                may result in a derogatory entry in your rental and/or credit consumer file and could hamper your ability to obtain housing and/or credit in the future. In addition, owner/manager may report any and
                all information to other property owners/managers, credit grantors and/or public agencies</font></p></td>             
            </tr>
            </table>
            <br />
            <br />
        </div><!---content end---->
        </div><!---maincontent_info end---->
    </body>
</html>
<html>
    <head>
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
            html { margin-left: 30px; margin-right: 0px; margin-top: 20px; margin-bottom: 20px}
        </style>
        <title></title>
    </head>
    <body>
        <div class="maincontent_info">
            <div class="head_content">
                <div class="logo-info">
                    <img src="http://vamproperty.com/build/rdrental/img/logo.png" />
                </div>
            </div>
            <div class="content">
                <div>
                    <div class="judul_dalam">
                        APPLICATION TO LEASE COMMERCIAL SPACE
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
                $applicantModel = ApplicantInfo::model()->findAll("rd_application_information_id = ".Yii::app()->session['applicationID']." order by id asc");

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
                                <td> <?php /*Driver Lisence No :<input type="text" name="lisence">*/ echo $applic->idtype." No : ".$applic->idnum; ?></td>     
                                <td> S.S.No :<?php /*<input type="text" name="ssno">*/ echo $applic->ssn; ?></td>        
                            </tr>
                            <tr>
                                <td> Has pet : <?php echo isset($applic->has_pet) && $applic->has_pet == 1 ? "Yes" : "No"  ?></td>
                                <td colspan="2"> Number of pet(s) : <?php echo isset($applic->pet_num) ? $applic->pet_num : "" ?></td>
                            </tr>
                        </table>
                    </div>
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
                        
                        if($i == 1){
                            $dependantModel = DependantInfo::model()->findAll("rd_applicant_info_id = ".$applic->id." order by id asc");
                            foreach ($dependantModel as $dep){ ?>

                            <tr>
                                <td width="25%" align="center"><?php echo isset($dep->name) ? $dep->name : ""; ?></td>
                                <td width="25%" align="center"><?php echo isset($dep->relation) ? $dep->relation : ""; ?></td>
                                <td width="25%" align="center"><?php echo isset($dep->age) ? $dep->age : ""; ?></td>
                                <td width="25%" align="center"><?php echo isset($dep->stay_in) && $dep->stay_in == 1 ? "Yes" : "No"; ?></td>        
                            </tr>

                            <?php 
                            } ?>
                            <tr>
                                <td width="60%" colspan="2">How long you will live here?</td>
                                <td width="40%"><?php echo $applic->years_live_planned ?> years</td> 
                            </tr>
                            <tr>
                                <td colspan="4"> <i>Vehicle information : </i> </td> 
                            </tr>
                            <tr>
                                <th> License Plate</th>
                                <th> Make/Model</th>
                                <th> Year</th>
                                <th> Color</th>        
                            </tr>
                            <?php 
                            $vehicleModel = VehicleInfo::model()->findAll("rd_applicant_info_id = ".$applic->id." order by id asc");
                            foreach($vehicleModel as $veh){ ?>
                            <tr>
                                <td width="25%" align="center"><?php echo isset($veh->license_plate) ? $veh->license_plate : "" ?></td>
                                <td width="25%" align="center"><?php echo isset($veh->maker_model) ? $veh->maker_model : ""; ?></td>
                                <td width="25%" align="center"><?php echo isset($veh->year) ? $veh->year : ""; ?></td>
                                <td width="25%" align="center"><?php echo isset($veh->color) ? $veh->color : ""; ?></td>        
                            </tr>
                            <?php
                            } 
                        }
                        $i++;
                        ?>
                        </table>
                    </div>
                <?php 
                
                } ?>
                <br/>
                <br/>

                <div class="judul_dalam">APPLICANT'S RESIDENCY INFORMATION</div>
                <div class="formulir3">
                    <?php 
                    $residentModel = ResidentalHistory::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    foreach($residentModel as $res){ ?>
                    <table width="100%">	
                        <tr>
                            <td>Current Address :<?php echo $res->address; ?></td>
                            <td>City :<?php echo $res->city; ?></td> 
                            <td>State :<?php echo $res->state; ?></td> 
                            <td>Zip :<?php echo $res->zip; ?></td>   
                        </tr>
                        <tr>
                            <td>Length of Stay : <?php echo $res->year_month_moved_in; n?></td>
                            <td>Land Lord's Name : <?php echo $res->agent_landlord_name; ?></td> 
                            <td>Phone No. : <?php $res->agent_landlord_phone ?></td> 
                        </tr>
                        <tr>
                            <td colspan="3"><div class="panjang">Reason for Moving :<?php $res->leave_reason; ?></div></td>
                        </tr>
                    </table> <?php
                    }
                    ?>
                </div>
                <br>
                <br>
                <div class="judul_dalam">OTHER CONTACT INFORMATION</div>    
                <table width="100%">
                    <?php 
                    $personalrefModel = PersonalRefrence::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");

                    foreach($personalrefModel as $ref){ ?>
                        <tr>
                            <td width="33%"><div class="nofloat">Name : <?php echo $ref->name; ?></div></td> 
                            <td width="33%"><div class="nofloat">Relation : <?php echo $ref->relation; ?></div></td> 
                            <td width="34%"><div class="nofloat">Address : <?php echo $ref->address; ?></div></td> 
                            <td width="34%"><div class="nofloat">Phone No : <?php echo $ref->phone; ?></div></td>
                        </tr> <?php
                    }
                    ?>
                </table>
                <br>
                <br>
                <div class="judul_dalam">WORK OR BUSINESS ENTITY INFORMATION</div>    
                <table width="100%">
                    <?php 

                    $emplModel = EmploymentInfo::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    foreach($emplModel as $emp){
                        if($emp->employment_type == 'fulltime' || $emp->employment_type == 'parttime'){ ?>
                            <tr>
                                <td>Employed by : <?php echo $emp->employer; ?></td>
                                <td colspan="2"><div class="panjang">Address : <?php echo $emp->employer_address; ?></div></td> 
                            </tr>
                            <tr>
                                <td width="45%">Phone No : <?php echo $emp->phone; ?></td>
                                <td width="25%">Department : <?php echo $emp->department; ?></td> 
                                <td width="35%">Position / Title : <?php echo $emp->position; ?></td> 
                            </tr>
                            <tr>
                                <td>Length of Employment : <?php echo $emp->employment_length; ?></td>
                                <td>Salary : <?php echo $emp->salary; ?></td> 
                                <td>Supervisor's Name : <?php echo $emp->supervisor_name; ?></td> 
                            </tr> <?php
                        } else if($emp->employment_type == 'selfemployed'){ ?>
                            <tr>
                                <td>Business Name : <?php echo $emp->bussiness_name; ?></td>
                                <td>Type of Business : <?php echo $emp->bussiness_type; ?></td> 
                                <td>Years in Business : <?php echo $emp->years_in_bussiness; ?></td> 
                            </tr>
                            <tr>
                                <td colspan="2"><div class="panjang">Address : <?php echo $emp->employer_address; ?></div></td>
                                <td>Phone No : <?php echo $emp->phone; ?></td>               
                            </tr>
                            <tr>
                                <td>Length of Stay in Current Location : <?php echo $emp->stay_length; ?></td> 
                                <td>LandLord : <?php echo $emp->landlord_name; ?></td> 
                                <td>Phone No : <?php echo $emp->landlord_phone; ?></td>               
                            </tr> <?php 
                        } else { ?>
                            <tr>
                                <td colspan="3">
                                    Employment Status: <?php echo $emp->employment_type; ?>
                                </td>
                            </tr> <?php
                        }
                    }
                    ?>

                </table>
                <br>
                <br>
                <div class="judul_dalam">CREDIT INFORMATION</div>  
                <table width="100%"> 
                    <tr>
                        <th>Name of Bank</th>
                        <th>Branch</th>
                        <th>Phone #</th>
                        <th>Account #</th>
                        <th>Approx.Balance</th>
                    </tr>
                    <?php 
                    $crimodel = CreditInfo::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    foreach($crimodel as $cri){ ?>
                        <tr>
                            <td width="20%" align="center"><div class="nofloat"><?php echo $cri->bank_name ?></div></td> 
                            <td width="20%" align="center"><div class="nofloat"><?php echo $cri->branch ?></div></td> 
                            <td width="20%" align="center"><div class="nofloat"><?php echo $cri->phone_no ?></div></td>   
                            <td width="20%" align="center"><div class="nofloat"><?php echo $cri->account_type ?></div></td>              
                            <td width="20%" align="center"><div class="nofloat"><?php echo $cri->approx_balance ?></div></td>                          
                        </tr> <?php
                    }
                    ?>
                </table>
                <br>
                <table width="100%">
                    <tr>
                        <th>Cerdit Refrence</th>
                        <th>Address</th>
                        <th>Phone #</th>
                        <th>Account #</th>
                        <th>Credit Amount</th>
                    </tr>
                    <?php 
                    $crfmodel = CreditRef::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    foreach($crfmodel as $crf){ ?>
                        <tr>
                            <td width="20%" align="center"><div class="nofloat"><?php echo $crf->credit_ref; ?></div></td> 
                            <td width="20%" align="center"><div class="nofloat"><?php echo $crf->address; ?></div></td> 
                            <td width="20%" align="center"><div class="nofloat"><?php echo $crf->phone; ?></div></td>   
                            <td width="20%" align="center"><div class="nofloat"><?php echo $crf->account; ?></div></td>              
                            <td width="20%" align="center"><div class="nofloat"><?php echo $crf->amount; ?></div></td>                          
                        </tr> <?php
                    }
                    ?>
                </table>
                <br>
                <div class="judul_dalam">FINANCIAL CONDITION</div>  
                <?php 
                $incomemodel = MonthlyIncome::model()->find("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                $expendmodel = Expenditures::model()->find("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                ?>
                <table width="100%">
                    <tr>
                        <td width="50%" align="center"><div class="judul_garis">Monthly Income</div></td> 
                        <td width="50%" align="center"><div class="judul_garis">Expenditures</div></td>                          
                    </tr>   
                    <tr>
                        <td>Salary or Wage : <?php echo $incomemodel->salary_or_wage ?></td> 
                        <td>Property Taxes & Assessment : <?php echo $expendmodel->prop_tax_asses ?></td>                          
                    </tr>  
                    <tr>
                        <td>Dividends : <?php echo $incomemodel->devidends ?></td> 
                        <td>Federal & State Income Taxes : <?php echo $expendmodel->fed_state_income_tax ?></td>                          
                    </tr>   
                    <tr>
                        <td>Rental : <?php echo $incomemodel->rental ?></td> 
                        <td>Real Estate Loan Payment : <?php echo $expendmodel->realestate_loan_payment ?></td>                          
                    </tr>   
                    <tr>
                        <td>Business or Professional Income : <?php echo $incomemodel->bussiness_income ?> (net)</td> 
                        <td>Payment on Contract/Note : <?php echo $expendmodel->payment_contract ?></td>                          
                    </tr>   
                    <tr>
                        <td>Other (alimony,child support, etc.) : <?php echo $incomemodel->other ?></td> 
                        <td>Estimate Living Expenses : <?php echo $expendmodel->living_expenses ?></td>                          
                    </tr>    
                    <tr>
                        <td>&nbsp;</td> 
                        <td>Other (alimony,child support, etc.) : <?php echo $expendmodel->other ?></td>   
                    </tr>      
                </table>
                <br>
                <i>Stock & bonds</i>
                <table width="100%">
                    <tr>
                        <th>Stock & Bonds</th>
                        <th>Where Quote</th>
                        <th>Cost or Market</th>
                        <th>Title in Name of</th>
                        <th>Quantity</th>
                        <th>Value</th>
                    </tr>
                    <?php 
                    $stockmodel = StockBonds::model()->findAll("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    foreach($stockmodel as $stock){ ?>
                        <tr>
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->stock_bonds ?></div></td> 
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->where_quote ?></div></td> 
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->market_cost ?></div></td> 
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->title_name ?></div></td>     
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->quantity ?></div></td> 
                            <td width="17%" align="center"><div class="panjang"><?php echo $stock->value ?></div></td>                        
                        </tr> <?php
                    }
                    ?>
                </table>
                <br>
                <div class="judul_dalam">GENERAL INFORMATION</div>     
                <table width="100%">  
                    <?php 
                    $genmodel = GeneralInfo::model()->find("rd_applicant_info_id = ".$applicantModel[0]->id." order by id asc");
                    ?>
                    <tr>
                        <td width="75%">1. Have you ever filed any petition under the Bankcruptcy Act? <?php echo $genmodel->bankrupt == 1 ? "Yes" : "No" ?></td> 
                        <td width="25%">If so, When ? <?php echo $genmodel->bankrupted_at ?></td>
                    </tr>
                    <tr>
                        <td width="75%">2. Has your income tax return ever been questioned by the IRS? <?php echo $genmodel->is_questioned == 1 ? "Yes" : "No" ?></td> 
                        <td width="25%">If so, When ? <?php echo $genmodel->questioned_at ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">3. Have you ever been evicted for nonpayment of rent or any other reason? <?php echo $genmodel->is_evicted == 1 ? "Yes" : "No" ?></td> 
                    </tr>
                    <tr>
                        <td colspan="2">Please explain any "yes" answers to General information:<?php echo $genmodel->explanation ?></div></td> 
                    </tr>
                </table>
                <br>
                <div class="judul_dalam">ADDITIONAL INFORMATION</div>  
                <table width="100%">
                    <tr>
                        <td> 
                            <font size="-1">The undersigned Applicant hereby offers to rent/lease real property described as PROPERTY NAME
                            It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral
                            Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and
                            conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the
                            acceptance of this Application and Offer. Time is of the essence.
                            A credit check fee of $ 30.00 (per person) to process this Application is required. Money will be given by Applicant to the
                            owner/manager when this Application is turned in for processing.
                            Applicant represents all information on this Application to be true and accurate and understands that owner/manager will rely upon said
                            information when accepting this Application whether an independent investigation has been performed or not. Applicant hereby authorizes
                            owner/manager and his/her/its employees and agents to verify said information and make independent investigations in person, by mail, phone,
                            fax, or otherwise, to determine Applicant's rental, credit, financial and character standing. Applicant hereby releases owner/manager, his/her/its
                            employees and agents, Vantage Asset Management, Ltd., its employees and agents and any and all other firms or persons investigating or
                            supplying information, from any liability whatsoever concerning the release and/or use of said information and further, will hold them all
                            harmless from any suit or reprisal whatsoever. All holders, public and private, of any such information are hereby authorized to release, without
                            limitation, any and all such information they have concerning Applicant and in so doing, will be acting on Applicant's behalf at Applicant's
                            request and will be held blameless and without any liability whatsoever. A copy or other reproduction of this Authorization shall be as effective
                            as the original.
                            </font>
                        </td>
                    </tr>    
                </table>
                <br />
                <br />
                <div>
                    <table>
                        <tr>
                            <td>
                                Primary applicant sign 
                            </td>
                            <td>:</td>
                            <td>
                                <?php 
                                    $imgname = "sign_".$applicantModel[0]->firstname;
                                ?>
                                <img src="http://vamproperty.com/build/rdrental/signed/<?php echo $imgname; ?>.png" /><br>
                                <hr>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                Date
                            </td>
                            <td>:</td>
                            <td><?php echo date("M d, Y") ?></td>
                        </tr>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $applicantModel[0]->firstname." ".$applicantModel[0]->middlename." ".$applicantModel[0]->lastname; ?> <br>
                                <hr>
                            </td>
                        </tr>
                    </table>
                </div>
                <br />
                <br /> 
        </div>
    </body>
</html>
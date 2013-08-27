<?php

class SaveController extends Controller
{
    public function actionIndex()
    {
        if(isset($_POST)){
            $serializeData1 = $_POST['data1'];
            $data1 = array();
            $serializeData2 = $_POST['data2'];
            $data2 = array();
            $serializeData3 = $_POST['data3'];
            $data3 = array();
            $serializeData4 = $_POST['data4'];
            $data4 = array();
            $serializeData5 = $_POST['data5'];
            $data5 = array();
            $serializeData6 = $_POST['data6'];
            $data6 = array();
            $serializeData7 = $_POST['data7'];
            $data7 = array();
            parse_str($serializeData1, $data1);
            parse_str($serializeData2, $data2);
            parse_str($serializeData3, $data3);
            parse_str($serializeData4, $data4);
            parse_str($serializeData5, $data5);
            parse_str($serializeData6, $data6);
            parse_str($serializeData7, $data7);

            $data1['ApplicationInformation']['prime_appic_signature'] = $_POST['data8']['sign'];
            $data1['ApplicationInformation']['payment_type'] = $_POST['data8']['payment_type'];

            $pass = Utils::rand_string(4);
            if(!isset(Yii::app()->session['applicationID'])){
                $applicationModel = new ApplicationInformation();
                $applicationModel->attributes = $data1['ApplicationInformation'];
                if($applicationModel->save()){
                    $applicationID = Yii::app()->db->getLastInsertID();

                    $i = 1;
                    foreach($data2['ApplicantInfo'] as $appKey => $applicant){
                        $applicantModel = new ApplicantInfo();
                        $applicantModel->attributes = $applicant;
                        $applicantModel->rd_application_information_id = $applicationID;
                        if($applicantModel->save()){
                            $applicantID = Yii::app()->db->getLastInsertID();

                            if($appKey == 1){
                                $appModel = ApplicationInformation::model()->findByPk($applicationID);
                                $appModel->prime_appic_signature = $_POST['data8']['sign'];
                                $appModel->prime_applic_cellphone  = $applicantModel->cellphone;
                                $appModel->prime_applic_homephone  = $applicantModel->homephone;
                                $appModel->prime_applic_email  = $applicantModel->email;
                                $appModel->payment_type = $_POST['data8']['payment_type'];
                                $appModel->code = substr($applicantModel->firstname, 0, 2).substr($applicantModel->lastname, 0, 2);
                                $appModel->pass = md5($pass);
                                $appModel->save();
                            }

                            foreach($data2['DependantInfo'][$i] as $key => $dependant){
                                if(is_numeric($key)){
                                    $dependantModel = new DependantInfo();
                                    $dependantModel->attributes = $dependant;
                                    $dependantModel->rd_applicant_info_id = $applicantID;
                                    $dependantModel->save();
                                } else {
                                    break;
                                }
                            }

                            foreach($data2['VehicleInfo'][$i] as $key => $vehicle){
                                if(is_numeric($key)){
                                    $vehicleModel = new VehicleInfo();
                                    $vehicleModel->attributes = $vehicle;
                                    $vehicleModel->rd_applicant_info_id = $applicantID;
                                    $vehicleModel->save();
                                } else {
                                    break;
                                }
                            }

                            foreach($data3['ResidentalHistory'][$i] as $key => $resHistory){
                                if(is_numeric($key)){
                                    $residentalModel = new ResidentalHistory();
                                    $residentalModel->attributes = $resHistory;
                                    $residentalModel->year_month_moved_in = $resHistory['year']."-".$resHistory['month'];
                                    $residentalModel->rd_applicant_info_id = $applicantID;
                                    $residentalModel->save();
                                } else {
                                    break;
                                }
                            }

                            foreach($data4['EmploymentInfo'][$i] as $key => $empHistory){
                                $empModel = new EmploymentInfo();
                                $empModel->rd_applicant_info_id = $applicantID;
                                $empModel->employment_type = $data4['EmploymentInfo'][$i]['employment_type']; 
                                if(is_numeric($key)){
                                    $empModel->attributes = $empHistory;
                                    $empModel->save();
                                } else {
                                    if($data4['EmploymentInfo'][$i]['employment_type'] == "unemployed"){ 
                                        $empModel->save();
                                    }
                                }
                            }

                            foreach($data5['PersonalRefrence'][$i] as $key => $personalRef){
                                if(is_numeric($key)){
                                    $personalRefModel = new PersonalRefrence();
                                    $personalRefModel->attributes = $personalRef;
                                    $personalRefModel->rd_applicant_info_id = $applicantID;
                                    $personalRefModel->save();
                                } else {
                                    break;
                                }
                            }

                            if(isset($data6['CreditInfo'])){
                                foreach($data6['CreditInfo'][$i] as $key => $crinfo){
                                    if(is_numeric($key)){
                                        $crModel = new CreditInfo();
                                        $crModel->attributes = $crinfo;
                                        $crModel->rd_applicant_info_id = $applicantID;
                                        $crModel->save();
                                    } else {
                                        break;
                                    }
                                }
                            }

                            if(isset($data6['CreditRef'])){
                                foreach($data6['CreditRef'][$i] as $key => $crref){
                                    if(is_numeric($key)){
                                        $crrefModel = new CreditRef();
                                        $crrefModel->attributes = $crref;
                                        $crrefModel->rd_applicant_info_id = $applicantID;
                                        $crrefModel->save();
                                    } else {
                                        break;
                                    }
                                }
                            }

                            if(isset($data6['MonthlyIncome']) && isset($data6['Expenditures'])){
                                $incomeModel = new MonthlyIncome();
                                $incomeModel->attributes = $data6['MonthlyIncome'][$i];
                                $incomeModel->rd_applicant_info_id = $applicantID;
                                $incomeModel->save();

                                $expenseModel = new Expenditures();
                                $expenseModel->attributes = $data6['Expenditures'][$i];
                                $expenseModel->rd_applicant_info_id = $applicantID;
                                $expenseModel->save();
                            }

                            if(isset($data6['StockBonds'])){
                                foreach($data6['StockBonds'][$i] as $key => $bonds){
                                    if(is_numeric($key)){
                                        $sbModel = new StockBonds();
                                        $sbModel->attributes = $bonds;
                                        $sbModel->rd_applicant_info_id = $applicantID;
                                        $sbModel->save();
                                    } else {
                                        break;
                                    }
                                }
                            }

                            if(isset($data7['GeneralInfo'])){
                                $genInfo = new GeneralInfo();
                                $genInfo->attributes = $data7['GeneralInfo'][$i];
                                $genInfo->rd_applicant_info_id = $applicantID;
                                $genInfo->save();
                            }

                        } else {
                            print_r($applicationModel->getErrors());
                            die();
                        }
                        $i++;
                    }

                    Yii::app()->session['applicationID'] = $applicationID;

                    echo json_encode(array("c"=>$appModel->code,'y'=>$pass));
                } else {
                    print_r($applicationModel->getErrors());
                    die();
                }
            } else {
                $applicationModel = ApplicationInformation::model()->findByPk(Yii::app()->session['applicationID']);
                if(!isset($applicationModel) || count($applicationModel) <= 0){
                    $message = array('error_type' => 'session_exists_no_data', 'message' => 'Session exist but no data found on server. Please close your browser first');
                } else {
                    $applicationModel->attributes = $data1['ApplicationInformation'];
                    if($applicationModel->save()){
                        $applicationID = $applicationModel->id;

                        $query = "DELETE FROM rd_applicant_info where rd_application_information_id = $applicationID";
                        Yii::app()->db->createCommand($query)->execute();

                        $i = 1;
                        foreach($data2['ApplicantInfo'] as $appKey => $applicant){
                            $applicantModel = new ApplicantInfo();
                            $applicantModel->attributes = $applicant;
                            $applicantModel->rd_application_information_id = $applicationID;

                            if($applicantModel->save()){
                                $applicantID = Yii::app()->db->getLastInsertID();
                                if($appKey == 1){
                                    $appModel = ApplicationInformation::model()->findByPk($applicationID);
                                    $appModel->prime_appic_signature = $_POST['data8']['sign'];
                                    $appModel->prime_applic_cellphone  = $applicantModel->cellphone;
                                    $appModel->prime_applic_homephone  = $applicantModel->homephone;
                                    $appModel->prime_applic_email  = $applicantModel->email;
                                    $appModel->payment_type = $_POST['data8']['payment_type'];
                                    if(!$appModel->save()){
                                        print_r($appModel->getErrors());
                                        die();
                                    }
                                }

                                foreach($data2['DependantInfo'][$i] as $key => $dependant){
                                    if(is_numeric($key)){
                                        $dependantModel = new DependantInfo();
                                        $dependantModel->attributes = $dependant;
                                        $dependantModel->rd_applicant_info_id = $applicantID;
                                        $dependantModel->save();
                                    } else {
                                        break;
                                    }
                                }

                                foreach($data2['VehicleInfo'][$i] as $key => $vehicle){
                                    if(is_numeric($key)){
                                        $vehicleModel = new VehicleInfo();
                                        $vehicleModel->attributes = $vehicle;
                                        $vehicleModel->rd_applicant_info_id = $applicantID;
                                        $vehicleModel->save();
                                    } else {
                                        break;
                                    }
                                }

                                foreach($data3['ResidentalHistory'][$i] as $key => $resHistory){
                                    if(is_numeric($key)){
                                        $residentalModel = new ResidentalHistory();
                                        $residentalModel->attributes = $resHistory;
                                        $residentalModel->rd_applicant_info_id = $applicantID;
                                        $residentalModel->save();
                                    } else {
                                        break;
                                    }
                                }

                                foreach($data4['EmploymentInfo'][$i] as $key => $empHistory){
                                    $empModel = new EmploymentInfo();
                                    $empModel->rd_applicant_info_id = $applicantID;
                                    $empModel->employment_type = $data4['EmploymentInfo'][$i]['employment_type']; 
                                    if(is_numeric($key)){
                                        $empModel->attributes = $empHistory;
                                        $empModel->save();
                                    } else {
                                        if($data4['EmploymentInfo'][$i]['employment_type'] == "unemployed"){ 
                                            $empModel->save();
                                        }
                                    }
                                }

                                foreach($data5['PersonalRefrence'][$i] as $key => $personalRef){
                                    if(is_numeric($key)){
                                        $personalRefModel = new PersonalRefrence();
                                        $personalRefModel->attributes = $personalRef;
                                        $personalRefModel->rd_applicant_info_id = $applicantID;
                                        $personalRefModel->save();
                                    } else {
                                        break;
                                    }
                                }
                                
                                if(isset($data6['CreditInfo'])){
                                    foreach($data6['CreditInfo'][$i] as $key => $crinfo){
                                        if(is_numeric($key)){
                                            $crModel = new CreditInfo();
                                            $crModel->attributes = $crinfo;
                                            $crModel->rd_applicant_info_id = $applicantID;
                                            $crModel->save();
                                        } else {
                                            break;
                                        }
                                    }
                                }

                                if(isset($data6['CreditRef'])){
                                    foreach($data6['CreditRef'][$i] as $key => $crref){
                                        if(is_numeric($key)){
                                            $crrefModel = new CreditRef();
                                            $crrefModel->attributes = $crref;
                                            $crrefModel->rd_applicant_info_id = $applicantID;
                                            $crrefModel->save();
                                        } else {
                                            break;
                                        }
                                    }
                                }

                                if(isset($data6['MonthlyIncome']) && isset($data6['Expenditures'])){
                                    $incomeModel = new MonthlyIncome();
                                    $incomeModel->attributes = $data6['MonthlyIncome'][$i];
                                    $incomeModel->rd_applicant_info_id = $applicantID;
                                    $incomeModel->save();

                                    $expenseModel = new Expenditures();
                                    $expenseModel->attributes = $data6['Expenditures'][$i];
                                    $expenseModel->rd_applicant_info_id = $applicantID;
                                    $expenseModel->save();
                                }

                                if(isset($data6['StockBonds'])){
                                    foreach($data6['StockBonds'][$i] as $key => $bonds){
                                        if(is_numeric($key)){
                                            $sbModel = new StockBonds();
                                            $sbModel->attributes = $bonds;
                                            $sbModel->rd_applicant_info_id = $applicantID;
                                            $sbModel->save();
                                        } else {
                                            break;
                                        }
                                    }
                                }

                                if(isset($data7['GeneralInfo'])){
                                    $genInfo = new GeneralInfo();
                                    $genInfo->attributes = $data7['GeneralInfo'][$i];
                                    $genInfo->rd_applicant_info_id = $applicantID;
                                    $genInfo->save();
                                }

                            } else {
                                print_r("jdkfjkjfsdjfskdjf");
                                print_r($applicantModel->getErrors());
                                die();
                            }
                            $i++;
                        }
                    } else {
                        echo $applicationModel->getErrors();
                    }
                }

                echo json_encode(array("c"=>'update','y'=>'Updated'));
            }  

            $data1['ApplicationInformation']['prime_appic_signature'] = $_POST['data8']['sign'];
            $data1['ApplicationInformation']['payment_type'] = $_POST['data8']['payment_type'];

            Yii::app()->session['step1'] = $data1['ApplicationInformation'];
            Yii::app()->session['step2'] = $data2;
            Yii::app()->session['step3'] = $data3;
            Yii::app()->session['step4'] = $data4;
            Yii::app()->session['step5'] = $data5;
            Yii::app()->session['step6'] = $data6;
            Yii::app()->session['step7'] = $data7;
        }
    }
    
    public function actionShowmessage(){
        if(isset($_POST['c']) && isset($_POST['y'])){
            echo $this->renderPartial('index', array('code'=>$_POST['c'], 'pass'=>$_POST['y']), true);
        }
    }
    
    public function actionSavesign(){
        if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
        {
            // Get the data
            $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];

            // Remove the headers (data:,) part.
            // A real application should use them according to needs such as to check image type
            $filteredData=substr($imageData, strpos($imageData, ",")+1);

            // Need to decode before saving since the data we received is already base64 encoded
            $unencodedData=base64_decode($filteredData);

            //echo "unencodedData".$unencodedData;

            // Save file. This example uses a hard coded filename for testing,
            // but a real application can specify filename in POST variable
            $fp = fopen( 'signed/signimg.png', 'wb' );
            fwrite( $fp, $unencodedData);
            fclose( $fp );
        }
    }
}
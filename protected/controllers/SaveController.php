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
                $this->newdata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $_POST['data8'], $pass);
            } else {
                $this->updatedata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $_POST['data8'], $pass);
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
    
    private function newdata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $pass){
        $applicationModel = new ApplicationInformation();
        $applicationModel->attributes = $data1['ApplicationInformation'];
        if($applicationModel->save()){
            $applicationID = Yii::app()->db->getLastInsertID();

            $this->savedatadetails($data2, $data3, $data4, $data5, $data6, $data7, $data8, $pass, $applicationID);
            
            Yii::app()->session['applicationID'] = $applicationID;
            
            $appModel = ApplicationInformation::model()->findByPk($applicationID);
            echo json_encode(array("c"=>$appModel->code,'y'=>$pass));
        } else {
            print_r($applicationModel->getErrors());
            die();
        }
    }
    
    private function updatedata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $pass){
        $applicationModel = ApplicationInformation::model()->findByPk(Yii::app()->session['applicationID']);
        if(!isset($applicationModel) || count($applicationModel) <= 0){
            $message = array('error_type' => 'session_exists_no_data', 'message' => 'Session exist but no data found on server. Please close your browser first');
        } else {
            $applicationModel->attributes = $data1['ApplicationInformation'];
            if($applicationModel->save()){
                $applicationID = $applicationModel->id;

                $delapplics = ApplicantInfo::model()->findAll("rd_application_information_id = ".$applicationID);
                foreach($delapplics as $applic){
                    $delresidental = "DELETE FROM rd_residental_history where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delresidental)->execute();
                    
                    $delemp = "DELETE FROM rd_employment_info where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delemp)->execute();
                    
                    $delgendinfo = "DELETE FROM rd_general_info where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delgendinfo)->execute();
                    
                    $delcrr = "DELETE FROM rd_credit_ref where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delcrr)->execute();
                    
                    $delpers = "DELETE FROM rd_personal_refrence where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delpers)->execute();
                    
                    $deldep = "DELETE FROM rd_dependant_info where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($deldep)->execute();
                    
                    $delveh = "DELETE FROM rd_vehicle_info where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delveh)->execute();
                    
                    $delstock = "DELETE FROM rd_stock_bonds where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delstock)->execute();
                    
                    $delincome = "DELETE FROM rd_monthly_income where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delincome)->execute();
                    
                    $delcri = "DELETE FROM rd_credit_info where rd_applicant_info_id = $applic->id";
                    Yii::app()->db->createCommand($delcri)->execute();
                    
                }
                $query = "DELETE FROM rd_applicant_info where rd_application_information_id = $applicationID";
                Yii::app()->db->createCommand($query)->execute();

                if(isset($data2['ApplicantInfo'])){
                    
                    $this->savedatadetails($data2, $data3, $data4, $data5, $data6, $data7, $data8, $pass, $applicationID, 'update');
                    
                }
            } else {
                echo $applicationModel->getErrors();
            }
        }

        echo json_encode(array("c"=>'update','y'=>'Updated'));
    }
    
    private function savedatadetails($data2, $data3, $data4, $data5, $data6, $data7, $data8, $pass, $applicationID, $type = 'new'){
        
        foreach($data2['ApplicantInfo'] as $appKey => $applicant){

            $applicantModel = new ApplicantInfo();
            $applicantModel->attributes = $applicant;
            $applicantModel->rd_application_information_id = $applicationID;
            if($applicantModel->save()){
                $applicantID = Yii::app()->db->getLastInsertID();

                if($appKey == 1){
                    $appModel = ApplicationInformation::model()->findByPk($applicationID);
                    $appModel->prime_appic_signature = $data8['sign'];
                    $appModel->prime_applic_cellphone  = $applicantModel->cellphone;
                    $appModel->prime_applic_homephone  = $applicantModel->homephone;
                    $appModel->prime_applic_email  = $applicantModel->email;
                    $appModel->payment_type = $data8['payment_type'];
                    if($type == 'new'){
                        $appModel->code = substr($applicantModel->firstname, 0, 2).substr($applicantModel->lastname, 0, 2);
                        $appModel->pass = md5($pass);
                    }
                    if(!$appModel->save()){
                        print_r($appModel->getErrors());
                        die();
                    }
                }
                
                foreach($data2['DependantInfo'][$appKey] as $key => $dependant){
                    if(is_numeric($key)){
                        $dependantModel = new DependantInfo();
                        $dependantModel->attributes = $dependant;
                        $dependantModel->rd_applicant_info_id = $applicantID;

                        if(!$dependantModel->save()){
                            print_r($dependantModel->getErrors());
                            die();
                        }
                    }
                }

                foreach($data2['VehicleInfo'][$appKey] as $key => $vehicle){
                    if(is_numeric($key)){
                        $vehicleModel = new VehicleInfo();
                        $vehicleModel->attributes = $vehicle;
                        $vehicleModel->rd_applicant_info_id = $applicantID;
                        if(!$vehicleModel->save()){
                            print_r($vehicleModel->getErrors());
                            die();
                        }
                    }
                }

                foreach($data3['ResidentalHistory'][$appKey] as $key => $resHistory){
                    if(is_numeric($key)){
                        $residentalModel = new ResidentalHistory();
                        $residentalModel->attributes = $resHistory;
                        $residentalModel->rd_applicant_info_id = $applicantID;
                        if(!$residentalModel->save()){
                            print_r($residentalModel->getErrors());
                            die();
                        }
                    }
                }

                foreach($data4['EmploymentInfo'][$appKey] as $key => $empHistory){
                    $empModel = new EmploymentInfo();
                    $empModel->rd_applicant_info_id = $applicantID;
                    $empModel->employment_type = $data4['EmploymentInfo'][$appKey]['employment_type']; 
                    if(is_numeric($key)){
                        $empModel->attributes = $empHistory;
                        if(!$empModel->save()){
                            print_r($empModel->getErrors());
                            die();
                        }
                    } else {
                        if($data4['EmploymentInfo'][$appKey]['employment_type'] == "unemployed"){ 
                            if(!$empModel->save()){
                                print_r($empModel->getErrors());
                                die();
                            }
                        }
                    }
                }

                foreach($data5['PersonalRefrence'][$appKey] as $key => $personalRef){
                    if(is_numeric($key)){
                        $personalRefModel = new PersonalRefrence();
                        $personalRefModel->attributes = $personalRef;
                        $personalRefModel->rd_applicant_info_id = $applicantID;
                        if(!$personalRefModel->save()){
                            print_r($personalRefModel->getErrors());
                            die();
                        }
                    }
                }

                if(isset($data6['CreditInfo'])){
                    foreach($data6['CreditInfo'][$appKey] as $key => $crinfo){
                        if(is_numeric($key)){
                            $crModel = new CreditInfo();
                            $crModel->attributes = $crinfo;
                            $crModel->rd_applicant_info_id = $applicantID;
                            if(!$crModel->save()){
                                print_r($crModel->getErrors());
                                die();
                            }
                        }
                    }
                }

                if(isset($data6['CreditRef'])){
                    foreach($data6['CreditRef'][$appKey] as $key => $crref){
                        if(is_numeric($key)){
                            $crrefModel = new CreditRef();
                            $crrefModel->attributes = $crref;
                            $crrefModel->rd_applicant_info_id = $applicantID;
                            if(!$crrefModel->save()){
                                print_r($crrefModel->getErrors());
                                die();
                            }
                        }
                    }
                }

                if(isset($data6['MonthlyIncome']) && isset($data6['Expenditures'])){
                    $incomeModel = new MonthlyIncome();
                    $incomeModel->attributes = $data6['MonthlyIncome'][$appKey];
                    $incomeModel->rd_applicant_info_id = $applicantID;
                    if(!$incomeModel->save()){
                        print_r($incomeModel->getErrors());
                        die();
                    }

                    $expenseModel = new Expenditures();
                    $expenseModel->attributes = $data6['Expenditures'][$appKey];
                    $expenseModel->rd_applicant_info_id = $applicantID;
                    if(!$expenseModel->save()){
                        print_r($expenseModel->getErrors());
                        die();
                    }
                }

                if(isset($data6['StockBonds'])){
                    foreach($data6['StockBonds'][$appKey] as $key => $bonds){
                        if(is_numeric($key)){
                            $sbModel = new StockBonds();
                            $sbModel->attributes = $bonds;
                            $sbModel->rd_applicant_info_id = $applicantID;
                            if(!$sbModel->save()){
                                print_r($sbModel->getErrors());
                                die();
                            }
                        }
                    }
                }

                if(isset($data7['GeneralInfo'])){
                    $genInfo = new GeneralInfo();
                    $genInfo->attributes = $data7['GeneralInfo'][$appKey];
                    $genInfo->rd_applicant_info_id = $applicantID;
                    if(!$genInfo->save()){
                        print_r($genInfo->getErrors());
                        die();
                    }
                }

            } else {
                print_r($applicantModel->getErrors());
                die();
            }

        }
    }
}
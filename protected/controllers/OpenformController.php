<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OpenformController
 *
 * @author rizka
 */
class OpenformController extends Controller{
    //put your code here
    
    public function actionIndex(){
        $applicationModel = ApplicationInformation::model()
                ->find("code = :code and pass = :pass", array('code'=>$_POST['code'], 'pass'=>md5($_POST['pass'])));
        
        if(isset($applicationModel) && count($applicationModel) > 0){
            
            Yii::app()->session['applicationID'] = $applicationModel->id;
            
            foreach($applicationModel as $appKey => $appVal){
                $appArr[$appKey] = $appVal;
            }
            
            print_r($appArr);

            $applicantsModel = ApplicantInfo::model()
                    ->findAll("rd_application_information_id = ".$applicationModel->id);

            $applicantsData = array();
            $i = 1;
            foreach($applicantsModel as $applicant){
                foreach($applicant as $k => $val){
                    $applicantsData['ApplicantInfo'][$i][$k] = $val;
                }

                $dependantsModel = DependantInfo::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                foreach($dependantsModel as $kv => $dependant){
                    foreach($dependant as $key => $val){
                        $ddata[$i][$kv+1][$key] = $val;
                    }
                }
                $ddata[$i]['depcnt2'] = count($dependantsModel);
                $dependantsData = array('DependantInfo'=>$ddata);

                $vehicleModel = VehicleInfo::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                foreach($vehicleModel as $kv => $vehicle){
                    foreach($vehicle as $key => $val){
                        $vdata[$i][$kv+1][$key] = $val;
                    }
                }
                $vdata[$i]['vehcnt2'] = count($vehicleModel);
                $vehiclesData = array('VehicleInfo'=>$vdata);

                $resHistoryModel = ResidentalHistory::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                foreach($resHistoryModel as $rsv => $reshis){
                    foreach($reshis as $key => $val){
                        $resdata[$i][$rsv+1][$key] = $val;
                    }
                }
                $resdata[$i]['rescnt2'] = count($resHistoryModel);
                $resHisData = array('ResidentalHistory'=>$resdata);

                $empModel = EmploymentInfo::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                foreach($empModel as $emp => $employment){
                    foreach($employment as $key => $val){
                        $empdata[$i][$emp+1][$key] = $val;
                    }
                }
                $empdata[$i]['employment_type'] = $empModel[$i-1]->employment_type;
                $employmentData = array("EmploymentInfo" => $empdata);

                $prModel = PersonalRefrence::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                foreach($prModel as $pr => $personalref){
                    foreach($personalref as $key => $val){
                        $prdata[$i][$pr+1][$key] = $val;
                    }
                }
                $prdata["prcnt2$i"] = count($prModel);
                $personalRefrenceData = array("PersonalRefrence" => $prdata);

                $criModel = CreditInfo::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                if(isset($criModel) && count($criModel) > 0){
                    foreach($criModel as $cri => $creditinfo){
                        foreach($creditinfo as $key => $val){
                            $cridata[$i][$cri+1][$key] = $val;
                        }

                    }
                    $cridata["cricnt2$i"] = count($criModel);
                    $creditInfoData = array("CreditInfo" => $cridata);
                }

                $crrModel = CreditRef::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                if(isset($crrModel) && count($crrModel) > 0){
                    foreach($crrModel as $crr => $creditref){
                        foreach($creditref as $key => $val){
                            $crrdata[$i][$crr+1][$key]=$val;
                        }
                    }
                    $crrdata["crfcnt2$i"] = count($crrModel);
                    $creditRefData = array("CreditRef"=>$crrdata);
                }

                $sbModel = StockBonds::model()->findAll("rd_applicant_info_id = ".$applicant->id);
                if(isset($sbModel) && count($sbModel) > 0){
                    foreach($sbModel as $sb => $stock){
                        foreach($stock as $key => $val){
                            $sbdata[$i][$sb+1][$key] = $val;
                        }
                    }
                    $sbdata["stockcnt2$i"] = count($sbModel);
                    $stockBondsData = array("StockBonds"=>$sbdata);
                }

                $expModel = Expenditures::model()->find("rd_applicant_info_id = ".$applicant->id);
                if(isset($expModel) && count($expModel) > 0){
                    foreach($expModel as $exk => $exp){
                        $exdata[$i][$exk] = $exp;
                    }
                    $expendData = array("Expenditures"=>$exdata);
                }

                $incModel = MonthlyIncome::model()->find("rd_applicant_info_id = ".$applicant->id);
                if(isset($incModel) && count($incModel) > 0){
                    foreach($incModel as $eky => $income){
                        $incdata[$i][$eky] = $income;
                    }
                    $incomeData = array("MonthlyIncome"=>$incdata);
                }

                $otherModel = GeneralInfo::model()->find("rd_applicant_info_id = ".$applicant->id);
                if(isset($otherModel) && count($otherModel) > 0){
                    foreach($otherModel as $gke => $generalinfo){
                        $geninfdata[$i][$gke] = $generalinfo;
                    }
                    $generalInfoData = array("GeneralInfo"=>$geninfdata);
                }

                $i++;
            }

            if(isset($creditInfoData) && isset($creditRefData) && isset($stockBondsData) && isset($expendData) && isset($incomeData)){
                $step6arr1 = array_merge_recursive($creditInfoData, $creditRefData);
                $step6arr2 = array_merge_recursive($stockBondsData, $expendData);
                $step6arr3 = array_merge_recursive($step6arr1, $step6arr2);
                $step6arr4 = array_merge_recursive($step6arr3, $incomeData);
            }

            $step1 = $appArr;
            $step2 = array_merge_recursive(array_merge_recursive($applicantsData, $dependantsData), $vehiclesData);
            $step3 = $resHisData;
            $step4 = $employmentData;
            $step5 = $personalRefrenceData;
            
            if(isset($step6arr4) && isset($generalInfoData)){
                $step6 = $step6arr4;
                $step7 = $generalInfoData;
            }

            Yii::app()->session['step1'] = $step1;
            Yii::app()->session['step2'] = $step2;
            Yii::app()->session['step3'] = $step3;
            Yii::app()->session['step4'] = $step4;
            Yii::app()->session['step5'] = $step5;

            if(isset($step6) && isset($step7)){
                Yii::app()->session['step6'] = $step6;
                Yii::app()->session['step7'] = $step7;
            }
            
            print_r(Yii::app()->session['step1']);
        } else {
            echo 0;
        }
    }
}

?>

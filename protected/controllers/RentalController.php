<?php

class RentalController extends Controller
{
    
    public $layout = "//layouts/rental-column";

    function init(){
//        
//        /*Yii::app()->clientScript->registerCoreScript(Yii::app()->request->baseUrl.'/js/jquery-1.10.2.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerCoreScript(Yii::app()->request->baseUrl.'/js/jquery-ui-1.9.0.custom.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerCoreScript(Yii::app()->request->baseUrl.'/js/jquery.ui.touch-punch.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/facescroll.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/excanvas.compiled.js');	
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.signature.min.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/base64.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/canvas2image.js');         
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js', CClientScript::POS_HEAD);
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js', CClientScript::POS_HEAD); 
//        Yii::app()->clientScript->registerScript('globaljs', '
//            $(".phone").mask("(999) 999-9999");
//            $(".ssn").mask("999-99-9999");
//            $(".currency").autoNumeric();
//            $(".zip").mask("99999");', CClientScript::POS_READY);*/
        parent::init();
        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js');
        
        
    }
    
    public function actions(){

    }
    
    public function actionIndex(){  

        /*$rentalModel = new MsRentalInformation();
        $applicantModel = new MsApplicationInformation();

        //ajax validation
        $this->performAjaxValidation(array($rentalModel, $applicantModel));

        $this->render('index', 
                array('random_user'     => Utils::rand_string(6),
                      'random_pass'     => Utils::rand_string(6),
                      'rentalModel'     => $rentalModel,
                      //'applicantModel'  => $applicantModel,
                ));*/

        /*Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-1.10.2.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-ui-1.9.0.custom.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.ui.touch-punch.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/facescroll.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScript('scroll', '
            $(".right-container").alternateScroll();
            $(".phone").mask("(999) 999-9999");
            $(".currency").autoNumeric();
            $(".zip").mask("99999");
            $(".ssn").mask("999-99-9999");
        ', CClientScript::POS_READY);*/
        
        $tempModel = Temp::model()->findByPk(1);
        if(isset($tempModel) && count($tempModel)> 0){
            Yii::app()->session['step1']['ApplicationInformation']['address'] = $tempModel->address;
            Yii::app()->session['step1']['ApplicationInformation']['city'] = $tempModel->city;
            Yii::app()->session['step1']['ApplicationInformation']['anticipated_date'] = $tempModel->anticipated_date;
            Yii::app()->session['step1']['ApplicationInformation']['save_deposit'] = $tempModel->deposit;
            Yii::app()->session['step1']['ApplicationInformation']['selection'] = $tempModel->selection1;
            Yii::app()->session['step1']['ApplicationInformation']['sub_selection'] = $tempModel->selection2;
            Yii::app()->session['step1']['ApplicationInformation']['state'] = $tempModel->state;
            Yii::app()->session['step1']['ApplicationInformation']['zipcode'] = $tempModel->zipcode;
            Yii::app()->session['step1']['ApplicationInformation']['monthly_rent'] = $tempModel->monthlyrent;
            $tempModel->truncateTable();
        }
        
        $model = new ApplicationInformation;
        
        /*Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); */
        
        $this->render("index", array('model' => $model));
    }
    

    public function actionApplicantchanged(){

        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if($_POST['num_of_applicant']){
            $cnt = $_POST['num_of_applicant'];
            
            if($cnt > 0){
                Yii::app()->session['step1']['num_of_applicant'] = $cnt;
                //$u = 0;
                for($i = 1; $i<=$cnt;$i++){
                    //if(isset(Yii::app()->session['step2']['DependantInfo']['depcnt2'.$i])){
                    //    $step2_cnt2 = Yii::app()->session['step2']['DependantInfo']['depcnt2'.$i];
                    //}
                    $response['step2'][] = $this->renderPartial('_step2_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step3'][] = $this->renderPartial('_step3_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step4'][] = $this->renderPartial('_step4_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step5'][] = $this->renderPartial('_step5_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step6'][] = $this->renderPartial('_step6_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    //$u++;
                }

                //$total_fee = 30*$u;
                $response['step7'] = $this->renderPartial('_step7_form', array('cnt' => $i, 'cnt2' => 1), true, true);
                //$response['step8'] = $this->renderPartial('_step8_form', array('total_fee' => $total_fee), true, true);
                //$response['finalstep'] = $this->renderPartial('_finalstep_form', '', true, true);
                
                
                echo CJSON::encode($response);
            }
        }
    }

    public function actionStep1tosession(){
        if(isset($_POST['ApplicationInformation'])){
            unset(Yii::app()->session['step1']);
            Yii::app()->session['step1'] = $_POST['ApplicationInformation'];
        }
    }

    public function actionShowstep2(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step2_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }

    public function actionStep2tosession(){
        if(isset($_POST['ApplicantInfo']) && isset($_POST['DependantInfo']) && isset($_POST['VehicleInfo'])){
            unset(Yii::app()->session['step2']);
            Yii::app()->session['step2'] = $_POST;
        }
    }

    public function actionShowstep3(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step3_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }

    public function actionStep3tosession(){
        if(isset($_POST)){
            unset(Yii::app()->session['step3']);
            Yii::app()->session['step3'] = $_POST;
        }
    }

    public function actionShowstep4(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step4_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }

    public function actionStep4tosession(){
        if(isset($_POST)){
            unset(Yii::app()->session['step4']);
            Yii::app()->session['step4'] = $_POST;
        }
        
        print_r(Yii::app()->session['step4']);
    }

    public function actionShowstep5(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step5_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }
    
    public function actionStep5tosession(){
        if(isset($_POST)){
            unset(Yii::app()->session['step5']);
            Yii::app()->session['step5'] = $_POST;
        }
        
    }
    
    public function actionShowstep6(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step6_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }
    
    public function actionStep6tosession(){
        
        if(isset($_POST)){
            unset(Yii::app()->session['step6']);
            Yii::app()->session['step6'] = $_POST;
        }
    }
    
    public function actionShowStep7(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step7_form', array('cnt' => $i, 'cnt2' => 1), true, true);
            }
        }
    }
    
    public function actionStep7tosession(){
        if(isset($_POST)){
            unset(Yii::app()->session['step7']);
            Yii::app()->session['step7'] = $_POST;
        }
    }
    
    public function actionShowstep8(){
       
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            $total_fee = 30*$cnt;
            echo $this->renderPartial('_step8_form', array('total_fee' => $total_fee), true, true);
        }
    }
    
    public function actionStep8tosession(){
        if(isset($_POST)){
            unset(Yii::app()->session['step7']);
            Yii::app()->session['step7'] = $_POST;
        }
    }
    
    public function actionShowfinalstep(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            echo $this->renderPartial('_finalstep_form', array('cnt'=>$cnt), true, true);
        }
    }

    public function actionDepnewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_dependant_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }

    public function actionVehnewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_vehicle_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }

    public function actionResnewrow(){     
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        ); 
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_residental_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }

    public function actionEiinewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        );
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2']) && isset($_POST['type'])){
            if($_POST['type'] == "fulltime" || $_POST['type'] == "parttime"){
                $newrow = $this->renderPartial("_employed_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            } else if($_POST['type'] == "selfemployed"){
                $newrow = $this->renderPartial("_self_employed_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            }

            echo $newrow;
        }
    }
    
    public function actionPrnewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        );
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_personal_ref_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2'], 'required'=>false), true, true);
            echo $newrow;
        }
    }
    
    public function actionCrinewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        );
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_credit_info_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }
    
    public function actionCrfnewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        );
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_credit_ref_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }
    
    public function actionStocknewrow(){
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
            'jquery.maskedinput.min.js'=>false,
            'auto-numeric.js'=>false,
        );
        
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_stock_bonds_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true, true);
            echo $newrow;
        }
    }
    
    public function actionOpenall(){
        $applicationModel = ApplicationInformation::model()
                ->with('applicantInfos')
                ->find("code = :code and pass = :pass", array('code'=>$_POST['code'], 'pass'=>md5($_POST['pass'])));
        
        unset(Yii::app()->session['step1']);
        foreach($applicationModel as $appKey => $appVal){
            $appArr[$appKey] = $appVal;
        }
        //$step1 = array('ApplicationInformation'=> $appArr);
        Yii::app()->session['step1'] = $appArr;
    }
    
    public function actionShowstep1(){
        echo $this->renderPartial("_step1_form", '', true);
    }
    
    
    public function actionSaveall(){
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
        
        Yii::app()->session['step1'] = $data1['ApplicationInformation'];
        Yii::app()->session['step2'] = $data2;
        Yii::app()->session['step3'] = $data3;
        Yii::app()->session['step4'] = $data4;
        Yii::app()->session['step5'] = $data5;
        Yii::app()->session['step6'] = $data6;
        Yii::app()->session['step7'] = $data7;
       
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
                        $pass = Utils::rand_string(4);
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

                        $incomeModel = new MonthlyIncome();
                        $incomeModel->attributes = $data6['MonthlyIncome'][$i];
                        $incomeModel->rd_applicant_info_id = $applicantID;
                        $incomeModel->save();

                        $expenseModel = new Expenditures();
                        $expenseModel->attributes = $data6['Expenditures'][$i];
                        $expenseModel->rd_applicant_info_id = $applicantID;
                        $expenseModel->save();

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

                        $genInfo = new GeneralInfo();
                        $genInfo->attributes = $data7['GeneralInfo'][$i];
                        $genInfo->rd_applicant_info_id = $applicantID;
                        $genInfo->save();
                        
                        
                    } else {
                        print_r($applicationModel->getErrors());
                        die();
                    }
                    $i++;
                }
                
                Yii::app()->session['applicationID'] = $applicationID;
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

                            $incomeModel = new MonthlyIncome();
                            $incomeModel->attributes = $data6['MonthlyIncome'][$i];
                            $incomeModel->rd_applicant_info_id = $applicantID;
                            $incomeModel->save();

                            $expenseModel = new Expenditures();
                            $expenseModel->attributes = $data6['Expenditures'][$i];
                            $expenseModel->rd_applicant_info_id = $applicantID;
                            $expenseModel->save();

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

                            $genInfo = new GeneralInfo();
                            $genInfo->attributes = $data7['GeneralInfo'][$i];
                            $genInfo->rd_applicant_info_id = $applicantID;
                            $genInfo->save();


                        } else {
                            print_r("jdkfjkjfsdjfskdjf");
                            print_r($applicationModel->getErrors());
                            die();
                        }
                        $i++;
                    }
                }
            }
            
            echo json_encode($message);
        }    
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax'])){
            echo UActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
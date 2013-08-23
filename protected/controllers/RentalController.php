<?php

class RentalController extends Controller
{
    
    public $layout = "//layouts/rental-column";

//    function init(){
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
//        parent::init();
//    }
    
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
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js', CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js', CClientScript::POS_HEAD);
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
        
        Yii::app()->clientScript->scriptMap=array(
            'jquery'=>false,
            'jquery.ui'=>false,
        ); 
        
        $this->render("index", array('model' => $model));
    }
    

    public function actionApplicantchanged(){

        Yii::app()->clientScript->scriptMap=array(
            'jquery.js'=>false,
            'jquery-ui.min.js'=>false,
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
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            for($i = 1; $i<=$cnt;$i++){
                echo $this->renderPartial('_step2_form', array('cnt' => $i, 'cnt2' => 1), true);
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
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            echo $this->renderPartial('_finalstep_form', array('cnt'=>$cnt), true, true);
        }
    }

    public function actionDepnewrow(){
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_dependant_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }

    public function actionVehnewrow(){
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_vehicle_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }

    public function actionResnewrow(){           
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_residental_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }

    public function actionEiinewrow(){
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
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_personal_ref_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2'], 'required'=>false), true);
            echo $newrow;
        }
    }
    
    public function actionCrinewrow(){
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_credit_info_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }
    
    public function actionCrfnewrow(){
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_credit_ref_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }
    
    public function actionStocknewrow(){
        if(isset($_POST['cnt']) && isset($_POST['cnt2'])){
            $newrow = $this->renderPartial("_stock_bonds_row", array('cnt' => $_POST['cnt'], 'cnt2' => $_POST['cnt2']), true);
            echo $newrow;
        }
    }
    
    public function actionSaveAll(){
        
//        print_r($_POST);
//        die();
        if(!isset(Yii::app()->session['applicationInfoId'])){
            if(isset($_POST['ApplicationInformation'])){
                $applicationModel = new ApplicationInformation();
                $applicationModel->attributes = $_POST['ApplicationInformation'];
                //$applicationModel->save();
                //Yii::app()->session['applicationID'] = Yii::app()->db->getLastInsertID();
            } else if(isset($_POST['ApplicantInfo'])){
                foreach($_POST['ApplicantInfo'] as $applicantInfo){
                    $applicantModel = new ApplicantInfo();
                    $applicantModel->attributes = $applicantInfo;
                    //$applicantModel->rd_application_information_id = Yii::app()->session['applicationID'];
                    //$applicantModel->save();
                    //Yii::app()->session['applicatID'] = Yii::app()->db->getLastInsertID();
                    
                    foreach($_POST['DependantInfo'] as $dependants){
                        foreach($dependants as $dependant){
                            $dependantModel = new DependantInfo();
                            $dependantModel->attributes = $dependant;
                            //$dependantModel->rd_applicant_info_id = Yii::app()->session['applicatID'];
                            print_r($dependantModel->attributes);
                            print_r("<hr/>");
                        }
                    }
                    
                    foreach($_POST['VehicleInfo'] as $vehicles){
                        foreach($vehicles as $vehicle){
                            $vehicleModel = new VehicleInfo();
                            $vehicleModel->attributes = $vehicle;
                            //$dependantModel->rd_applicant_info_id = Yii::app()->session['applicatID'];
                            print_r($vehicleModel->attributes);
                            print_r("<hr/>");
                        }
                    }
                }
                

            } else if($_POST['ResidentalHistory']){

            }
        } else {
            print_r($_POST);
        }
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax'])){
            echo UActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
            // return the filter configuration for this controller, e.g.:
            return array(
                    'inlineFilterName',
                    array(
                            'class'=>'path.to.FilterClass',
                            'propertyName'=>'propertyValue',
                    ),
            );
    }

    public function actions()
    {
            // return external action classes, e.g.:
            return array(
                    'action1'=>'path.to.ActionClass',
                    'action2'=>array(
                            'class'=>'path.to.AnotherActionClass',
                            'propertyName'=>'propertyValue',
                    ),
            );
    }
    */
}
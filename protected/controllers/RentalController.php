<?php

class RentalController extends Controller
{
    public $layout = "//layouts/rental-column";

    function init(){
        parent::init();
        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js');
    }
    
    public function actionIndex(){          
        $tempModel = Temp::model()->findByPk(1);
        if(isset($tempModel) && count($tempModel)> 0){
            $data = array(
                'address'=>$tempModel->address,
                'city' => $tempModel->city,
                'anticipated_date' => $tempModel->anticipated_date,
                'save_deposit' => $tempModel->deposit,
                'selection' => $tempModel->selection1,
                'sub_selection' => $tempModel->selection2,
                'state' => $tempModel->state,
                'zipcode' => $tempModel->zipcode,
                'monthly_rent' => $tempModel->monthlyrent,
            );
            Yii::app()->session['step1'] = $data;
            Yii::app()->db->createCommand()->truncateTable(Temp::model()->tableName());
        }
        
        $model = new ApplicationInformation;

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
                //Yii::app()->session['step1'] = array('num_of_applicant'=> $cnt);
                $u = 0;
                for($i = 1; $i<=$cnt;$i++){
                    $response['step2'][] = $this->renderPartial('_step2_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step3'][] = $this->renderPartial('_step3_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step4'][] = $this->renderPartial('_step4_form', array('cnt' => $i, 'cnt2' => 1), true, true);

                    $response['step5'][] = $this->renderPartial('_step5_form', array('cnt' => $i, 'cnt2' => 1), true, true);
                    if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                        $response['step6'][] = $this->renderPartial('_step6_form', array('cnt' => $i, 'cnt2' => 1), true, true);
                    }
                    $u++;
                }

                $total_fee = 30*$u;
                if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                    $response['step7'] = $this->renderPartial('_step7_form', array('cnt' => $i, 'cnt2' => 1), true, true);
                }
                $response['step8'] = $this->renderPartial('_step8_form', array('total_fee' => $total_fee), true);
                //$response['finalstep'] = $this->renderPartial('_finalstep_form', '', true, true);
 
                
                echo json_encode($response);
            }
        }
    }

    public function actionStep1tosession(){
        if(isset($_POST['ApplicationInformation'])){
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
                echo $this->renderPartial('_step2_form', array('cnt' => $i), true, true);
            }
        }
    }

    public function actionStep2tosession(){
        if(isset($_POST['ApplicantInfo']) && isset($_POST['DependantInfo']) && isset($_POST['VehicleInfo'])){
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
            Yii::app()->session['step4'] = $_POST;
        }
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
            Yii::app()->session['step7'] = $_POST;
        }
    }
    
    public function actionShowstep8(){
       
        if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            $total_fee = 30*$cnt;
            echo $this->renderPartial('_step8_form', array('total_fee' => $total_fee), true);
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
        
        if(isset(Yii::app()->session['step1']['prime_applic_signature'])){
            $cnt = Yii::app()->session['step1']['num_of_applicant'];
            $sign = Yii::app()->session['step1']['prime_applic_signature'];
            echo $this->renderPartial('_finalstep_form', array('cnt'=>$cnt, 'sign'=>$sign), true);
        } else {
            if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
                $cnt = Yii::app()->session['step1']['num_of_applicant'];
                echo $this->renderPartial('_finalstep_form', array('cnt'=>$cnt), true);
            }
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
    
    public function actionShowstep1(){
        echo $this->renderPartial("_step1_form", '', true);
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax'])){
            echo UActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
<?php

class RentalController extends Controller
{
      public function init(){
            $this->layout = "//layouts/rental-main";
            
            /*Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-1.10.2.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-ui-1.9.0.custom.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.ui.touch-punch.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/facescroll.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/excanvas.compiled.js');	
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.signature.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/base64.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/canvas2image.js');*/         
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js'); 
            /*Yii::app()->clientScript->registerScript('jsglobal','        
                $(".phone").mask("(999) 999-9999");
                $(".ssn").mask("999-99-9999");
                $(".currency").autoNumeric();');  */
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
            
            $model = new ApplicationInformation;
            $this->render("index", array('model' => $model));
	}
        
        public function actionApplicantchanged(){
                        
            if($_POST['num_of_applicant']){
                $cnt = $_POST['num_of_applicant'];
                
                if($cnt > 0){
                    
                    $u = 0;
                    for($i = 1; $i<=$cnt;$i++){
                        $step2_cnt2 = 1;
                        //if(isset(Yii::app()->session['step2']['DependantInfo']['depcnt2'.$i])){
                        //    $step2_cnt2 = Yii::app()->session['step2']['DependantInfo']['depcnt2'.$i];
                        //}
                        $response['step2'][] = $this->renderPartial('_step2_form', array('cnt' => $i, 'cnt2' => $step2_cnt2), true, true);
                        
                        $response['step3'][] = $this->renderPartial('_step3_form', array('cnt' => $i), true, true);
                        
                        $response['step4'][] = $this->renderPartial('_step4_form', array('cnt' => $i), true);
                        
                        $response['step5'][] = $this->renderPartial('_step5_form', array('cnt' => $i), true);
                        
                        $response['step6'][] = $this->renderPartial('_step6_form', array('cnt' => $i), true);
                        
                        $u++;
                    }
                    
                    $total_fee = 30*$u;
                    $response['step7'] = $this->renderPartial('_step7_form', array('total_fee' => $total_fee), true);
                    $response['step8'] = $this->renderPartial('_step8_form', '', true);
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
            if(isset(Yii::app()->session['step1']['num_of_applicant']) && !empty(Yii::app()->session['step1']['num_of_applicant']) && Yii::app()->session['step1']['num_of_applicant'] > 0){
                $cnt = Yii::app()->session['step1']['num_of_applicant'];
                for($i = 1; $i<=$cnt;$i++){
                    echo $this->renderPartial('_step3_form', array('cnt' => $i), true, true);
                }
            }
        }
        
        public function actionStep3tosession(){
            
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
<?php

class RentalController extends Controller
{
        public $layout = "//layouts/rental-main";
        
        public function init(){
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js');
            Yii::app()->clientScript->registerScript('jsglobal','        
                $(".phone").mask("(999) 999-9999");
                $(".ssn").mask("999-99-9999");
                $(".currency").autoNumeric();');
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
                        $applicantModel = new ApplicantInfo();
                        $response['step2'][] = $this->renderPartial('_step2_form', array('cnt' => $i, 'model'=>$applicantModel), true, true);
                        
                        $residentalModel = new ResidentalHistory();
                        $response['step3'][] = $this->renderPartial('_step3_form', array('cnt' => $i, 'model'=>$residentalModel), true, true);
                        
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
 
        /*public function actionStep1tosession(){
            $value = 0;
            $model = new MsRentalInformation();
            if(isset($_POST['MsRentalInformation'])){
                $model->attributes = $_POST['MsRentalInformation'];
                if($model->validate()){
                    Yii::app()->session['step1'] = $model;
                    $value = 1;
                }         
            }
            
            echo $value;
        }
        
        public function actionApplicantchanged(){
            if(isset($_POST['selected_id'])){
                $count = $_POST['selected_id'];
                if($count > 0){
                    for($i = 1; $i<=$count;$i++){
                        $applicantModel = new MsApplicationInformation();   
                        echo $this->renderPartial('_step2_form', array("applicantModel"=>$applicantModel, 'count'=>$i), true);
                    }
                }
            }
        }*/
        
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
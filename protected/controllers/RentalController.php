<?php

class RentalController extends Controller
{
        public $layout = "//layouts/rental-main";
        
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
                    for($i = 1; $i<=$cnt;$i++){
                        $applicantModel = new ApplicantInfo();
                        echo $this->renderPartial('_step2_form', array('cnt' => $i, 'model'=>$applicantModel), true);
                    }
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
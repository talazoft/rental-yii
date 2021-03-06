<?php

class GenpdfController extends Controller
{
	public function actionEmptypdf()
	{
            Yii::import('ext.pdf.Pdf');
            if(isset(Yii::app()->session['step1']['selection'])){
                if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                    $pdfhtml = $this->renderPartial('//sendmail/_forlease', array(), true, true);
                    $pdf = new Pdf();
                    $pdf->render($pdfhtml, "rental_information", 0, 'letter');
                } else {
                    $pdfhtml = $this->renderPartial('//sendmail/_forsale', array(), true, true);
                    $pdf = new Pdf();
                    $pdf->render($pdfhtml, "rental_information", 0, 'letter');
                    die();
                }
            }
	}

	public function actionGeneratepdf()
	{
            Yii::import('ext.pdf.Pdf');
            if(isset(Yii::app()->session['step1']['selection'])){
                if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                    $pdfhtml = $this->renderPartial('_forlease', array(), true, true);
                    $pdf = new Pdf();
                    $pdf->render($pdfhtml, "rental_information", 0, 'letter');
                    die();
                } else {
                    $pdfhtml = $this->renderPartial('_forsale', array(), true, true);
                    $pdf = new Pdf();
                    $pdf->render($pdfhtml, "rental_information", 0, 'letter');
                    die();
                }
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
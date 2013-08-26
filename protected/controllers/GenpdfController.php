<?php

class GenpdfController extends Controller
{
	public function actionEmptypdf()
	{
            Yii::import('ext.pdf.Pdf');
            if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                $pdfhtml = $this->renderPartial('_forlease', array(), true, true);
                $pdf = new Pdf();
                $pdf->render($pdfhtml, "rental_information", 1);
            } else if(strtolower(Yii::app()->session['step1']['selection']) == "apartment"){
                echo $this->renderPartial('_forsale', '', true);
                die();
            }
	}
        
        public function sendemail(){
                      
            if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
                $subjc = "Lease Application Form";
            } else {
                $subjc = "Rent Apartment Form";
            }
            
            $message ='
                <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                        <table>
                            <tr>
                                <td>Attachment</td>
                                <td>:</td>
                                <td>rental_information.pdf</td>
                            </tr>
                        </table>
                    </body>
                </html>';
            
            Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;
            $mail->IsSMTP();
            $mail->Host = 'vamproperty.com';
            $mail->Port = '25';
            $mail->SMTPAuth = true;
            $mail->Username = "info@vamproperty.com";
            $mail->Password = "VAMproject123";
            $mail->SetFrom("info@vamproperty.com", "Vamproperty");
            $mail->Subject = "Vamproperty - $subjc";
            $mail->SMTPDebug = 1;
            $mail->MsgHTML($message);
            $mail->AddAttachment(Yii::app()->baseUrl, "rental_information.pdf");
            $mail->AddAddress('arruuhul.jadid@gmail.com');
        }
        
        public function actionShowplainhtml(){
             echo $this->renderPartial('_forlease', array(), true, true);
        }

	public function actionGeneratepdf()
	{
		$this->render('generatepdf');
	}

	public function actionIndex()
	{
		$this->render('index');
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
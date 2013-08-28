<?php

class SendmailController extends Controller
{
    public function actionIndex()
    {
        if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
            $subjc = "Lease Application Form";
        } else {
            $subjc = "Rent Apartment Form";
        }
        
        $destination = Yii::app()->session['step2']['ApplicantInfo'][1]['email'];
        
        if(isset($_POST['fill']) && $_POST['fill'] == 1){
            $template = '//genpdf/_forlease';
        } else {
            if(isset($_POST['dest'])){
                $template = '_forlease';
                $destination = $_POST['dest'];
            }
        }
        
        
        Yii::import('ext.pdf.Pdf');
        if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
            $pdfhtml = $this->renderPartial($template, array(), true, true);
            $pdf = new Pdf();
            $pdf->for_email($pdfhtml, "rental_information", 'letter');
            
        } else if(strtolower(Yii::app()->session['step1']['selection']) == "apartment"){
            $pdfhtml = $this->renderPartial($template, array(), true, true);
            $pdf = new Pdf();
            $pdf->for_email($pdfhtml, "rental_information", 'letter');

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
        $mail->Password = "VAMmail123";
        $mail->SetFrom("info@vamproperty.com", "Vamproperty");
        $mail->Subject = "Vamproperty - $subjc";
        //$mail->SMTPDebug = 1;
        $mail->MsgHTML($message);
        $mail->AddAttachment("printedforms/rental_information.pdf");
        
        $mail->AddAddress($destination/*, "info@vamproperty.com"*/);
        if($mail->Send()){
            $status = array('status' => 'success', 'message' => $this->renderPartial('mail_sent', '', true));
        } else {
            $status = array('status' => 'fail', 'message' => "Mail was not sent <p> Mailer Error: " . $mail->ErrorInfo);
        }
        echo json_encode($status);
    }
}
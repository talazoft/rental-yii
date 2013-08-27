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
        
        if(isset($_POST['fill'])){
            $template = '//genpdf/_forlease';
        } else {
            $template = '_forlease';
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
        $mail->SMTPDebug = 1;
        $mail->MsgHTML($message);
        $mail->AddAttachment("printedforms/rental_information.pdf");
        
        $mail->AddAddress(Yii::app()->session['step2']['ApplicantInfo'][1]['email']/*, "info@vamproperty.com"*/);
        if($mail->Send()){
            $status = $this->renderPartial('mail_sent', '', true);
        } else {
            $status = "Message was not sent <p>";
            $status .= "Mailer Error: " . $mail->ErrorInfo;
        }
        echo $status;
    }
}
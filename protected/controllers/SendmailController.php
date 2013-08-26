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
        $mail->AddAddress(Yii::app()->session['step1']['prime_applic_email'], "info@vamproperty.com");
        $mail->Send();
    }
}
<?php

/*
* Print to pdf using dompdf HTML to PDF converter
*
* For example, to create pdf put this action into controller:
* <pre>
* public function actionPrintToPdf()
* {
* Yii::import('ext.vendors.pdf.Pdf',true);
* $model = $this->loadModel();
* $html = $this->renderPartial('_print', array('model'=>$model), true, true);
* $pdf = new Pdf();
* $pdf->render($html, '{name of pdf file}');
* }
* </pre>
*
* @link http://code.google.com/p/dompdf/
*/
class Pdf
{
    public function render($html,$filename,$attachment=1,$paper='a4',$orientation='portrait')
    {       
        require_once(dirname(__FILE__).'/dompdf/dompdf_config.inc.php');
        spl_autoload_unregister(array('YiiBase','autoload'));
        spl_autoload_register(array('YiiBase','autoload'));
        
        $dompdf=new DOMPDF();
        $dompdf->DOMPDF_ENABLE_REMOTE = true;
        $dompdf->load_html($html);
        $dompdf->set_paper($paper,$orientation);
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment"=>$attachment));
    }
}
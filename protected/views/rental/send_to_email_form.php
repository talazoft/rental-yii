<html>
    <head>
        <title>Send to Email</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <!-- <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script> -->
    <div id='msgform2'></div>
    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <!-- Save for Web Slices (Untitled-1) -->
        <table>
            <tr>
                <td background="images/send_form.png" width="271" height="145" align="center" valign="middle">
                    <table>
                        <tr>
                            <td colspan=2><br></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="" style="background:#FFF" id="txtemail" name="txtemail">
                            </td>
                            <td>
                                <a href="#" id='btnsend'>
                                    <img src="images/submit_send.png" width="71" height="30">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <?php 
                                    $img = CHtml::image(Yii::app()->baseUrl."/images/download.png", 'download');
                                    $url = Yii::app()->createUrl('/genpdf/emptypdf');
                                    echo CHtml::link($img, $url, array('target'=>'_blank', 'id'=>'btndownload'));
                                ?><!-- 
                                <a href="index.php/save_form/pdfkosong" target="_blank" id="btndownload">
                                    <img src="images/download.png" >
                                </a> -->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- End Save for Web Slices -->
    </body>
</html>
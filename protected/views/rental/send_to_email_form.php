<script>
    $(function(){
        $("#btnsend").unbind('click').click(function(){
            var sendemailurl = "<?php echo Yii::app()->createUrl("sendmail"); ?>";
            $.post(sendemailurl, {dest:$("#txtemail").val()}, function(response){
                var jsonmessage = jQuery.parseJSON(response);
                if(jsonmessage.status == 'success'){
                    $("#box4").html(jsonmessage.message);
                    $("#box4").show();
                } else {
                    alert(jsonmessage.message);
                }
            });
        });
    });
</script>
<div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
</div>
<script>
    $(function(){
        $("#open").unbind('click').click(function(){
            var openurl = "<?php echo Yii::app()->createUrl("rental/openall"); ?>";
            var data = {code:$("#txtcode").val(), pass:$("#txtpassword").val()}
            $.post(openurl, data, function(response){              
                var step1url = "<?php echo Yii::app()->createUrl("rental/showstep1"); ?>";
                $("#ri").load(step1url);
                
            });
        });
    });
</script>
<div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="width:282px;">
    <!-- Save for Web Slices (Untitled-1) -->
    <table>
        <tr>
            <td background="img/savedform.png" width="278" height="143" align="center" valign="middle">
                <table>
                    <tr>
                        <td colspan=3 align="right"><br></td>
                    </tr>
                    <tr>
                        <td>Form Code</td>
                        <td>:</td>
                        <td>
                            <input type="text" style="background:#FFF" id="txtcode" name="code" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="" style="background:#FFF" id="txtpassword" name="pass" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=3 align="right">
                            <a href="#" id="open">
                                <img src="images/submit_send.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <!-- End Save for Web Slices -->
</div>

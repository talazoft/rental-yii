<link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/jquery.signature.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
<!--[if IE]>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>	
<![endif]-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.signature.min.js"></script>
<p class="padding" align="justify">Applicant represents all information on this Application to be true and accurate and understands that owner / manager will rely upon said information when accepting this Application whether an independent investigation has been performed or not. Applicant hereby authorizes owner/manager and his/her/its employees and agents to verify said information and make independent investigations in person, by mail, phone, fax, or otherwise, to determine Applicant's rental, credit, financial and character standing. Applicant hereby releases owner/manager, his/her/its employees and agents, Vantage Asset Management, Ltd., its employees and agents and any and all other firms or persons investigating or supplying information, from any liability whatsoever concerning the release and/or use of said information and further, will hold them all harmless from any suit or reprisal whatsoever. All holders, public and private, of any such information are hereby authorized to release, without limitation, any and all such information they have concerning Applicant and in so doing, will be acting on Applicant's behalf at Applicant's request and will be held blameless and without any liability whatsoever. A copy or other reproduction of this Authorization shall be as effective as the original. </p>
<p class="padding" align="justify">I / we, the undersigned, authorize Vantage Asset Management. Ltd., Landlord and its agents to obtain an investigative consumer credit report including but not limited to credit history, OFAC search, landlord/tenant court record search, criminal record search and registered sex offender search. I authorize the release of information from previous or current landlords, employers, and bank representatives. This investigation is for resident screening purposes only, and is strictly confidential. This report contains information compiled from sources believed to be reliable, but the accuracy of which cannot be guaranteed. I hereby hold Vantage Asset Management. Ltd., Landlord and its agents free and harmless of any liability for any damages arising out of any improper use of this information. Important information about your rights under the Fair Credit reporting Act: </p>
<ul style="left:auto" type="disc">
    <li>
        You have a right to request disclosure of the nature and scope of the investigation.
    </li>
    <li>
        You must be told if information in your file has been used against you.
    </li>
    <li>
        You have a right to know what is in your file, and this disclosure may be free.
    </li>
    <li>
        You have the right to ask for a credit score (there may be a fee for this service).
    </li>
    <li>
        You have the right to dispute incomplete or inaccurate information. Consumer reporting agencies must correct inaccurate, incomplete, or unverifiable information.
    </li>         
</ul>
<div style="float:left; margin-left:32px">
    <input id="cekagree" name="cekagree" type="checkbox"> I agree to the Terms of Use
</div>
<div style="clear: both"></div>
<div id="divbutton" style="float: right; width: 517px; margin-top: 15px;">
    <div id="saveform2" style="float: left"></div>
    <div id="btnshowhtml" style="float: left"></div>
</div>
<div id="showhtml">
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td><!-- 
                    <a href="#" onclick="openCenteredWindow2('index.php/pdf_isi')">
                    <img border=0 src="images/print_pdf.png">
                    </a> -->
                    <div id="printpdf"></div>
                </td>
                <td align="right">
                    <!-- <a href="#" id="sendemailpdf">
                    <img border=0 src="images/send_email.png">
                    </a> -->
                    <div id="sendemailpdf"></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="kbw-signature" id="signature" style="margin-top: 7px; margin-left: 37px;">
</div>
<div style="margin-left: 36px; margin-top: 10px">
    <div id="signature-label" style="margin-left: 15px;">
        Primary applicant sign
        <img src="images/star.png">
    </div>
    <a href="#" id="reset-signature" style="margin-left: 29px;">
        Click here to reset
    </a>
</div>
<input name="prime_applic_signature" id="signJson" type="hidden" value='<?php echo isset(Yii::app()->session['step1']['prime_appic_signature']) ? Yii::app()->session['step1']['prime_appic_signature'] : "" ?>' >
<script>
$(function(){
    
    $("#reset-signature").click(function(){
        $("#signature").signature('clear');
        $("#signed").attr('width','167');
        $("#signed").attr('height','50');
    });
    <?php
    // try to use this http://thomasjbradley.ca/lab/signature-pad/accept/
    if (isset(Yii::app()->session['step1']['prime_appic_signature'])){ 
        ?>
        var json = $("#signJson").val();

        $("#signature").signature({
            id:'signed',
            draw: json,
            syncField: '#signJson',
        });
        
        $("#signed").attr('width','167');
        $("#signed").attr('height','50');
    <?php 
    } else { ?>
        $("#signature").signature({id:'signed', syncField:'#signJson'});
        $("#signed").attr('width','167');
        $("#signed").attr('height','50');
    <?php
    }
    ?>
      
    function validate(name){

        $("."+name+" :required").each(function(){
            var element = $(this);
            element.css({border:"", color:""});
            element.removeAttr("placeholder");
        });

        var test1 = 0;
        var test2 = 0;
        $("."+name+" :required").each(function(){
            var element = $(this);
            if(element.val() == ""){
                element.css({border:"2px solid red", color:"red"});
                element.attr("placeholder", "this field is required");
                test1--;
            } else {
                test1++;
                test2++;
            }
        });

        if(test1 == test2){
            return true;
        } else {
            return false;
        }
    }
    $("#saveform2").unbind('click').click(function(){
        var saveallurl = "<?php echo Yii::app()->createUrl("rental/saveall"); ?>";
        
        var data1 = $(".step1-form").serialize();
        var data2 = $(".step2-form").serialize();
        var data3 = $(".step3-form").serialize();
        var data4 = $(".step4-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
        var data5 = $(".step5-form").serialize();
        var data6 = $(".step6-form").serialize();
        var data7 = $(".step7-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
        var data8 = {sign:$("#signJson").val(), payment_type:$("#payment_type option:selected").val()};
        
        var alldata = {data1:data1, data2:data2, data3:data3, data4:data4, data5:data5, data6:data6, data7:data7, data8:data8};
        
        if(validate("step1-form")&&validate("step2-form")&&validate("step3-form")&&validate("step4-form")&&validate("step5-form")){
            $.post(saveallurl, alldata);
        }
    });
    
    $("#btnshowhtml").unbind('click').click(function(){
        $(this).hide();
        $("#showhtml").show();
    });
});
</script>
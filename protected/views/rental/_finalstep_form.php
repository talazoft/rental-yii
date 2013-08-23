<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.signature.min.js"></script>
<link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/jquery.signature.css" rel="stylesheet" />
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
<input name="prime_applic_signature" id="signJson" type="hidden">
<script>
$(function(){
    
    $("#reset-signature").click(function(){
        $("#signature").signature('clear');
    });
    <?php
    
    if (isset(Yii::app()->session['step1']['prime_applic_signature'])){ 
        $signJson = Yii::app()->session['step1']['prime_applic_signature'];
        ?>
        var json = <?php echo $signJson; ?>;
        $("#signature").signature({
            id:'signed',
            draw: json,
            syncField: '#signJson'
        });	
    <?php 
    } else { ?>
        $("#signature").signature({id:'signed', syncField:'#signJson'});
    <?php
    }
    ?>
        
    $("#saveform2").unbind('click').click(function(){
        var saveurl = "<?php echo Yii::app()->createUrl("rental/saveall"); ?>";
    });
    
    $("#btnshowhtml").unbind('click').click(function(){
        $(this).hide();
        $("#showhtml").show();
    });
});
</script>